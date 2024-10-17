<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="guest.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
      integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css"
    />

    <title>Maranan Resort</title>
    <link rel="website icon" type="png" href="Images/marananLogo.jpg" />
  </head>
<style>
  /* max-width: auto;
  background-image: linear-gradient(rgba(0, 0, 0, 0.644), rgba(0, 0, 0, 0.668)),
    url(/Images/background1.jpg);
  background-size: cover;
  background-position: center; */
/* background: url(/Images/bannerground.jpg); */
/* filter: blur(8px);
  -webkit-filter: blur(8px); */

/* POPPINS */
@import url("https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bungee+Spice&family=Caveat:wght@700&family=Luxurious+Roman&family=Montserrat:ital,wght@0,500;1,500&family=Open+Sans:wght@700&family=Pacifico&family=Passion+One&family=Staatliches&family=VT323&display=swap");

/* MONTSERRAT */
@import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");

@import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

html {
  scroll-behavior: smooth;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background: #89CFF0;
}

/* h1,
h2 {
  font-family: "Montserrat";
  font-weight: 400;
} */

a {
  text-decoration: none;
  color: #fff;
}

/* li {
  list-style: none;
} */

/* header */

header {
  z-index: 1;
  position: fixed;
  text-align: center;
  width: 100%;
  font-family: "Montserrat";
  /* line-height: 11svh; */
  align-content: center;
  transition: top 0.5s;
}

header ul {
  display: inline-block;
}

header ul li {
  padding: 0 10px;
  display: inline-block;
  text-transform: uppercase;
}

header ul li a {
  margin: auto;
  text-align: center;
  align-items: center;
  color: #fafafa;
  /* color: #ded0b6; */
  margin: 0 10px;
  transition: 0.5s;
  position: relative;
  font-weight: 600;
}

header ul li a::after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  top: 25px;
  /* background-color: #0087ca; */
  background-color: #002D62;
  transform-origin: bottom right;
  transition: transform 0.4s ease-out;
}

header ul li a:hover::after {
  transform: scaleX(1);
  transform-origin: bottom left;
}

header button {
  border: none;
  padding: 13px 40px;
}

header .navlinks span {
  display: none;
}

#navbar {
  height: 50px;
  padding: 15px;
  position: fixed;
  top: 0;
  background-color: #1034A6;
  width: 100%;
  z-index: 1000;
  transition: top 0.5s;
}

/* IPAD SIZE */

@media screen and (max-width: 1033px) {
  header ul {
    position: absolute;
    top: 48px;
    left: 0;
    width: 100%;
    height: 100svh;
    background: #000;
    overflow: hidden;
    text-align: center;
    z-index: 9;
  }

  header ul li {
    padding-top: 50px;
    display: block;
  }

  header ul li a {
    color: white;
  }
  header .navlinks span {
    color: white;
    display: block;
    cursor: pointer;
    line-height: 3svh;
    font-size: 45px;
  }

  header img {
    padding-top: 15px;
  }

  header .navlinks #menulist li a button {
    font-weight: 800;
  }
}

/* PHONE SIZE */

@media screen and (max-width: 493px) {
  header ul {
    margin-top: 5px;
    top: 60px;
    height: 100svh;
  }

  /* header img {
    width: 50px;
    min-height: 5svh;
    line-height: 5svh;
  } */

  header .navlinks span {
    color: white;
    display: block;
    cursor: pointer;
    line-height: 3svh;
    font-size: 45px;
  }

  header .home .text h1 {
    /* margin-top: 40px; */
    font-size: 45px;
  }

  header .home p {
    font-size: 20px;
    width: 350px;
  }
}

/*START HOME SECTIOn */

/* .home {
  height: 100svh;
} */

/* .home img {
  width: 100%;
  max-width: 100%;
  border-bottom-left-radius: 30px;
  float: right;
  height: 100svh;
} */

.home {
  background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)),
    url(/Images/Gallery5.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 100svh;
  animation: change 15s infinite ease-in-out;
}

.home .text h1 {
  /* color: #ded0b6; */
  color: #fafafa;
  text-align: center;
  padding-top: 20px;
  max-width: 100%;
  font-size: 65px;
  text-transform: uppercase;
  font-weight: 600;
}

