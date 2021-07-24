<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART SOCIETY</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
        :root {
            --orange: #0082ce;
        }
        
        * {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;
            outline: none;
            border: none;
            text-decoration: none;
            transition: all .2s linear;
        }
        
        *::selection {
            background: var(--orange);
            color: #fff;
        }
        
        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 6rem;
            scroll-behavior: smooth;
        }
        
        section {
            padding: 2rem 9%;
        }
        
        .heading {
            text-align: center;
            padding: 2.5rem 0
        }
        
        .heading span {
            font-size: 3.5rem;
            background: rgba(252, 165, 4, 0.75);
            color: white;
            border-radius: .5rem;
            padding: .2rem 1rem;
        }
        
        .heading span.space {
            background: none;
        }
        
        .btn {
            display: inline-block;
            margin-top: 1rem;
            background: var(--orange);
            color: #fff;
            padding: .8rem 3rem;
            border: .2rem solid var(--orange);
            cursor: pointer;
            font-size: 1.7rem;
            margin: 0 10px;
        }
        
        .btn:hover {
            background: rgba(255, 255, 255);
            color: var(--orange);
        }
        
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #333;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 9%;
            text-decoration: none;
        }
        
        header .logo {
            width: 24%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        header .logo-name {
            font-size: 2.5rem;
            font-weight: bolder;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
        }
        
        header .logo-name span {
            color: var(--orange);
        }
        
        header .navbar a {
            color: #fff;
            font-size: 2rem;
            margin: 0 .8rem;
            text-decoration: none;
        }
        
        header .navbar a:hover {
            color: var(--orange);
        }
        
        header .icons i {
            font-size: 2.5rem;
            color: #fff;
            cursor: pointer;
            margin-right: 2rem;
        }
        
        header .icons i:hover {
            color: var(--orange);
        }
        
        header .search-bar-container {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            padding: 1.5rem 2rem;
            background: #333;
            border-top: .1rem solid rgba(255, 255, 255, .2);
            display: flex;
            align-items: center;
            z-index: 1001;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        }
        
        header .search-bar-container.active {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
        
        header .search-bar-container #search-bar {
            width: 100%;
            padding: 1rem;
            text-transform: none;
            color: #333;
            font-size: 1.7rem;
            border-radius: .5rem;
        }
        
        header .search-bar-container label {
            color: #fff;
            cursor: pointer;
            font-size: 3rem;
            margin-left: 1.5rem;
        }
        
        header .search-bar-container label:hover {
            color: var(--orange);
        }
        
        .login-form-container {
            position: fixed;
            top: -120%;
            left: 0;
            z-index: 10000;
            min-height: 100vh;
            width: 100%;
            background: rgba(0, 0, 0, .7);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-form-container.active {
            top: 0;
        }
        
        .login-form-container form {
            margin: 2rem;
            padding: 1.5rem 2rem;
            border-radius: .5rem;
            background: #fff;
            width: 50rem;
        }
        
        .login-form-container form h3 {
            font-size: 3rem;
            color: #444;
            text-transform: uppercase;
            text-align: center;
            padding: 1rem 0;
        }
        
        .login-form-container form .box {
            width: 100%;
            padding: 1rem;
            font-size: 1.7rem;
            color: #333;
            margin: .6rem 0;
            border: .1rem solid rgba(0, 0, 0, .3);
            text-transform: none;
        }
        
        .login-form-container form .box:focus {
            border-color: var(--orange);
            ;
        }
        
        .login-form-container form #remember {
            margin: 2rem 0;
        }
        
        .login-form-container form label {
            font-size: 1.5rem;
        }
        
        .login-form-container form .btn {
            display: block;
            width: 100%;
        }
        
        .login-form-container form p {
            padding: .5rem 0;
            font-size: 1.5rem;
            color: #666;
        }
        
        .login-form-container form p a {
            color: var(--orange);
        }
        
        .login-form-container form p a:hover {
            color: #333;
            text-decoration: underline;
        }
        
        .login-form-container #form-close {
            position: absolute;
            top: 2rem;
            right: 3rem;
            font-size: 5rem;
            color: #fff;
            cursor: pointer;
        }
        
        #menu-bar {
            color: #fff;
            border: .1rem solid #fff;
            border-radius: .5rem;
            font-size: 3rem;
            padding: .5rem 1.2rem;
            cursor: pointer;
            display: none;
        }
        
        .home {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
            position: relative;
            z-index: 0;
        }
        
        .home .content {
            text-align: center;
            z-index: 1;
        }
        
        .home .content h3 {
            font-size: 4.5rem;
            color: #fff;
            text-transform: uppercase;
            text-shadow: 0 .3rem .5rem rgba(0, 0, 0, .1);
            font-weight: bold;
            /* background-color: red; */
        }
        
        .home .content p {
            font-size: 2.5rem;
            color: #fff;
            padding: .5rem 0;
        }
        
        .home .video-container:after {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            z-index: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }
        
        .home .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        
        .home .controls {
            padding: 1rem;
            border-radius: 5rem;
            background: rgba(0, 0, 0, .7);
            position: relative;
            top: 10rem;
        }
        
        .heading-about {
            text-align: center;
            padding: 2.5rem 0
        }
        
        .heading-about span {
            font-size: 3.5rem;
            background: #00dfc0;
            color: white;
            border-radius: .5rem;
            padding: .2rem 1rem;
        }
        
        .heading-about span.space {
            background: none;
        }
        
        .about .row1 {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            align-items: center;
        }
        
        .about .row1 .image {
            flex: 1 1 40rem;
        }
        
        .about .row1 .image img {
            width: 100%;
        }
        
        .about .row1 .about-content {
            flex: 1 1 40rem;
            padding: 2rem;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
            border-radius: .5rem;
        }
        
        .about .row1 .about-content p {
            font-size: 1.7rem;
            line-height: 30px;
            word-spacing: 2px;
            text-align: justify;
        }
        
        .contact .row1 {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            align-items: center;
        }
        
        .contact .row1 .image {
            flex: 1 1 35rem;
        }
        
        .contact .row1 .image img {
            width: 100%;
        }
        
        .contact .row1 form {
            flex: 1 1 50rem;
            padding: 2rem;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
            border-radius: .5rem;
        }
        
        .contact .row1 form .inputBox {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .contact .row1 form .inputBox input,
        .contact .row1 form textarea {
            width: 49%;
            margin: 1rem 0;
            padding: 1rem;
            font-size: 1.7rem;
            color: #333;
            background: #f7f7f7;
            text-transform: none;
        }
        
        .contact .row1 form textarea {
            height: 15rem;
            resize: none;
            width: 100%;
        }
        
        .brand-container {
            text-align: center;
        }
        
        .footer {
            background: #333;
        }
        
        .footer .social {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .footer .credit {
            text-align: center;
            padding: 2rem 1rem;
            margin-top: 1rem;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            border-top: .1rem solid rgba(255, 255, 255, .2);
        }
        
        .footer .credit span {
            color: var(--orange);
        }
        /* media queries  */
        
        @media (max-width:1200px) {
            html {
                font-size: 55%;
            }
        }
        
        @media (max-width:991px) {
            header {
                padding: 2rem;
            }
            section {
                padding: 2rem;
            }
        }
        
        @media (max-width:768px) {
            .logo-name {
                margin-left: 25px;
            }
            #menu-bar {
                display: initial;
            }
            header .navbar {
                position: absolute;
                top: 100%;
                right: 0;
                left: 0;
                background: #333;
                border-top: .1rem solid rgba(255, 255, 255, .2);
                padding: 1rem 2rem;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            }
            header .navbar.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }
            header .navbar a {
                display: block;
                border-radius: .5rem;
                padding: 1.5rem;
                margin: 1.5rem 0;
                background: #222;
            }
        }
        
        @media (max-width:450px) {
            .logo-name {
                margin-left: 15px;
            }
            html {
                font-size: 50%;
            }
            .heading span {
                font-size: 2.5rem;
            }
            .contact .row1 form .inputBox input {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
    <!-- header section starts  -->

    <header>

        <div class="logo">
            <img src="images/logo.png" width="50">
            <a href="#" class="logo-name"><span>SMART</span>SOCIETY</a>
        </div>


        <nav class="navbar">
            <a href="#home">Home</a>
            <!-- <a href="#review">Review</a> -->
            <a href="#about">About Us</a>
            <a href="#contact">Contact</a>
        </nav>

        <div id="menu-bar" class="fas fa-bars"></div>
    </header>

    <!-- header section ends -->


    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="content">
            <h3>Welcome to Smart Society</h3>
            <p>Easy to manage your society</p>
            <a href="#" class="btn">SIGN UP</a>
            <a href="#" class="btn">LOGIN</a>
        </div>
        <div class="video-container">
            <video src="video/apartment.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->

    <section class="about" id="about">

        <h1 class="heading-about">
            <span>A</span>
            <span>B</span>
            <span>O</span>
            <span>U</span>
            <span>T</span>
            <span class="space"></span>
            <span>U</span>
            <span>S</span>
        </h1>

        <div class="row1">

            <div class="image">
                <img src="images/about-us-illustration.jpg" alt="">
            </div>

            <div class="about-content">
                <p>
                    Smart Society offers you hassle-free, reliable, efficient and convenient platform for housing society management. It is a highly functional tool to get organized and manage your society. We have come up with easy approach for maintaining bills, organising
                    societal events, scheduling meetings, notices and sharing timely information with ease. It also provides visitor information, complaint system and details about the upcoming events.
                </p>
                <p>
                    The website efficiently maintains the residents and workers information, parking system, cctv, rules and regulations of society, society funds and much more. It brings great amount of transparency, centralized, efficient way of managing the activities
                    for the society & provides easy to use interface to manage finances, keep track of assets/maintain them, manage committees, meetings, notices and share information in a systematic way
                </p>
            </div>

        </div>

    </section>

    <!-- book section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row1">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" onclick="my()" value="send message">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="social">
            <a href="#"><i class="fab fa-facebook fa-3x mx-4 text-white"></i></a>
            <a href="#"><i class="fab fa-instagram fa-3x mx-4 text-white"></i></a>
            <a href="#"><i class="fab fa-twitter fa-3x mx-4 text-white"></i></a>
            <a href="#"><i class="fab fa-linkedin fa-3x mx-4 text-white"></i></a>
        </div>

        <h1 class="credit"> Created by <span> Fivfer</span> | Copyrights &copy; 2021 all rights reserved! </h1>

    </section>

    <script>
        let searchBtn = document.querySelector('#search-btn');
        let searchBar = document.querySelector('.search-bar-container');
        let formBtn = document.querySelector('#login-btn');
        let loginForm = document.querySelector('.login-form-container');
        let formClose = document.querySelector('#form-close');
        let menu = document.querySelector('#menu-bar');
        let navbar = document.querySelector('.navbar');
        let videoBtn = document.querySelectorAll('.vid-btn');

        function my() {
            // var audio = new Audio('./xyz.mp3');

            responsiveVoice.speak("Thank you for your response. We will contact you soon.", "UK English Male", {
                volume: 100
            });
        }

        window.onscroll = () => {
            searchBtn.classList.remove('fa-times');
            searchBar.classList.remove('active');
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
            loginForm.classList.remove('active');
        }

        menu.addEventListener('click', () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        });

        searchBtn.addEventListener('click', () => {
            searchBtn.classList.toggle('fa-times');
            searchBar.classList.toggle('active');
        });

        formBtn.addEventListener('click', () => {
            loginForm.classList.add('active');
        });

        formClose.addEventListener('click', () => {
            loginForm.classList.remove('active');
        });

        videoBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.controls .active').classList.remove('active');
                btn.classList.add('active');
                let src = btn.getAttribute('data-src');
                document.querySelector('#video-slider').src = src;
            });
        });

    </script>


</body>

</html>