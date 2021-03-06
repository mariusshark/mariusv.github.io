<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $to = 'mariusvolung@gmail.com';
 $subject = "New Message on porfolio";
 $body = '<html>
    <body>
     <h2>Title</h2>
     <br>
     <p>Name:<br>'.$name.'</p>
     <p>Email:<br>'.$email.'</p>

    </body>
   </html>';

//headers
$headers  = "From: ".$name." <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";

//send
$send = mail($to, $subject, $body, $headers);
if ($send) {
 echo '<br>';
 echo "Success. Thanks for Your Message.";
} else {
 echo 'Error.';
}
}
?>




<!DOCTYPE HTML>



<html>
	<head>
    <title>Marius Volungevicius Porfolio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Header -->
    <div id="header">

        <div class="top">

            <!-- Logo -->
            <div id="logo">
                <span class="image avatar48"><img src="images/cv_photo.jpg" alt="" /></span>
                <h1 id="title">Marius Volungevicius</h1>
                <p>Junior Front End Developer</p>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="#top" id="top-link"><span class="icon solid fa-home">Intro</span></a></li>
                    <li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Portfolio</span></a></li>
                    <li><a href="#about" id="about-link"><span class="icon solid fa-user">About Me</span></a></li>
                    <li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contact</span></a></li>
                </ul>
            </nav>

        </div>

        <div class="bottom">

            <!-- Social Icons -->
            <ul class="icons">
                <li><a href="#" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a></li>
                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            </ul>

        </div>

    </div>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <section id="top" class="one dark cover">
            <div class="container">

                <header>
                    <h2 class="alt">Hi! I'm <strong>Marius</strong>,<br> highly-motivated, result oriented, self-driven, hard-working, fast learner.
                    </h2>
                    <p>Junior Front End Developer</p>

                </header>

                <footer>
                    <a href="#portfolio" class="button scrolly">My Works</a>
                </footer>

            </div>
        </section>

        <!-- Portfolio -->
        <section id="portfolio" class="two">
            <div class="container">

                <header>
                    <h2>Portfolio</h2>
                </header>

                <p>I am currently looking for a Junior Front-end Developer job opportunity that will
                    allow me to work alongside an expert team of developers , there by helping to
                    drive my career progression to more senior roles in the future.</p>

                <div class="row">
                    <div class="col-4 col-12-mobile">
                        <article class="item">
                            <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                            <header>
                                <h3>Project 1
                                </h3>
                            </header>
                        </article>
                        <article class="item">
                            <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                            <header>
                                <h3>Project 4</h3>
                            </header>
                        </article>
                    </div>
                    <div class="col-4 col-12-mobile">
                        <article class="item">
                            <a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                            <header>
                                <h3>Project 2</h3>
                            </header>
                        </article>
                        <article class="item">
                            <a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
                            <header>
                                <h3>Project 5</h3>
                            </header>
                        </article>
                    </div>
                    <div class="col-4 col-12-mobile">
                        <article class="item">
                            <a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
                            <header>
                                <h3>Project 3</h3>
                            </header>
                        </article>
                        <article class="item">
                            <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
                            <header>
                                <h3>Project 6</h3>
                            </header>
                        </article>
                    </div>
                </div>

            </div>
        </section>

        <!-- About Me -->
        <section id="about" class="three">
            <div class="container">

                <header>
                    <h2>About Me</h2>
                </header>

                <a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>

                <p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
                    ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
                    laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
                    parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
                    dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
                    ornare iaculis.</p>

            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="four">
            <div class="container">

                <header>
                    <h2>Contact</h2>
                </header>

                <p>Elementum sem parturient nulla quam placerat viverra
                    mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
                    donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
                    orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

                <form method="post" action="$send">
                    <div class="row">
                        <div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Name" /></div>
                        <div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
                        <div class="col-12">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <input type="submit" value="Send Message" />
                        </div>
                    </div>
                </form>

            </div>
        </section>

    </div>

    <!-- Footer -->
    <div id="footer">

        <!-- Copyright -->
        <ul class="copyright">
            <li>&copy; 2020</li>
            <li>Design: <a href="https://www.linkedin.com/in/marius-volungevicius-0b5049a8/">Marius Volungevicius</a></li>
        </ul>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body></html>