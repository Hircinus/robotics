import Link from "next/link";
import Container from "./Container";
import { GrYoutube } from 'react-icons/gr';
import { GrInstagram } from 'react-icons/gr';
import { Fragment } from "react";

export default function Footer() {
    return(
        <footer>
          <Container gap={3} isHero={false} cols={[
            {
              centered: true,
              content: <Fragment>
                <h2 className="text-xl">Social</h2>
                <ul>
                  <li><a target="_blank" href="https://www.instagram.com/champlainrobotics/"><GrInstagram className="inline" /> Instagram</a></li>
                  <li><a target="_blank" href="https://www.youtube.com/channel/UCqnd90MuElgZ-gmstRkA8DQ"><GrYoutube className="inline" /> YouTube</a></li>
                </ul>
                </Fragment>
            },
            {
              centered: true,
              content: <Fragment>
                <h2 className="text-xl">Pages</h2>
                <ul>
                  <li><Link href="https://www.youtube.com"><a><GrYoutube className="inline" /> YouTube</a></Link></li>
                </ul>
                </Fragment>
            },
            {
              centered: true,
              content: <Fragment>
                <h2 className="text-xl">See also</h2>
                <ul>
                  <li><a target="_blank" href="https://www.champlainsaintlambert.ca/">Champlain Regional College<br />St-Lambert</a></li>
                </ul>
                </Fragment>
            }
          ]}></Container>
        </footer>
    );
}