.home p {
  /* color: #ded0b6; */
  text-align: center;
  max-width: 100%;
  margin: 50px 0;
  font-size: 30px;
  font-weight: 500;
  color: #fafafa;
  text-transform: uppercase;
}

.home .logo {
  padding-top: 150px;
  text-align: center;
}

@keyframes change {
  0% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/Gallery1.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  20% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/Gallery2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  40% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/Gallery3.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  60% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/Gallery4.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  80% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/Gallery5.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  100% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/Gallery6.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
}

@media screen and (max-width: 1033px) {
  .home .text h1 {
    font-size: 55px;
  }
}

@media screen and (max-width: 860px) {
  .home .text h1 {
    font-size: 45px;
  }

  .home p {
    font-size: 25px;
  }
}

@media screen and (max-width: 712px) {
  .home .text h1 {
    font-size: 35px;
  }

  .home p {
    font-size: 15px;
  }
}

/*END HOME SECTIOn */

/* PHONE SIZE */

/* @media (max-width: 779px) {
  .home {
    border-radius: 0;
    max-width: 100%;
    min-height: 100svh;
  }

  .home h1 {
    font-size: 42px;
    padding-top: 19rem;
  }
} */

/* PHONE SIZE */

/* @media (max-width: 373px) {
  .headline h1 {
    font-size: 20px;
  }
} */
/* END OF BANNER SECTION */

.about {
  padding-top: 60px;
  min-height: 100svh;
}

.about-wrapper {
  /* padding: 50px; */
  border-top-left-radius: 20px;
  border-top-right-radius: 20%;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  /* box-shadow: inset 22px 22px 24px #595349, inset 22px 22px 24px #595349; */
  width: 90%;
  max-width: auto;
  display: flex;
  margin-left: auto;
  margin-right: auto;
}

/* .about-info #lights {
  top: -60px;
  left: 23rem;
  position: relative;
  display: flex;
  gap: 10px;
}

.about-info #red {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: red;
}
.about-info #orange {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: orange;
}
.about-info #green {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: green;
} */

.about-info h1 {
  text-align: center;
  color: #fafafa;
  cursor: default;
  font-weight: 800;
  /* text-align: center; */
  font-size: 48px;
  padding-bottom: 40px;
  text-transform: uppercase;
}

.about-info p {
  padding: 0 40px;
  color: #fafafa;
  cursor: default;
  /* font-family: "Montserrat"; */
  font-weight: 600;
  text-align: center;
  margin: auto;
  width: 80%;
  max-width: auto;
  font-size: 24px;
  /* letter-spacing: 1.5px; */
}

@media screen and (max-width: 1155px) {
  .about-info h1 {
    text-align: center;
    font-size: 38px;
  }
  .about-img img {
    display: none;
  }
}

@media screen and (max-width: 700px) {
  .about-info p {
    font-size: 18px;
    width: 100%;
  }
}

@media screen and (max-width: 467px) {
  .about {
    padding-top: 0;
  }

  .about-info h1 {
    font-size: 38px;
    text-align: center;
  }

  .about-wrapper {
    width: 100%;
    padding: 50px 0;
  }

  .about-info p {
    font-size: 17px;
    width: 100%;
  }
}

/* Background */

.background {
  max-width: 100%;
}

.background h1 {
  color: #fafafa;
  cursor: default;
  font-weight: 800;
  /* text-align: center; */
  font-size: 48px;
  padding-top: 60px;
  padding-bottom: 40px;
  text-transform: uppercase;
  margin-left: 7.5rem;
}

.about-resort {
  margin: auto;
  width: 90%;
  max-width: 100%;
  display: flex;
  padding-bottom: 80px;
}

.resort-info {
  width: 40%;
  font-size: 26px;
  color: #fafafa;
  font-weight: 600;
  text-align: justify;
  margin-left: 50px;
  align-self: center;
}

.about-resort .resort-img img {
  width: 600px;
  border-radius: 20px;
}

.about-owner {
  margin: auto;
  width: 90%;
  max-width: 100%;
  display: flex;
}

