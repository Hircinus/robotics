import Col from "./Col";
import {string} from "prop-types";

const Row = (props:any) => {
    let names : string = (props.cols.length>0) ? 'lg:grid-cols-' + props.cols.length + ' md:grid-cols-' + (props.cols.length/2) + ' grid-cols-1 grid gap-' + props.gap : 'grid-cols-1 grid'
    return <div className={names}>
        {props.cols.map((c:any)=>(
            <Col key={c.index} centered={c.centered} content={c.content}></Col>
        ))}
    </div>;
}

export default Row