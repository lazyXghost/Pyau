<!-- <?php
var_dump(php_ini_loaded_file(), php_ini_scanned_files());
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyau</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: 'en' },
                'google_translate_element'
            );
        }
    </script>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>
</head>
<style>

</style>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Py<span>au.</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Project</a></li>
                <li><a href="#skills" class="menu-btn">Working</a></li>
                <li><a href="#teams" class="menu-btn">Team</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="column-left">
                    <div class="text-1">
                        Water-Water</div>
                    <div class="text-2">
                        Everywhere</div>
                    <div class="text-3">
                        <span class="typing"></span>
                    </div>
                    <a href="database.display.php">Pyau Near Me</a>
                    <div id="google_translate_element"></div>
                </div>
                <div class="column-right">
                    <div class="container">
                        <input type="text" id="qrtext" placeholder="Enter Text">
                        <img src="./default.svg" id="qrimg" alt="qr-code">
                        <button id="qrbutton">Generate QR Code</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <div class="about-content">
                <div class="column right">
                    <div class="text">
                        <span class="typing-2"></span>
                    </div>
                    <p>
                        Our project “Pyau” aims at quenching thirst with quality water of those people who either remain
                        thirsty for a long time due to unavailability of water in their vicinity or fall prey to various
                        diseases like typhoid due to contaminated water. This also helps to make water available to
                        travelers who face difficulty in locating quality water while travelling. We aim to keep a track
                        of quality and location of various drinking water sources set up by individuals and government
                        organizations.Our project on being completed will work as a catalyst for the NGOs or the
                        governments of developing countries who are trying to provide quality water to everyone by
                        various other means. It will work as a bridge between government’s efforts and peoples need . It
                        will save both time and money .It will change life of many and our motive of SWACHH JAL- HAR PAL
                        will prove to be a boon for many families </p>
                        <a href="database.insert.php">Add Location</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">
                About our project</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-bullseye"></i>
                        <div class="text">
                            Mission</div>
                        <br>
                        <p>
                            Our project aims at providing good quality water to all by checking water quality and its location and making people aware of same. 
                        </p>
                        <br>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-eye"></i>
                        <div class="text">
                            Vision</div>
                        <p>
                            SWACHH JAL HAR PAL.People will come to know of location of water source and hence chanhges of falling sick due to contaminated water.
                            
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-wrench"></i>
                        <div class="text">
                            Working</div>
                        <p>
                            Water sources set up either by government or individuals are found along with the TDS reading to check the quality of water.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">
                Working</h2>
            <div class="skills-content">
                <div class="column left">
                    <!-- <div class="text">
                        Working.</div> -->
                    <p>
                        Firstly water sources set up either by government or individuals are found along with the TDS
                        reading to check the quality of water. Details of location of the water source along with its
                        quality is uploaded (GPS tracking is used for the same).The website uses the users location and
                        displays the nearest water sources with the respective water quality helping the user to find
                        good quality water near him/her.
                    </p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">
                Team</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="5.jpeg" alt="">
                        <div class="text">
                            Rajat</div>
                        <p>
                            Undergrad at IIT MANDI'24.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="4.JPG" alt="">
                        <div class="text">
                            Ghanmohan</div>
                        <p>
                            Undergrad at DELHI TECHNOLOGICAL UNIVERSITY'24</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="3.jpeg" alt="">
                        <div class="text">
                            Dishti Oberai</div>
                        <p>
                            Undergrad at IIT MANDI'24.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="6.jpeg" alt="">
                        <div class="text">
                            Shivam</div>
                        <p>
                            Undergrad at IIT MANDI'24.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">
                Contact</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">
                        Getting in Touch is easy!</div>
                    <br>
                    <p>

                        Your health is important to us and so is your feedback!
                    </p>
                    <br>
                    <p>
                        Waiting to hear from you...
                    </p>
                    <br>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">
                                    Email</div>
                                <div class="sub-title">
                                    pyau@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">
                        Message Us</div>
                    <form action="contact.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="name" name="name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="email" name="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="subject" name="subject" required>
                        </div>
                        <div class="field textarea">
                            <input cols="30" rows="10" placeholder="message" name="message" required></changeit>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>


</html>