import type { NextPage } from 'next'
import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'
import Container from "./components/Container";
import Col from "./components/Col";

const Home: NextPage = () => {
  return (
    <div>
      <Head>
        <title>Robotics 2023</title>
        <meta name="description" content="Robotics 2023 website" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main>
        <Container gap={6} isHero={true} cols={[{
                centered: true,
                content: <div>
                            <h1 className="text-3xl">Title</h1>
                            <hr />
                            <a href="https://google.ca">Google.ca</a>
                        </div>
            },
            {
                centered: true,
                content: <div className="">
                            <h1>Title</h1>
                            <hr />
                            <a href="https://google.ca">Google.ca</a>
                        </div>
            },
            {
                centered: true,
                content: "hello"
            },
            {
                centered: true,
                content: "hello"
            }]}></Container>
      </main>

      <footer>
        <a
          href="https://vercel.com?utm_source=create-next-app&utm_medium=default-template&utm_campaign=create-next-app"
          target="_blank"
          rel="noopener noreferrer"
        >
          Powered by{' '}
          <span className={styles.logo}>
            <Image src="/vercel.svg" alt="Vercel Logo" width={72} height={16} />
          </span>
        </a>
      </footer>
    </div>
  )
}

export default Home
