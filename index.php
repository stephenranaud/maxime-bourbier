<?php 
    phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=none">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <script src="js/main.js" type="module"></script>
    <script src="js/animation.js" type="module"></script>
</head>

<body>
    <a href="#" id="scroll-top">
        <i class="ri-arrow-up-line"></i>
    </a>
    <header class="header-basic">

        <nav class="nav-main">
            <div class="nav-main__logo" id="logo">
                <a href="."><img src="assets/logo.png" alt=""></a>
            </div>

            <div class="nav-main__nav">
                <div id="btn-menu" class="icon-menu"></div>
                <div id="simple-menu" class="simple-menu">
                    <a href="/index.html">Home</a>
                    <a href="/html/about_me.html">About me</a>
                    <a href="/projects.html">Projects</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>
        </nav>

        <div class="wrapper">
            <div class="block-text appear-left">
                <div class="title">
                    <span class="title__line"></span>
                    <span class="title__text">Maxime Bourbier</span>
                </div>
                <h1>
                    Hello, I’m Maxime your future designer.
                </h1>
            </div>
            <div class="separator"></div>
            <div class="block-text">
                <div class="title">
                    <span class="title__line"></span>
                    <span class="title__text">What I do</span>
                </div>
                <h2 class="appear-right">
                    I like to create interfaces, visual identities, or motion design.
                </h2>

                <h2 class="appear-left">

                    Taking care of the user experience and innovating in digital is also a part of my skills.
                </h2>
                <br>
                <a href="#" class="btn">
                    Contact me
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </header>

    <section class="section-product appear">
        <div class="wrapper">
            <div class="block-text">
                <div class="title">
                    <span class="title__line"></span>
                    <span class="title__text">Portfolio</span>
                </div>
                <h1>
                    Look at My Products.
                </h1>
            </div>

            <div class="grid-products">

                <div class="product">
                    <a href="">
                        <img src="assets/cv.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/lg.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/sw.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/onboarding.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/ytbanner.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/jersey.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/creat.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/sklz.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/odyssey.png" alt="">
                    </a>
                </div>
                <div class="product">
                    <a href="">
                        <img src="assets/eco.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-contact">
        <div class="wrapper">
            <div class="block-text appear-left">
                <div class="title">
                    <span class="title__line"></span>
                    <span class="title__text">Contact me</span>
                </div>
                <h2>
                    Let’s work together
                </h2>

                <p>
                    I would love to discuss with you about your project, and potential colaborations.
                </p>
            </div>

            <div class="contact">
                <div class="contact__item">
                    <i class="ri-mail-fill"></i>
                    <span>maxime.bourbier@gmail.com</span>
                </div>
                <div class="contact__item">
                    <i class="ri-home-fill"></i>
                    <span>Epinay-Sur-Seine, France</span>
                </div>
                <div class="contact__item">
                    <i class="ri-phone-fill"></i>
                    <span>+33 6 44 71 11 0</span>
                </div>
            </div>

            <div class="wrapper-form appear-right">
                <form id="contact" action="" class="form-contact">
                    <div class="group-form group-form--border-gradient">
                        <input type="text">
                        <i class="ri-user-fill"></i>
                    </div>

                    <div class="group-form group-form--border-gradient">
                        <input type="mail">
                        <i class="ri-send-plane-fill"></i>
                    </div>

                    <div class="group-form group-form--border-gradient">
                        <input type="text">
                        <i class="ri-briefcase-fill"></i>
                    </div>

                    <div class="group-form group-form--border-gradient">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <i class="ri-message-2-fill"></i>
                    </div>
                    <div class="group-form">
                        <button type="submit" class="btn appear">
                        Let’s Talk
                        <i class="ri-arrow-right-line"></i>
                       </button>
                    </div>
                </form>

            </div>


        </div>
    </section>
</body>

<footer>
    <div id="copyright">© 2022 Maxime Bourbier</div>
</footer>

</html>