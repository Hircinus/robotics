import Col from "./Col";
import {string} from "prop-types";
import { FC } from "react";
type props = {
    gap:Number,
    cols:{centered:Boolean, content:JSX.Element}[]
}
const Row:FC<props> = ({gap, cols}) => {
    let names : string = (cols.length>0) ? 'lg:grid-cols-' + cols.length + ' md:grid-cols-' + (cols.length/2) + ' grid-cols-1 grid gap-' + gap : 'grid-cols-1 grid'
    return <div className={names}>
        
        {cols.map((c)=>(
            <Col centered={c.centered} content={c.content}></Col>
        ))}
        
    </div>;
}

export default Row