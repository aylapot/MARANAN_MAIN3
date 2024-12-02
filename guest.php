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
  background: linear-gradient(to bottom, #002b1f, #1c1c1c);
}

a {
  text-decoration: none;
  color: #fff;
}
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
  background-color: #228b22;;
  transform-origin: bottom right;
  transition: transform 0.4s ease-out;x`
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
  transform: translateY(-10px);
  top: 0;
  background-color: #005f4b;
  width: 100%;
  z-index: 1000;
  transition: top 0.5s;
}

/* IPAD SIZE */

@media only screen and (max-width: 1033px) {
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

@media only screen and (max-width: 493px) {
  header ul {
    margin-top: 5px;
    top: 60px;
    height: 100svh;
  }

  header .navlinks span {
    color: white;
    display: block;
    cursor: pointer;
    line-height: 3svh;
    font-size: 45px;
  }

  header .home .text h1 {
    font-size: 45px;
  }

  header .home p {
    font-size: 20px;
    width: 350px;
  }
}

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
  color: #fafafa;
  text-align: center;
  padding-top: 20px;
  max-width: 100%;
  font-size: 65px;
  text-transform: uppercase;
  font-weight: 600;
}

.home p {
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
      url(/Images/gal2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  20% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/gal3.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  40% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/gal4.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  60% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/IMG_4112.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  80% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/IMG_4071.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  100% {
    background: linear-gradient(rgba(0, 0, 0, 0.44), rgba(0, 0, 0, 0.44)),
      url(/Images/IMG_4105.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
}

/* Applying the animation */
.background {
  animation: change 30s infinite ease-in-out; /* Duration and smooth easing */
  transition: background 2s ease-in-out; /* Smooth transitions for intermediate changes */
}


@media only screen and (max-width: 1033px) {
  .home .text h1 {
    font-size: 55px;
  }
}

@media only screen and (max-width: 860px) {
  .home .text h1 {
    font-size: 45px;
  }

  .home p {
    font-size: 25px;
  }
}

@media  only screen and (max-width: 712px) {
  .home .text h1 {
    font-size: 35px;
  }

  .home p {
    font-size: 15px;
  }
}



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
  font-weight: 600;
  text-align: center;
  margin: auto;
  width: 80%;
  max-width: auto;
  font-size: 24px;

}

@media only screen and (max-width: 1155px) {
  .about-info h1 {
    text-align: center;
    font-size: 38px;
  }
  .about-img img {
    display: none;
  }
}

@media  only screen and (max-width: 700px) {
  .about-info p {
    font-size: 18px;
    width: 100%;
  }
}

@media  only screen and (max-width: 467px) {
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
  background-color: #02343f;
  border-radius: 12px;
  border: 30px solid #02343f;
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

@media only screen and (max-width: 1155px) {
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

@media  only screen and (max-width: 940px) {
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

@media only screen and (max-width: 620px) {
  .about-resort .resort-img img {
    width: 450px;
  }

  .resort-info {
    margin-top: 30px;
    width: 80%;
  }
}

@media only screen and (max-width: 500px) {
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
/* Keep all the existing styles you provided, followed by these media queries for various devices */

/* Small Laptops */
@media only screen and (max-width: 1024px) {
  .gallery #lights {
    margin-left: 10rem;
  }

  .gallery h1 {
    font-size: 40px;
    margin-left: 5rem;
  }

  .background h1 {
    font-size: 38px;
  }
}

/* Tablets */
@media only screen and (max-width: 768px) {
  header {
    padding: 10px;
  }

  .about-wrapper,
  .about-resort,
  .about-owner {
    flex-direction: column;
    text-align: center;
  }

  .about-info h1 {
    font-size: 35px;
  }

  .gallery #lights {
    margin-left: 5rem;
  }

  .gallery h1 {
    font-size: 30px;
    margin-left: 3rem;
  }

  .contact-form .send-btn {
    margin-left: 0;
    width: 100%;
  }

  .background h1 {
    font-size: 30px;
    text-align: center;
  }
}

/* Mobile Devices */
@media only screen and (max-width: 576px) {
  header ul li {
    padding: 10px;
  }

  .home .text h1 {
    font-size: 25px;
  }

  .home p {
    font-size: 14px;
  }

  .about-info h1 {
    font-size: 28px;
  }

  .about-info p {
    font-size: 16px;
  }

  .gallery-wrapper img {
    width: 100%;
    max-width: 300px;
  }

  .gallery h1 {
    font-size: 24px;
    margin-left: 0;
    text-align: center;
  }

  .contact-section h1 {
    font-size: 30px;
  }

  .contact-form .text-box {
    font-size: 14px;
    padding: 10px;
  }

  .contact-form textarea {
    font-size: 14px;
  }

  .background h1 {
    font-size: 20px;
  }
}

/* Small Mobile Devices */
@media only screen and (max-width: 360px) {
  header ul li a {
    font-size: 14px;
  }

  .home .text h1 {
    font-size: 20px;
  }

  .home p {
    font-size: 12px;
  }

  .about-info h1 {
    font-size: 24px;
  }

  .about-info p {
    font-size: 14px;
  }

  .gallery-wrapper img {
    max-width: 250px;
  }

  .gallery h1 {
    font-size: 20px;
  }

  .contact-form .text-box {
    font-size: 12px;
  }

  .contact-form textarea {
    font-size: 12px;
  }

  .background h1 {
    font-size: 18px;
  }
}


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
  background: linear-gradient(135deg, #02343f, #002b1f);
  color: #f8f8f8;
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

@media only screen and (max-width: 950px) {
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

@media only screen and (max-width: 493px) {
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
Define the fadeInDown animation
@keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translateY(-30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Apply the animation to the specific h1 with id 'title' */
#title {
  animation: fadeInDown 1s ease-in-out;
}

/* Section Styling */
.story-section {
  background: linear-gradient(135deg, #1c1c1c, #002b1f); /* Dark Charcoal to Deep Green */
  color: #f8f8f8;
  padding: 50px 20px;
  font-family: 'Poppins', sans-serif;
  text-align: left;
  width: 100%; /* Ensure full width */
  box-sizing: border-box; /* Prevent overflow */
}

/* Container */
.container {
  max-width: 95%; /* Utilize more screen width */
  margin: 0 auto; /* Center the container */
  padding: 0 20px; /* Add padding for readability */
  display: flex; /* Ensure layout alignment */
  flex-wrap: wrap; /* Allow wrapping on smaller screens */
  justify-content: space-between; /* Distribute space evenly */
}

/* Flexbox Layout for Story Content and Image */
.story-wrapper {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 30px; /* Space between content and image */
}

.story-content {
  flex: 2; /* Occupy more space for text */
  margin-right: 20px;
}

.about-img {
  flex: 1; /* Image takes less space */
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Heading Styling */
.story-content h1 {
  font-size: 40px;
  font-family: 'Playfair Display', serif;
  color: #f8f8f8;
  margin-bottom: 10px;
}

.story-content h1 span {
  color: #228b22; /* Light Aqua */
}

/* Professional Divider */
.heading-divider {
  width: 800px;
  height: 4px;
  background-color: #228b22; /* Light Aqua */
  margin: 10px 0 20px;
  border-radius: 2px; /* Smooth Edges */
}

/* Paragraph Styling */
.story-content p {
  font-size: 18px;
  line-height: 1.8;
  margin-bottom: 20px;
}

.story-content .highlight {
  color: #228b22;
  font-weight: bold;
}

/* Tree Image Styling */
.about-img img {
  max-width: 100%;
  height: auto;
  object-fit: cover; /* Ensure the image scales properly */
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
}

/* Responsive Design */
@media only screen and (max-width: 768px) {
  .story-wrapper {
    flex-direction: column; /* Stack content and image */
  }

  .story-content {
    max-width: 100%;
    text-align: center;
    margin: 0;
  }

  .about-img img {
    max-width: 80%; /* Reduce image size on smaller screens */
  }
}

#about {
  background: linear-gradient(135deg, #1c1c1c, #002b1f); /* Dark Charcoal to Deep Green */
  color: #f8f8f8;
  padding: 50px 20px;
  font-family: 'Poppins', sans-serif;
  text-align: left;
  width: 100%;
  box-sizing: border-box;
}

#about h1 {
  font-size: 40px;
  font-family: 'Playfair Display', serif;
  color: #f8f8f8;
  margin-bottom: 10px; /* Reduced space to bring closer to the divider */
  text-align: right;
  margin-right: 350px;
  position: relative; /* For positioning the divider */
}

#about h1 span {
  color: #228b22; /* Forest Green */
}

#about h1::after {
  content: "";
  display: block;
  width: 1300px; /* Line width */
  height: 3px; /* Line thickness */
  background-color: #228b22; /* Green color as "US" text */
  margin: 10px 0 0; /* Space above and below the line */
  position: absolute;
  left: 0px;
  transform: translateY(100%); /* Moves it just below the title */
}

/* About Resort Section */
.about-resort {
  display: flex;
  align-items: center;
  /* justify-content: space-evenly; */
  align-content: space-evenly;
  flex-wrap: wrap;
  /* gap: 20px; */
  margin-bottom: 40px;
}

.resort-img img {
  width: 100%;
  height: 500px;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
  border: 2px solid #228b22; /* Box styling updated */
}

.resort-info {
  flex: 2; /* Occupy more space for text */
  font-size: 18px;
  line-height: 1.8;
  color: #f8f8f8;
  margin-bottom: 200px;
}

.resort-info span span {
  color: #228b22; /* Updated Highlighted text */
  font-weight: bold;
}

/* About Owner Section */
.about-owner {
  display: flex;
  align-items: center;
  justify-content: flex-start; /* Align items to the left */
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 40px; /* Add some spacing above */
}

.owner-img img {
  max-width: 300px; /* Adjust size to fit proportionally */
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
  border: 2px solid #228b22; /* Keep the green border */
  margin-right: 30px; /* Space between the image and text */
}

.owner-info {
  flex: 2; /* Make text take more space */
  font-size: 18px;
  line-height: 1.8;
  margin-bottom: auto;
  color: #f8f8f8;
  max-width: 600px; /* Limit the text width to make it easier to read */
}

.owner-info span span {
  color: #228b22; /* Updated Highlighted text */
  font-weight: bold;
}

/* Responsive Design */
@media only screen and (max-width: 768px) {
  .about-resort, .about-owner {
    flex-direction: column; /* Stack content */
    text-align: center; /* Center align for mobile */
  }

  .resort-info, .owner-info {
    margin: 0 auto;
  }

  .resort-img img, .owner-img img {
    max-width: 80%; /* Reduce image size on smaller screens */
    margin: 0 auto;
  }

  #about h1 {
    margin-left: 0; /* Center-align title for small screens */
    text-align: center;
  }

  #about h1::after {
    left: 50%; /* Center-align the divider */
    transform: translateX(-50%) translateY(100%); /* Adjust positioning */
  }
}

/* Gallery Section */
#gallery {
  background: #1c1c1c; /* Dark background */
  color: #f8f8f8;
  padding: 50px 20px;
  font-family: 'Poppins', sans-serif;
  text-align: center;
}

#gallery h1 {
  font-size: 40px;
  font-family: 'Playfair Display', serif;
  color: #f8f8f8;
  margin-bottom: 30px;
  text-align: center;
}

#gallery h1 span {
  color: #228b22; /* Highlight the word "Images" */
}

/* Gallery Wrap */
.gallery-wrap {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  margin-top: 30px;
}

.gallery-wrapper {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

/* Gallery Images */
.gallery-wrapper img {
  width: 100%;
  height: auto;
  max-width: 350px; /* Limit the size for consistent layout */
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
}

.gallery-wrapper img:hover {
  transform: scale(1.25);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.6);
}

/* Responsive Design */
@media only screen and (max-width: 768px) {
  .gallery-wrap {
    flex-direction: column; /* Stack images vertically on smaller screens */
    align-items: center;
  }

  .gallery-wrapper {
    margin-bottom: 40px; /* Add spacing between sections */
  }

  .gallery-wrapper img {
    max-width: 90%; /* Reduce image size on mobile */
  }
}
/* RESPONSIVE */
/* Responsive Design Enhancements */

/* For Small Laptops */
@media only screen and(max-width: 1024px) {
  .ai-bot {
    height: 100vh;
  }

  .chathead {
    top: 85%;
    left: 90%;
  }

  body .card {
    height: 70%;
    width: 20rem;
    left: 58%;
    top: 25%;
  }

  body .card #header h1 {
    font-size: 1.5vw;
  }

  body .card #message-section {
    padding: 0 1.5vw;
    height: 20vw;
  }

  body .card .send .circle i {
    font-size: 2vw;
    margin-left: 3vw;
    margin-top: 1vw;
  }

  .login-popup {
    width: 400px;
    height: 400px;
  }

  .login-popup h2 {
    font-size: 30px;
  }

  .login-popup input {
    height: 50px;
  }
}

/* For Tablets */
@media only screen and(max-width: 768px) {
  .chathead {
    top: 85%;
    left: 80%;
  }

  body .card {
    height: 60%;
    width: 18rem;
    left: 50%;
    top: 30%;
  }

  body .card #header h1 {
    font-size: 14px;
  }

  body .card #message-section {
    height: 15vw;
  }

  body .card #message-section .message {
    font-size: 1vw;
    line-height: 1.5vw;
  }

  body .card #input-section input {
    font-size: 0.8vw;
    height: 2.5vw;
    width: 12vw;
  }

  .login-popup {
    width: 320px;
    height: 350px;
  }

  .login-popup h2 {
    font-size: 24px;
  }

  .login-popup input {
    height: 40px;
  }
}

/* For Mobile Devices */
@media only screen and (max-width: 576px) {
  .chathead {
    top: 85%;
    left: 70%;
  }

  body .card {
    height: 50%;
    width: 15rem;
    left: 45%;
    top: 35%;
  }

  body .card #header h1 {
    font-size: 12px;
  }

  body .card #message-section {
    height: 10vw;
  }

  body .card #message-section .message {
    font-size: 10px;
  }

  body .card #input-section input {
    font-size: 10px;
    height: 2vw;
    width: 10vw;
  }

  body .card .send .circle i {
    font-size: 2vw;
    margin-left: 2vw;
  }

  .login-popup {
    width: 280px;
    height: 300px;
  }

  .login-popup h2 {
    font-size: 20px;
  }

  .login-popup input {
    height: 35px;
  }
}

/* For Small Mobile Devices */
@media only screen and (max-width: 360px) {
  .chathead {
    top: 85%;
    left: 60%;
  }

  body .card {
    height: 45%;
    width: 12rem;
    left: 40%;
    top: 40%;
  }

  body .card #header h1 {
    font-size: 10px;
  }

  body .card #message-section {
    height: 8vw;
  }

  body .card #message-section .message {
    font-size: 8px;
  }

  body .card #input-section input {
    font-size: 8px;
    height: 1.5vw;
    width: 8vw;
  }

  body .card .send .circle i {
    font-size: 1.5vw;
    margin-left: 1vw;
  }

  .login-popup {
    width: 240px;
    height: 260px;
  }

  .login-popup h2 {
    font-size: 16px;
  }

  .login-popup input {
    height: 30px;
  }
}

/* Adjustments for Gallery and Story Sections */
@media only screen and (max-width: 768px) {
  .story-wrapper {
    flex-direction: column;
    text-align: center;
  }

  .story-content {
    margin: 0 auto;
    text-align: center;
  }

  .about-img img {
    max-width: 80%;
  }

  #gallery h1 {
    font-size: 30px;
  }

  .gallery-wrapper img {
    max-width: 90%;
    margin: 0 auto;
  }
}

@media only screen and (max-width: 576px) {
  .story-wrapper {
    text-align: center;
  }

  .story-content h1 {
    font-size: 24px;
  }

  .story-content p {
    font-size: 14px;
  }

  #gallery h1 {
    font-size: 24px;
  }

  .gallery-wrapper img {
    max-width: 85%;
  }
}
/* Media Queries */

/* Small Phones (up to 480px) */
@media only screen and (max-width: 480px) {
  .navlinks {
    flex-direction: column;
    align-items: flex-start;
  }

  #menulist {
    display: none; /* Hide menu by default */
    flex-direction: column;
    background: #228b22;
    width: 100%;
    padding: 10px 0;
    position: absolute;
    top: 50px;
    left: 0;
  }

  #menulist li {
    text-align: center;
    margin: 10px 0;
  }

  .fa-bars {
    display: block; /* Show hamburger menu */
  }

  .home .text h1 {
    font-size: 10vw;
  }

  .home .text p {
    font-size: 5vw;
  }
}

/* Medium Devices (481px to 768px) */
@media only screen and (min-width: 481px) and (max-width: 768px) {
  #menulist {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .home .text h1 {
    font-size: 6vw;
  }

  .home .text p {
    font-size: 3.5vw;
  }
}

/* Larger Devices (769px and above) */
@media only screen and (min-width: 769px) {
  #menulist {
    display: flex !important;
  }

  .fa-bars {
    display: none;
  }
} 
/* Media Queries */

/* Small Phones (up to 480px) */
@media only screen and (max-width: 480px) {
  h1 {
    font-size: 8vw;
  }

  p {
    font-size: 4vw;
    line-height: 1.4;
  }

  .story-content,
  .resort-info,
  .owner-info {
    text-align: center;
    padding: 10px;
  }

  .gallery-wrapper img {
    max-width: 80px;
    margin: 5px;
  }

  .text-box, textarea, .send-btn {
    font-size: 3.5vw;
  }

  .chathead {
    width: 40px;
    height: 40px;
  }
}

/* Medium Phones (481px to 767px) */
@media only screen and (min-width: 481px) and (max-width: 767px) {
  h1 {
    font-size: 7vw;
  }

  p {
    font-size: 3.8vw;
    line-height: 1.6;
  }

  .gallery-wrapper img {
    max-width: 100%;
    margin: 10px;
  }

  .text-box, textarea, .send-btn {
    font-size: 4vw;
  }

  .chathead {
    width: 50px;
    height: 50px;
  }
}

/* Tablets (768px to 1024px) */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
  h1 {
    font-size: 6vw;
  }

  p {
    font-size: 3vw;
    line-height: 1.8;
  }

  .gallery-wrapper img {
    max-width: 120px;
  }

  .text-box, textarea, .send-btn {
    font-size: 4.5vw;
  }

  .chathead {
    width: 60px;
    height: 60px;
  }
}

/* Large Devices (1025px and above) */
@media only screen and (min-width: 1025px) {
  h1 {
    font-size: 5vw;
  }

  p {
    font-size: 2.5vw;
    line-height: 2;
  }

  .gallery-wrapper img {
    max-width: 150px;
  }

  .text-box, textarea, .send-btn {
    font-size: 4vw;
  }

  .chathead {
    width: 70px;
    height: 70px;
  }
}

/* General Mobile Adjustments */
@media only screen and (max-width: 480px) {
  /* Contact Us Section */
  .contact-section h1 {
    font-size: 6vw; /* Scale title for smaller screens */
    text-align: center;
  }

  .contact-section .content-flex {
    flex-direction: column;
    gap: 20px;
  }

  .contact-section .contact-form input,
  .contact-section .contact-form textarea {
    width: 95%;
    font-size: 4vw;
    margin: 10px auto;
  }

  .contact-section .contact-form .send-btn {
    width: 95%;
    font-size: 4.5vw;
  }


  /* Gallery Section */
  .gallery h1 {
    font-size: 6.5vw;
    text-align: center;
  }

  .gallery-wrapper img {
    max-width: 90%;
    margin: 10px auto;
    display: block;
  }

  /* Home Section */
  .home h1 {
    font-size: 7vw;
    text-align: center;
  }

  .home p {
    font-size: 4vw;
    line-height: 1.5;
    text-align: center;
  }

  .logo img {
    max-width: 80%;
    margin: 0 auto;
    display: block;
  }
}

/* iPhone X, XS, 11 Pro */
@media only screen and (min-width: 375px) and (max-width: 812px) {
  /* Similar adjustments, scaled slightly up */
  h1 {
    font-size: 6.5vw;
  }

  p {
    font-size: 3.8vw;
  }

  .gallery-wrapper img {
    max-width: 85%;
  }

  .contact-form input,
  .contact-form textarea {
    font-size: 4vw;
  }
}

/* iPhone 12/13/14 Pro */
@media only screen and (min-width: 390px) and (max-width: 844px) {
  h1 {
    font-size: 6vw;
  }

  p {
    font-size: 3.5vw;
  }

  .gallery-wrapper img {
    max-width: 95%;
  }

  .contact-form input,
  .contact-form textarea {
    font-size: 3.8vw;
  }
}

/* iPhone Pro Max and Large Devices */
@media only screen and (min-width: 430px) and (max-width: 926px) {
  h1 {
    font-size: 5.5vw;
  }

  p {
    font-size: 3.2vw;
    line-height: 1.8;
  }

  .gallery-wrapper img {
    max-width: 95%;
  }

  .contact-form input,
  .contact-form textarea {
    font-size: 3.5vw;
  }
}

/* Landscape Orientation */
@media only screen and (orientation: landscape) {
  h1 {
    font-size: 4vw;
  }

  p {
    font-size: 3vw;
    
  }
  .gallery-wrapper img {
    width: 100%;
    max-width: 300px;
  }
  .contact-form input,
  .contact-form textarea {
    font-size: 2.5vw;
  }
}
media (max-width: 1024px) {
  .story-section h1 {
    font-size: auto; /* Slightly smaller header for tablet sizes */
  }

  .story-section p {
    font-size: auto; /* Smaller text size for readability */
    width: auto;
  }

  .story-section .about-img img {
    max-width: auto; /* Ensures image doesn't overflow */
  }
}

@media only screen and (max-width: 768px) {
  .story-section h1 {
    font-size: auto; /* Further reduce header font for smaller screens */
  }

  .story-section p {
    font-size: auto; /* Adjust paragraph size for readability */
    width: auto;
  }

  .story-section .about-img img {
    max-width: 100%; /* Full-width image on smaller screens */
  }
}

@media (max-width: 480px) {
  .story-section h1 {
    font-size: auto; /* Even smaller font size for very small devices */
  }

  .story-section p {
    font-size: 6vw; /* Larger text for readability on small screens */
    width: auto; /* Take up almost full width of screen */
  }

  .story-section .about-img img {
    max-width: auto; /* Ensure image fits properly */
  }
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
        <li><a href="guest.php#home">Home</a></li>
        <li><a href="guest.php#story">Story</a></li>
        <li><a href="guest.php#about">About</a></li>
        <li><a href="package.php" id="package-link">Accommodation</a></li>
        <li><a href="guest.php#gallery">Gallery</a></li>
        <li><a href="guest.php#contact">Contact</a></li>
        <li><a href="reservationform.php" id="btn_booking" target="_blank">BOOK NOW</a></li>
        <!-- Login Button -->
        <li><a href="index.php" id="btn_login">Login</a></li>
      </ul>
      <span class="fa fa-bars" onclick="menutoggle()"></span>
    </div>
  </div>
</header>

    <section class="home" id="home">
      <div class="content">
        <div class="logo">
          <img src="Images/marananLogo.jpg" width="150" alt="" />
        </div>
        <div class="text">
          <h1 id="title">Maranan Resort</h1>
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
        <section class="story-section">
  <div class="container">
    <div class="story-wrapper">
      <!-- Story Content -->
      <div class="story-content">
        <h1>
          Our <span>Story</span>
        </h1>
        <div class="heading-divider"></div>
        <p>
          Here at <span class="highlight">Maranan Resort</span>, our journey started with a simple idea: 
          to create a getaway like no other. With a team dedicated to excellence and an unwavering commitment 
          to our guests, we've earned recognition that fuels our passion for providing exceptional experiences.
        </p>
        <p>
          Step into our world and discover the beauty that surrounds us. From lush landscapes to cozy 
          accommodations, every corner is designed with your comfort in mind. Your presence is what makes our 
          story come alive.
        </p>
        <p>
          As you dive into your stay with us, remember that our story is intertwined with yours. Your 
          experiences shape our future, and we're here to make sure each moment feels perfect for you.
        </p>
      </div>
      <!-- Tree Image -->
      <div class="about-img">
        <img src="Images/Coconut_tree1.png" alt="Coconut Tree" />
      </div>
    </div>
  </div>
</section>
      </div>
    </div>

    <!-- START OF BACKGROUND -->

    <section class="background" id="about">
  <h1>About<span> Us</span></h1>
  <!-- About Resort -->
  <div class="about-resort">
    <!-- Resort Image -->
    <div class="resort-img">
      <img src="Images/about.jpg" alt="Maranan Resort">
    </div>
    <!-- Resort Info -->
    <div class="resort-info">
      <span>
        The <span>Maranan Resort</span> is owned by Jenelyn Maranan and opened for business on March 2017. Located in Sitio Durungao, Bauan, Batangas, we provide a range of amenities and services to create a comfortable, memorable, and enjoyable experience for guests. We started it as a simple get-together place, but we managed to make it this big to make our dearest customers satisfy their needs.
      </span>
    </div>
  </div>
</section>


    <!-- END OF BACKGORUND -->

    <!-- GALLERY -->

    <section class="gallery" id="gallery">
  <h1>Gallery / <span style="color: #228b22">Images</span></h1>
  <div class="gallery-wrap">
    <div class="gallery-wrapper">
      <img src="Images/gal2.jpg" alt="Image 1" />
      <img src="Images/gal3.jpg" alt="Image 2" />
      <img src="Images/gal4.jpg" alt="Image 3" />
      <img src="Images/IMG_4071.jpg" alt="Image 4" />
      <img src="Images/IMG_4078.jpg" alt="Image 5" />
      <img src="Images/IMG_4089.jpg" alt="Image 6" />
    </div>
    <div class="gallery-wrapper">
      <img src="Images/IMG_4093.jpg" alt="Image 7" />
      <img src="Images/IMG_4105.jpg" alt="Image 8" />
      <img src="Images/IMG_4107.jpg" alt="Image 9" />
      <img src="Images/IMG_4112.jpg" alt="Image 10" />
      <img src="Images/IMG_4118.jpg" alt="Image 11" />
      <img src="Images/IMG_4131.jpg" alt="Image 12" />
    </div>
    <div class="gallery-wrapper">
      <img src="Images/IMG_4132.jpg" alt="Image 13" />
      <img src="Images/IMG_4133.jpg" alt="Image 14" />
      <img src="Images/IMG_4134.jpg" alt="Image 15" />
      <img src="Images/IMG_4135.jpg" alt="Image 16" />
      <img src="Images/IMG_4137.jpg" alt="Image 17" />
      <img src="Images/IMG_4139.jpg" alt="Image 18" />
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
