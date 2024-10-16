import { MouseEventHandler, useState } from "react";

export default function Board() {
  const [xIsNext, setXIsNext] = useState(true);
  const [squares, setSquares] = useState(Array(9).fill(null));

  function handleClick(i: number) {
    const nextSquares = squares.slice();
    nextSquares[i] = xIsNext ? "X": "O";
    setSquares(nextSquares);
    setXIsNext(!xIsNext);
  }

  return (
    <>
      <div className="board-row">
        <Cuadrado value={squares[0]} onSquareClick={() => handleClick(0)} />
        <Cuadrado value={squares[1]} onSquareClick={() => handleClick(1)} />
        <Cuadrado value={squares[2]} onSquareClick={() => handleClick(2)} />
      </div>
      <div className="board-row">
        <Cuadrado value={squares[0]} onSquareClick={() => handleClick(0)} />
        <Cuadrado value={squares[1]} onSquareClick={() => handleClick(1)} />
        <Cuadrado value={squares[2]} onSquareClick={() => handleClick(2)} />
      </div>
      <div className="board-row">
        <Cuadrado value={squares[0]} onSquareClick={() => handleClick(0)} />
        <Cuadrado value={squares[1]} onSquareClick={() => handleClick(1)} />
        <Cuadrado value={squares[2]} onSquareClick={() => handleClick(2)} />
      </div>
    </>
  );
}

interface sq{
  value: string
  onSquareClick: MouseEventHandler
}
function Cuadrado(props: sq) {
  const { value, onSquareClick } = props;
  const my_style = {
    width: "33px",
    height: "33px",
    padding: "8px",
    margin: "3px"
  };

  return (
    <button className="square" onClick={onSquareClick} style={my_style}>
      {value}
    </button>
  )
}
