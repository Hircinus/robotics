const Col = (props:any) => {
    return <div key={props.key} className={(props.centered) ? "text-center" : ""}>{props.content}</div>;
}

export default Col