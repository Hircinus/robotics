import {NextPage} from "next";
import {Props} from "next/script";

const Col = (props:any) => {
    return <div className={(props.centered) ? "col-auto text-center" : "col-auto"}>{props.content}</div>;
}

export default Col