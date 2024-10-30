// import "./Style.css";

export default function Style() {
  const color = "red"; // variable

  // Opcional (varias propiedades)
  const my_style = {
    width: "350px",
    height: "500px"
  };
  
  return (
    <div style={{ width: "350px", color: color}}>
      <div style={my_style}></div>
    </div>
  );
}