.about-owner .owner-img img {
  margin-left: 100px;
  width: 600px;
  border-radius: 20px;
}

.owner-info {
  width: 45%;
  font-size: 26px;
  font-weight: 600;
  color: #fafafa;
  text-align: justify;
  margin-left: 50px;
  padding-top: 100px;
}

.about-owner .owner-img img {
  width: 400px;
}

@media screen and (max-width: 1155px) {
  .resort-info {
    font-size: 20px;
  }

  .about-resort .resort-img img {
    width: 500px;
  }

  .about-owner {
    width: 100%;
  }
  .about-owner .owner-img img {
    width: 300px;
  }
  .owner-info {
    width: 45%;
    font-size: 20px;
  }
}

@media screen and (max-width: 940px) {
  .background h1 {
    text-align: center;
    margin-left: 0;
  }

  .about-resort {
    text-align: center;
  }

  .about-resort .resort-img img {
    width: 550px;
  }

  .about-resort {
    display: block;
  }

  .resort-info {
    margin-top: 30px;
    width: 85%;
  }

  .about-owner {
    text-align: center;
    display: block;
  }

  .about-owner .owner-img img {
    margin-left: 100px;
    width: 300px;
    border-radius: 20px;
  }
}

@media screen and (max-width: 620px) {
  .about-resort .resort-img img {
    width: 450px;
  }

  .resort-info {
    margin-top: 30px;
    width: 80%;
  }
}

@media screen and (max-width: 500px) {
  .about-resort .resort-img img {
    width: 330px;
  }

  .resort-info {
    text-align: center;
    margin-left: 0;
    font-size: 15px;
    margin-top: 30px;
    width: 100%;
  }
}
/* @keyframes image {
  0% {
    transform: rotate(0);
  }

  30% {
    transform: rotate(8deg);
  }

  50% {
    transform: rotate(-8deg);
  }

  75% {
    transform: rotate(24deg);
  }

  100% {
    transform: rotate(-16deg);
  }
} */

/* START OF PACKAGE */
/* START OF PACKAGE */
/* START OF PACKAGE */
/* START OF PACKAGE */
/* START OF PACKAGE */
/* START OF PACKAGE */

/* GALLERY SECTION */
/* GALLERY SECTION */
/* GALLERY SECTION */
/* GALLERY SECTION */
/* GALLERY SECTION */
/* GALLERY SECTION */
/* GALLERY SECTION */

.gallery {
  /* padding: 40px 0; */
  padding-top: 60px;
  max-width: 100%;
  min-height: 100svh;
}

.gallery h1 {
  color: #fafafa;
  cursor: default;
  font-weight: 800;
  /* text-align: center; */
  font-size: 48px;
  padding-bottom: 40px;
  text-transform: uppercase;
  margin-left: 7.5rem;
}

.gallery #lights {
  top: -50px;
  margin-left: 23rem;
  position: relative;
  display: flex;
  gap: 10px;
}

.gallery #red {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: red;
}
.gallery #orange {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: orange;
}
.gallery #green {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: green;
}

.gallery-wrap {
  width: 90%;
  margin: auto;
  display: flex;
  justify-content: space-evenly;
}

.gallery-wrapper img {
  border-radius: 20px;
  width: 400px;
}

#fullscreen {
  display: none; /* Hidden by default */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9); /* Black background with opacity */
  z-index: 1000; /* Ensure it is on top of other elements */
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

#fullscreen img {
  max-width: 90%;
  max-height: 90%;
  margin: auto;
}

/* @media screen and (max-width: 784px) {
  .gallery .owl-nav .owl-prev {
    top: -28%;
  }

  .gallery .owl-nav .owl-next {
    top: -28%;
  }
} */

/* START OF CONTACT */
/* START OF CONTACT */
/* START OF CONTACT */
/* START OF CONTACT */
/* START OF CONTACT */
/* START OF CONTACT */
/* START OF CONTACT */

.contact-section {
  background-color: #1877F2;
  text-align: center;
  width: 100%;
  max-width: auto;
  padding-top: 50px;
  padding-bottom: 50px;
  /* background-color: #2c3e50; */
  justify-content: center;
  align-items: center;
}

