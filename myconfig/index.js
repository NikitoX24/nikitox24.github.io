export default function index() {
  const textoicon = document.querySelectorAll('.textoIcon');
  textoicon.forEach(i => {i.innerHTML = `<hr> <h1>${logo_25px}${i.innerHTML}${logo_25px}</h1> <hr>`})
}