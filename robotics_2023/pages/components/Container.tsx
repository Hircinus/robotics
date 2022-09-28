import Row from "./Row";

const Container = (props:any) => {
    return <div className={"container mx-auto " + (props.isHero ? "mt-10" : "")}>
            <Row cols={props.cols} gap={props.gap} centered={props.centered} content={props.content}></Row>
    </div>;
}

export default Container