.contact-form {
  max-width: 700px;
  margin: auto;
}

.contact-section h1 {
  /* color: #d1bb9e; */
  padding-bottom: 50px;
  color: #fdfffc;
  font-weight: 800;
  font-size: 48px;
  text-transform: uppercase;
}

.contact-form .text-box {
  background-color: #fdfffc;
  color: #15212a;
  width: calc(50% - 10px);
  height: 50px;
  padding: 12px;
  font-size: 15px;
  border-radius: 5px;
  margin-bottom: 20px;
}

.contact-form .text-box:first-of-type {
  margin-right: 15px;
}

.contact-form textarea {
  background: #fdfffc;
  color: #15212a;
  width: 100%;
  padding: 12px;
  font-size: 15px;
  min-height: 200px;
  max-height: 400px;
  resize: vertical;
  border-radius: 5px;
  margin-bottom: 20px;
}

.contact-form .send-btn {
  margin-left: 27rem;
  background: #fdfffc;
  color: #15212a;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2px;
  transition: all 0.5s ease-in-out;
}
.contact-form .send-btn:hover {
  color: #fdfffc;
  background-color: #0782e0;
}

@media screen and (max-width: 950px) {
  .contact-section {
    flex-direction: column;
  }
  .contact-info,
  .contact-form {
    margin: 30px 50px;
  }
  .contact-info h1 {
    /* text-align: center; */
    font-size: 30px;
  }
  .contact-info {
    padding-left: 30px;
  }

  .contact-form .text-box {
    width: 100%;
  }
}

.content-flex {
  display: flex;
}

.contacts {
  padding-top: 50px;
}

.contacts span {
  color: #fafafa;
  font-size: 22px;
}

.fa-phone,
.fa-facebook,
.fa-location-dot,
.fa-at {
  color: #fafafa;
  padding: 5px;
  margin-right: 5px;
  font-size: 25px;
}

.copyright span {
  color: #fafafa;
  font-size: 22px;
}

.admin {
  margin-top: 20px;
  background-color: #000;
  border: none;
  color: #fafafa;
  cursor: pointer;
  font-size: 18px;
}

.admin:hover {
  border-bottom: 2px solid #fafafa;
}

/* AI IMPLEMENTATION */
/* AI IMPLEMENTATION */
/* AI IMPLEMENTATION */
/* AI IMPLEMENTATION */
/* AI IMPLEMENTATION */
/* AI IMPLEMENTATION */
/* AI IMPLEMENTATION */

.ai-bot {
  width: 100%;
  height: 100svh;
}

.chathead {
  border: none;
  position: fixed;
  width: 60px;
  height: 60px;
  /* background-color: #d5b272; */
  background-color: transparent;
  cursor: pointer;
  /* color: #0b1116; */
  /* color: #ded0b6; */
  color: #228b22;
  font-size: 16px;
  border-radius: 50%;
  z-index: 1000;
  top: 88%;
  left: 94%;
}

.chathead span {
  font-size: 30px;
  font-weight: 800;
}

