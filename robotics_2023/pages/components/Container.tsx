import { FC } from "react";
import Row from "./Row";
type props = {
    gap:Number,
    cols:{centered:Boolean, content:JSX.Element}[],
    isHero: Boolean
}
const Container:FC<props> = ({gap, cols, isHero}) => {
    return <div className={"container mx-auto " + (isHero ? "mt-10" : "")}>
            <Row cols={cols} gap={gap}></Row>
    </div>;
}

export default Container