import { FC } from "react";

type props = {
    centered:Boolean,
    content:JSX.Element
}
const Col:FC<props> = ({centered, content}) => {
    return <div className={(centered) ? "text-center" : ""}>{content}</div>;
}

export default Col