body .card {
  /* position: fixed; */
  height: 80%;
  display: none;
  position: fixed;
  z-index: 1000;
  width: 25rem;
  background-color: #000;
  top: 20%;
  left: 63%;
}
body .card #header {
  height: 5vw;
  background: #000;
  padding: 0vw;
}
body .card #header h1 {
  color: #fafafa;
  font-size: 2vw;
  font-family: Georgia, "Times New Roman", Times, serif;
  padding: 1vw;
  margin-left: 20px;
}
body .card #message-section::-webkit-scrollbar {
  width: 10px;
}
body .card #message-section {
  height: 25vw;
  padding: 0 2.5vw;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: var(--thumbBG) var(--scrollbarBG);
}
body .card #message-section::-webkit-scrollbar-track {
  background: var(--scrollbarBG);
}
body .card #message-section::-webkit-scrollbar-thumb {
  background-color: var(--thumbBG);
  border-radius: 6px;
  border: 3px solid var(--scrollbarBG);
}
body .card #message-section #bot,
body .card #message-section #user {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  position: relative;
  bottom: 0;
  min-height: 1.5vw;
  background-color: #fafafa;
  border-radius: 0px 1.5vw 1.5vw 1.8vw;
  padding: 1vw;
  margin: 1.5vw 0;
}
body .card #message-section #user {
  border: 1.5px solid #000;
  border-radius: 1.5vw 0vw 1.5vw 1.8vw;
  background-color: #fafafa;
  float: right;
}
body .card #message-section #user #user-response {
  color: #000;
}
body .card #message-section .message {
  color: #000;
  clear: both;
  line-height: 1.2vw;
  font-size: 1.2vw;
  padding: 8px;
  position: relative;
  margin: 8px 0;
  max-width: 85%;
  word-wrap: break-word;
  z-index: 2;
}
body .card #input-section {
  z-index: 1;
  padding: 0 2.5vw;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  overflow: hidden;
  height: 6vw;
  width: 100%;
}
body .card #input-section input {
  color: #fafafa;
  min-width: 0.5vw;
  outline: none;
  height: 3vw;
  width: 15vw;
  border-top: none;
  border-left: none;
  border-right: none;
  background-color: #000;
}
body .card .send {
  background: transparent;
  border: 0;
  cursor: pointer;
  flex: 0 0 auto;
  padding: 0;
  position: relative;
  outline: none;
}
body .card .send .circle {
  padding: 0;
  /* position: relative; */
  display: flex;
  align-items: center;
  justify-content: center;
}
body .card .send .circle i {
  font-size: 3vw;
  margin-left: 4vw;
  margin-top: 1vw;
  color: #fafafa;
}

@media screen and (max-width: 493px) {
  body .card {
    height: 50%;
    left: 16%;
    width: 15rem;
    top: 35%;
  }

  .chathead {
    left: 40%;
  }

  body .card #header h1 {
    font-size: 16px;
  }

  body .card #header {
    height: 20vw;
  }
}

/* ADMIN */
/* ADMIN */
/* ADMIN */
/* ADMIN */
/* ADMIN */
/* ADMIN */

.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1000;
}

.login-popup {
  border-radius: 20px;
  width: 500px;
  height: 480px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #0b1116;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.login-popup h2 {
  padding-top: 20px;
  font-weight: 600;
  font-size: 40px;
  text-align: center;
  color: white;
}

.login-popup label {
  font-weight: 600;
  color: white;
  display: block;
  padding: 30px 0;
}

.login-popup input {
  color: #ded0b6;
  text-indent: 20px;
  background: #000;
  border: none;
  border-radius: 20px;
  width: 100%;
  height: 60px;
}

.login-popup form {
  padding: 30px;
}
.close {
  font-size: 40px;
  color: white;
  position: absolute;
  top: 0;
  right: 20px;
  cursor: pointer;
}

.login-popup .btn-submit {
  padding: 10px;
  border-radius: 20px;
  border: none;
  margin-top: 30px;
  color: #0b1116;
  font-weight: 600;
  font-size: 16px;
  text-align: center;
  width: 140px;
  background: #ded0b6;
  float: right;
}

.login-popup .btn-submit:hover {
  background: #d5b272;
}

.close:hover {
  color: #ded0b6;
}

