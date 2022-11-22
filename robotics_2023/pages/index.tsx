import type { NextPage } from 'next'
import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'
import Container from "./components/Container";
import Col from "./components/Col";
import {Fragment, useState} from "react";
import Link from "next/link";
import Footer from './components/Footer';
import Navbar from './components/Navbar';
import { GrYoutube } from 'react-icons/gr';
import { relative } from 'path';

const Home: NextPage = () => {
    const [navbar, setNavbar] = useState(false);
    return (
    <div>
      <Head>
        <title>Robotics 2023</title>
        <meta name="description" content="Robotics 2023 website" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main>
          <Navbar navbar={navbar} setNavbar={setNavbar}></Navbar>

          <Container gap={6} isHero={true} cols={[{
                centered: true,
                content: <Fragment>
                            <h1 className="text-3xl">CRC Robotics 2023</h1>
                            <hr />
                            <p>Codename: <strong>Avia</strong></p>
                        </Fragment>
            }]}></Container>
            <Container gap={6} isHero={true} cols={[{
                centered: true,
                content: <Fragment>
                            <h1 className="text-3xl">Title</h1>
                            <hr />
                            <a href="https://google.ca">Google.ca</a>
                        </Fragment>
            },
            {
                centered: true,
                content: <Fragment>
                            <h1>Title</h1>
                            <hr />
                            <a href="https://google.ca">Google.ca</a>
                        </Fragment>
            },
            {
                centered: true,
                content: <Fragment>"hello"</Fragment>
            },
            {
                centered: true,
                content: <Fragment>"hello"</Fragment>
            }]}></Container>
      </main>

      <Footer></Footer>
    </div>
  )
}

export default Home
