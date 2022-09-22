import Col from "./Col";

const Row = (props:any) => {
    return <div className={"grid justify-content-center grid-cols-1 gap-6 md:grid-cols-"+(props.cols.length/2)+" lg:grid-cols-"+props.cols.length}>
        {props.cols.map((c:any)=>(
            <Col count={props.cols.length} centered={c.centered} content={c.content}></Col>
        ))}
    </div>;
}

export default Row