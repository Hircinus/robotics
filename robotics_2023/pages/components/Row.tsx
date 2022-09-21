import {NextPage} from "next";
import {Props} from "next/script";
import Col from "./Col";

const Row = (props:any) => {
    return <div className="row-span-full">
        {props.cols.forEach((c:any)=>(
            <Col centered={c.centered} content={c.content}></Col>
        ))}
    </div>;
}

export default Row