import type { NextPage } from 'next'
import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'
import Container from "./components/Container";

const Home: NextPage = () => {
    let cols_temp = [
        {
            centered: true,
            content: "hello"
        },
        {
            centered: true,
            content: "hello"
        },
        {
            centered: true,
            content: "hello"
        },
    ];
    let rows_temp = [
        {
            centered: true,
            content: "hello"
        }
    ];
    cols_temp.forEach((e)=>{
        console.log(e.content);
    });
  return (
    <div>
      <Head>
        <title>Robotics 2023</title>
        <meta name="description" content="Robotics 2023 website" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main>
        <Container cols={cols_temp} rows={rows_temp}></Container>
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
