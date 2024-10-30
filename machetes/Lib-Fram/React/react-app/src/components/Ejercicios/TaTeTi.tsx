import { MouseEventHandler, useState } from "react";

export default function Board() {
  const [xIsNext, setXIsNext] = useState(true);
  const [squares, setSquares] = useState(Array(9).fill(null));

  function handleClick(i: number) {
    // comprobar si hay ganador o si ya está ocupado
    if (calculateWinner(squares) || squares[i]) return;

    const nextSquares = squares.slice();
    nextSquares[i] = xIsNext ? "X": "O";
    setSquares(nextSquares);
    setXIsNext(!xIsNext);
  }

  const winner = calculateWinner(squares);
  let status;
  if (winner) {
    status = 'Ganador: ' + winner;
  } else {
    status = 'Siguiente jugador: ' + (xIsNext ? 'X' : 'O');
  }

  return (
    <>
      <div className="status">{status}</div>
      <div className="board-row">
        <Cuadrado value={squares[0]} onSquareClick={() => handleClick(0)} />
        <Cuadrado value={squares[1]} onSquareClick={() => handleClick(1)} />
        <Cuadrado value={squares[2]} onSquareClick={() => handleClick(2)} />
      </div>
      <div className="board-row">
        <Cuadrado value={squares[3]} onSquareClick={() => handleClick(3)} />
        <Cuadrado value={squares[4]} onSquareClick={() => handleClick(4)} />
        <Cuadrado value={squares[5]} onSquareClick={() => handleClick(5)} />
      </div>
      <div className="board-row">
        <Cuadrado value={squares[6]} onSquareClick={() => handleClick(6)} />
        <Cuadrado value={squares[7]} onSquareClick={() => handleClick(7)} />
        <Cuadrado value={squares[8]} onSquareClick={() => handleClick(8)} />
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


function calculateWinner(squares: string[]) {
  const lines = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
  ];
  for (let i = 0; i < lines.length; i++) {
    const [a, b, c] = lines[i];
    if (squares[a] && squares[a] === squares[b] && squares[a] === squares[c]) {
      return squares[a];
    }
  }
  return null;
}