</style>
  <body>
    <script
      src="https://kit.fontawesome.com/28f0c83812.js"
      crossorigin="anonymous"
    ></script>
    <header>
      <div id="navbar">
        <div class="navlinks">
          <ul id="menulist">
            <li><a href="#home">Home</a></li>
            <li><a href="#story">Story</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="package.php">Packages</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
              <a href="reservationform.php" id="btn_booking" target="_blank"
                >BOOK NOW</a
              >
            </li>
          </ul>
          <span
            id="menu-toggle-icon"
            class="fa fa-bars"
            onclick="menutoggle()"
          ></span>
        </div>
      </div>
    </header>
    <section class="home" id="home">
      <div class="content">
        <div class="logo">
          <img src="Images/marananLogo.jpg" width="150" alt="" />
        </div>
        <div class="text">
          <h1>Maranan Resort</h1>
          <p>"Escape the hustle and bustle of city life at Maranan Resort" </p>
            <p>"where peace and tranquility reign."</p>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION -->
    <!-- ABOUT SECTION -->
    <!-- ABOUT SECTION -->
    <!-- ABOUT SECTION -->

    <div class="about" id="story">
      <div class="about-wrapper">
        <div class="about-info">
          <h1>Our <span style="color: #228b22">Story</span></h1>
          <div id="lights">
            <div id="red"></div>
            <div id="orange"></div>
            <div id="green"></div>
          </div>
          <div class="paragraph">
            <p>
              Here at
              <span style="color: #228b22">Maranan Resort</span>, our
              journey started with a simple idea: to create a private getaway
              like no other. With a team dedicated to excellence and an
              unwavering commitment to our guests, we've earned recognition that
              fuels our passion for providing exceptional experiences.
            </p>
            <br />
            <p>
              Step into our world and discover the beauty that surrounds us.
              From lush landscapes to cozy accommodations, every corner is
              designed with your comfort in mind. Your presence is what makes
              our story come alive.
            </p>
            <br />
            <p>
              As you dive into your stay with us, remember that our story is
              intertwined with yours. Your experiences shape our future, and
              we're here to make sure each moment feels perfect for you.
            </p>
          </div>
        </div>
        <div class="about-img">
          <img src="Images/Coconut_tree1.png" alt="" />
        </div>
      </div>
    </div>

    <!-- START OF BACKGROUND -->
    <!-- START OF BACKGROUND -->
    <!-- START OF BACKGROUND -->
    <!-- START OF BACKGROUND -->

    <section class="background" id="about">
      <h1>About<span style="color: #228b22"> Us</span></h1>
      <div class="about-resort">
        <div class="resort-img">
          <img src="Images/bannerground.jpg" alt="" />
        </div>
        <div class="resort-info">
          <span
            >The <span style="color: #228b22">Maranan Resort</span> is
            owned by Jenelyn Maranan and opened for business on January 6,
            2023. Located in Balete, Batangas City, Brgy. Sitio 2 Sahingan, and
            we offers a variety of activities. We started it as a simple
            get-together place, but we managed to make it this big to make our
            dearest customers satisfy their needs.
          </span>
        </div>
      </div>
      <div class="about-owner">
        <div class="owner-img"><img src="Images/owner.jpg" alt="" /></div>
        <div class="owner-info">
          <span
            >This is <span style="color: #32fb32">Jenelyn Maranan Cortes</span>.
            The owner of the
            <span style="color: #32fb32">Maranan Resort</span>. Ma'am
            Jenelyn is 30yrs old.
          </span>
        </div>
      </div>
    </section>

    <!-- END OF BACKGORUND -->
    <!-- END OF BACKGORUND -->
    <!-- END OF BACKGORUND -->
    <!-- END OF BACKGORUND -->
    <!-- END OF BACKGORUND -->

    <!-- GALLERY -->
    <!-- GALLERY -->
    <!-- GALLERY -->
    <!-- GALLERY -->
    <!-- GALLERY -->
    <!-- GALLERY -->
    <!-- GALLERY -->

    <section class="gallery" id="gallery">
      <h1>Gallery / <span style="color: #228b22">Images</span></h1>
      <div class="gallery-wrap">
        <div class="gallery-wrapper">
          <img src="Images/Gallery1.jpg" />
          <img src="Images/Gallery2.jpg" />
          <img src="Images/Gallery3.jpg" />
          <img src="Images/Gallery4.jpg" />
          <img src="Images/Gallery17.jpg" />
          <img src="Images/Gallery.jpg" />
        </div>
        <div class="gallery-wrapper">
          <img src="Images/Gallery7.jpg" />
          <img src="Images/Gallery8.jpg" />
          <img src="Images/Gallery9.jpg" />
          <img src="Images/Gallery10.jpg" />
          <img src="Images/Gallery13.jpg" />
          <img src="Images/Gallery14.jpg" />
        </div>
        <div class="gallery-wrapper">
          <img src="Images/Gallery14.jpg" />
          <img src="Images/Gallery15.jpg" />
          <img src="Images/Gallery11.jpg" />
          <img src="Images/Gallery16.jpg" />
          <img src="Images/Gallery5.jpg" />
          <img src="Images/Gallery6.jpg" />
        </div>
      </div>
    </section>
    <!-- Fullscreen overlay -->
    <div id="fullscreen" onclick="closeFullscreen()">
      <img id="fullscreenImage" src="" />
    </div>
    <!-- CONTACT SECTIOn -->
    <!-- CONTACT SECTIOn -->
    <!-- CONTACT SECTIOn -->
    <!-- CONTACT SECTIOn -->
    <!-- CONTACT SECTIOn -->
    <!-- CONTACT SECTIOn -->
    <div class="contact-section" id="contact">
      <h1>Contact <span style="color: #228b22">Us</span></h1>
      <div class="content-flex">
        <div class="footer-container">
          <div class="contacts">
            <div class="more-contacts">
              <i class="fas fa-phone"></i>
              <span style="color: #32fb32">0961-275-0489</span>
            </div>
            <div class="more-contacts">
              <i class="fab fa-facebook"></i>
              <span>
                <a rel="noopener"
                  href="https://www.facebook.com/MarananResortOfficial/"
                  target="_blank"
                  style="color: #32fb32"
                  >Maranan Resort</a
                ></span
              >
            </div>
            <div class="more-contacts">
              <i class="fa-solid fa-location-dot"></i>
              <span style="color: #32fb32"
                >Sitio. Gintuan Durungao, Bauan, Batangas</span
              >
            </div>
            <div class="more-contacts">
              <i class="fa-solid fa-at"></i>
              <span style="color: #32fb32">Marananresort119@gmail.com</span>
            </div>
          </div>
          <div class="admin-link">
            <div class="copyright">
              <span style="color: #32fb32">&copy; Copyright 2024</span>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <form
            action="/send-email"
            method="post"
            class="contact"
            id="contactForm"
          >
            <input
              type="text"
              name="name"
              class="text-box"
              placeholder="Your name"
              required
              autocomplete="off"
            />
            <input
              type="email"
              name="email"
              autocomplete="off"
              class="text-box"
              placeholder="Email Address"
              required
            />
            <textarea
              name="message"
              rows="5"
              placeholder="Your Message"
            ></textarea>
            <input
              type="submit"
              class="send-btn"
              name="submit"
              value="Submit"
            />
          </form>
        </div>
      </div>
    </div>

    <!-- LOG IN FORM -->
    <!-- LOG IN FORM -->
    <!-- LOG IN FORM -->
    <!-- LOG IN FORM -->
    <!-- LOG IN FORM -->
    <!-- LOG IN FORM -->

    <!-- AI IMPLEMENTATION -->
    <!-- AI IMPLEMENTATION -->
    <!-- AI IMPLEMENTATION -->
    <!-- AI IMPLEMENTATION -->
    <!-- AI IMPLEMENTATION -->
    <!-- AI IMPLEMENTATION -->
    <!-- AI IMPLEMENTATION -->

    <!-- <section class="ai-bot"> -->
    <button name="button" role="button" class="chathead" onclick="openChatHead()">
      <span class="fa-solid fa-comment"></span>
    </button>
    <div class="card" id="chathead">
      <span class="close" onclick="closeChatHead()">&times;</span>
      <div id="header">
        <h1>MARABOT</h1>
      </div>
      <div id="message-section">
        <div class="message" id="bot">
          <span id="bot-response"
            >Hi, Goodmorning / Goodevening. Welcome to MARANAN
            RESORT. Kindly use the English language to avoid confusion. Thank
            you and have a great day!</span
          >
        </div>
      </div>
      <div id="input-section">
        <input
          id="input"
          type="text"
          placeholder="Type a message"
          autocomplete="off"
          autofocus="autofocus"
        />
        <button class="send" onclick="sendMessage()">
          <div class="circle"><i class="zmdi zmdi-mail-send"></i></div>
        </button>
      </div>
    </div>
    <!-- </section> -->

    <script src="JAVASCRIPT/guest.js"></script>
    <script src="JAVASCRIPT/chatbot.js"></script>
    <script src="contact-form/server.js"></script>
  </body>
</html>
