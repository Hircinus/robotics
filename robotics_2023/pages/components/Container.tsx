import {NextPage} from "next";
import {Props} from "next/script";
import Row from "./Row";

const Container = (props:any) => {
    return <div className="container">
        {props.rows.forEach((r:any)=>(
            <Row centered={r.centered} content={r.content}></Row>
        ))}
    </div>;
}

export default Container