import styles from "./CSSListaStock.module.css";
import { Dispatch, ReactNode } from "react";
import { useState } from 'react';

type itemType = {
  id: number;
  category: string;
  price: string;
  stocked: boolean;
  name: string;
}

const lista = [
  { id:1, category: "Frutas",   price: "$1", stocked: true,  name: "Manzana" },
  { id:3, category: "Frutas",   price: "$2", stocked: false, name: "Maracuyá" },
  { id:4, category: "Verduras", price: "$2", stocked: true,  name: "Espinaca" },
  { id:5, category: "Verduras", price: "$4", stocked: false, name: "Calabaza" },
  { id:2, category: "Frutas",   price: "$1", stocked: true,  name: "Fruta del dragón" },
  { id:6, category: "Verduras", price: "$1", stocked: true,  name: "Guisantes" },
  { id:7, category: "Otros",    price: "$1", stocked: true,  name: "Huevos" },
];



interface searchProps{
  filterText: string, 
  inStockOnly: boolean,
  onFilterTextChange: Dispatch<string>,
  onInStockOnlyChange: Dispatch<boolean>
}
function SearchBar(props: searchProps) {
  const {filterText, inStockOnly, onFilterTextChange, onInStockOnlyChange} = props;
  return (
    <form>
      <input 
        type="text" 
        value={filterText} 
        placeholder="Buscar..."
        onChange={(e) => onFilterTextChange(e.target.value)}
      />
      <br />
      <label>
        <input type="checkbox" checked={inStockOnly} 
          onChange={(e) => onInStockOnlyChange(e.target.checked)}/>
          Mostrar solo productos en stock
      </label>
    </form>
  );
}



// item
function Item(props: {product: itemType}) {
  const { product } = props;
  return (
    <div className={styles.item} key={product.id}>
      <span className={[styles.spanRow, `${!product.stocked && styles.rojo}`].join(" ")}> {product.name} </span>
      <span className={styles.spanRow}> {product.price} </span>
    </div>
  )
}



// Categoria
interface catProps{ 
  catName: string;
  products: Array<itemType>;
}
function Category(props: catProps) {
  const { catName, products } = props;
  return (
    <div className={styles.category}>
      <span className={styles.span}>{catName}</span>
      <div>
        {products.map(prod => <Item product={prod} key={prod.id}/> )}
      </div>
    </div>
  )
}



// categorias
interface categoryesProps{ 
  filterText: string, 
  inStockOnly: boolean
}
function Categoryes(props: categoryesProps) {
  const {filterText, inStockOnly} = props;
  const categories = new Set<string>();
  const categoriesRow: ReactNode[] = [];

  // nombres de categorías
  lista.forEach(product => {
    categories.add(product.category);
  })

  // items Por Categoria
  function itemPorCategoria(lista: Array<itemType>, categoria: string){
    const newList: Array<itemType> = [];

    lista.forEach(elem => {
      if (elem.name.toLowerCase().indexOf( filterText.toLowerCase() ) === -1 ) return ; // item buscado
      if (inStockOnly && !elem.stocked)     return; // stock check
      if (elem.category == categoria)       { newList.push(elem) } // categoría
    });

    return newList;
  }

  // Crear categorias con items
  categories.forEach(catName => {
    categoriesRow.push( <Category catName={catName} products={itemPorCategoria(lista, catName)} key={catName}/> );
  });

  return categoriesRow;
}



// ---------------------
//         TABLE
// ---------------------
export default function Table() {
  const [filterText, setFilterText] = useState('');
  const [inStockOnly, setInStockOnly] = useState(false);

  return (
    <div className={styles.table}>
      <SearchBar 
        filterText={filterText} 
        inStockOnly={inStockOnly}
        onFilterTextChange={setFilterText}
        onInStockOnlyChange={setInStockOnly} 
      />

      <div className={styles.productTable}>
        <Categoryes 
          filterText={filterText}
          inStockOnly={inStockOnly}
        />
      </div>
    </div>
  ) 
}