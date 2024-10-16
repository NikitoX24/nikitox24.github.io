interface Props {
  body: string;
}
function Card(props: Props) {
  const { body } = props;
  return (
    <div className="card" style={{ width: "350px" }}>
      <div className="card-body"> {body} </div>
    </div>
  );
}
export default Card;

// -------------------------------- //

interface CardBodyProps {
  title: string;
  text: string;
}
export function CardBody(props: CardBodyProps) {
  const { title, text } = props;
  return (
    <>
      <h5 className="card-title"> {title} </h5>
      <p className="card-text"> {text} </p>
    </>
  );
}

// -------------------------------- //

interface CardBodyChildProps {
  children: string;
}
export function CardBodyChild(props: CardBodyChildProps) {
  const { children } = props;
  return <h1> {children} </h1>;
}
