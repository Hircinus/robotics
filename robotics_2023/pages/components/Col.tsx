const Col = (props:any) => {
    return <div className={(props.centered) ? "flex text-center" : "flex"}>{props.content}</div>;
}

export default Col