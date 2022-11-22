import Container from "./components/Container";

const About = () => {
    return <div>
        <Container gap={2} isHero={false} cols={[{
            centered: true,
            content: <div className="min-h-full min-w-full">
                <h1>About us</h1>
                <hr />
                <p>A little about us&hellip;</p>
            </div>
        }]
        }></Container>
    </div>
}

export default About
