<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahboob Hasan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header id="header">
        <div class="row m-0">
            <div class="col-3 bgcolor-black">
                <nav class="primary-nav navbar-expand-md">
                    <div class="site-title text-center text-light py-5">
                        <a href="#" class="navbar-brand font-staat font-size-40">SPY</a>
                        <p class="description text-uppercase font-os">Mahboob Hasan</p>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#home" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fa fa-home"></i>&nbsp Home</a>
                        <a href="#about_me" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fa fa-user"></i>&nbsp About</a>
                        <a href="#services" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fa fa-tools"></i>&nbsp Services</a>
                        <a href="#portfolio" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fa fa-portrait"></i>&nbsp Portfolio</a>
                        <a href="#footer" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fa fa-phone-volume"></i>&nbsp Contact Us</a>
                    </div>
                </nav>
            </div>
        </div>
        <button class="toggle-button"><span class="fas fa-bars fa-2x"></span></button>
        <div class="social">
            <span class="mr-3"><i class="fab fa-facebook-f"></i></span>
            <span class="mr-3"><i class="fab fa-twitter"></i></span>
            <span class="mr-3"><i class="fab fa-instagram"></i></span>
            <span class="mr-3"><i class="fab fa-youtube"></i></span>
        </div>
    </header>    
    <main id="site-main">
        <div class="row m-0">
            <div class="col-md-9 offset-md-3 px-0">
                <section class="site-banner" id="home">
                    <div class="banner-area">
                        <div class="author text-center">
                            <div class="author-img"></div>
                            <h1 class="text-white font-staat font-size-40 text-uppercase py-3">Mahboob Hasan</h1>
                            <h5 class="text-white font-ram font-size-27">I'm <span id="typed"></span></h5>
                        </div>
                    </div>
                </section>
                    <section class="about px-4 my-5" id="about_me">
                        <div class="me py-5">
                            <h5 class="text-uppercase font-os font-size-16 text-muted">information</h5>
                            <h1 class="text-uppercase font-staat font-size-34">About Me</h1>
                        </div>
                        <div class="row m-0">
                            <div class="col-sm-5 pl-0">
                                <img src="./assets/photo.jpeg" alt="profile image" class="img-fluid">
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-uppercase font-os font-size-16 text-muted">About Me</h6>
                                <h5 class="font-ram font-size-20 py-2">I'm Mahboob Hasan & <span id="typed_2"></span></h5>
                                <p class="font-ram text-black-50 py-2" style="text-align:justify;">
                                    Hi, My name is Mahboob Hasan. I'm a Web Developer, and a Freelancer also.I'm from Varanasi. I have done my high school from Sir Syed Public School & Intermediate from Bal Vidyalaya Madhyamik School & Graduation in BCA from Microtek College of Management & Technology & now appearing in MCA form Jss Academy of Technical Education. I'm well certified in Core JAVA & Php and basic knowledge of Ethical Hacking & Cyber Security also. I have specilization in JAVA Application development & Web development(both static & dynamic).I posses good presentation and communication skills.
                                </p>
                                <div class="d-flex flex-row flex-wrap justify-content-between py-4">
                                    <div class="d-flex flex-column">
                                        <p class="font-ram"><b>Birthday: </b><span class="text-black-50">05 November 1998</span></p>
                                        <p class="font-ram"><b>WhatsApp: </b><span class="text-black-50">+91-7054073206</span></p>
                                        <p class="font-ram"><b>Phone: </b><span class="text-black-50">+91-6394603713</span></p>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <p class="font-ram"><b>Qualification: </b><span class="text-black-50">MCA</span></p>
                                        <p class="font-ram"><b>Mail: </b><span class="text-black-50">mahboobhasan8770@gmail.com</span></p>
                                        <p class="font-ram"><b>Instagram: </b><span class="text-black-50">mahboob1862</span></p>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </section>
                      <section class="skill px-4 py-5 bg-light" id="services">
                        <div class="ability py-3">
                            <h5 class="text-uppercase font-os font-size-16 text-muted">Ability</h5>
                            <h1 class="text-uppercase font-staat font-size-34">My skills</h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pl-4">
                                <p class="font-ram font-size-16 text-black-50 pb-3" style="text-align:justify;">
                                    I posses good Communication, Presentation & leadership skills.I have also worked on a live project. I have done many minor & major projects in college life.
                                </p>
                                <p class="font-ram font-size-16 text-black-50"style="text-align:justify;">
                                    I have basic knowledge of Photography, Photoshop, Ethical Hacking & Cyber Security.
                                </p>
                            </div>
                            <div class="col-sm-6 bars">
                                <div class="bar-1 mb-4">
                                    <div class="d-flex flex-row justify-content-between">
                                        <p class="font-ram font-size-16">Developer</p>
                                        <span class="font-ram font-size-16">90%</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bgcolor-black" role="progressbar" style="width:90%"></div>
                                    </div>
                                </div>
                                <div class="bar-1 mb-4">
                                    <div class="d-flex flex-row justify-content-between">
                                        <p class="font-ram font-size-16">Presentation</p>
                                        <span class="font-ram font-size-16">95%</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bgcolor-black" role="progressbar" style="width:95%"></div>
                                    </div>
                                </div>
                                <div class="bar-1 mb-4">
                                    <div class="d-flex flex-row justify-content-between">
                                        <p class="font-ram font-size-16">Web Design</p>
                                        <span class="font-ram font-size-16">95%</span>
                                    </div>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bgcolor-black" role="progressbar" style="width:95%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="services-area px-4 py-5">
                        <div class="do py-5">
                            <h5 class="text-uppercase font-os font-size-16 text-muted">What I Do</h5>
                            <h1 class="text-uppercase font-staat font-size-34">Services</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 mb-4 text-center">
                                <div class="panel border p-4">
                                    <span class="icon text-secondary"><i class="fas fa-laptop fa-3x"></i></span>
                                    <h4 class="font-ram py-4">Web Design</h4>
                                    <p class="font-ram font-size-16 text-black-50" style="text-align:justify;">
                                        Web design is the process of creating websites. It encompasses several different aspects, including webpage layout, content production, and graphic design. While the terms web design and web development are often used interchangeably, web design is technically a subset of the broader category of web development.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4 text-center">
                                <div class="panel border p-4">
                                    <span class="icon text-secondary"><i class="far fa-lightbulb fa-3x"></i></span>
                                    <h4 class="font-ram py-4">Development</h4>
                                    <p class="font-ram font-size-16 text-black-50" style="text-align:justify">
                                        Web development is the process of creating websites. It encompasses several different aspects, including webpage layout, content production, and graphic design. While the terms web design and web development are often used interchangeably, web design is technically a subset of the broader category of web development.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4 text-center">
                                <div class="panel border p-4">
                                    <span class="icon text-secondary"><i class="fas fa-camera fa-3x"></i></span>
                                    <h4 class="font-ram py-4">Photography</h4>
                                    <p class="font-ram font-size-16 text-black-50" style="text-align:justify;">
                                        Photography is an art of seeing world in an innovative way.Photography is the whole world full of adventures, interesting events, stories, games of colors and light. As one of the most interesting and exciting forms of art, it appeared a long time ago, and to this time has been greatly influencing the human life.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4 text-center">
                                <div class="panel border p-4">
                                    <span class="icon text-secondary"><i class="fas fa-chart-line fa-3x"></i></span>
                                    <h4 class="font-ram py-4">Marketing</h4>
                                    <p class="font-ram font-size-16 text-black-50" style="text-align:justify;">
                                       Marketing refers to activities a company undertakes to promote the buying or selling of a product or service. Marketing includes advertising, selling, and delivering products to consumers or other businesses. Some marketing is done by affiliates on behalf of a company.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4 text-center">
                                <div class="panel border p-4">
                                    <span class="icon text-secondary"><i class="fas fa-mobile-alt fa-3x"></i></span>
                                    <h4 class="font-ram py-4">Fully Responsive</h4>
                                    <p class="font-ram font-size-16 text-black-50" style="text-align:justify;">
                                       Responsive is an approach to web design that makes web pages render well on a variety of devices and window or screen sizes. Responsive layouts automatically adjust and adapt to any device screen size, whether it is a desktop, a laptop, a tablet, or a mobile phone.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4 text-center">
                                <div class="panel border p-4">
                                    <span class="icon text-secondary"><i class="fas fa-directions fa-3x"></i></span>
                                    <h4 class="font-ram py-4">Art Direction</h4>
                                    <p class="font-ram font-size-16 text-black-50" style="text-align:justify;">
                                       Art director is the title for a variety of similar job functions in advertising, marketing, publishing, film and television, the Internet, and video games.One of the most difficult problems that art directors face is to translate desired moods, concepts, & underdeveloped ideas into imagery.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="reference bg-light py-5 px-4">
                        <div class="refer py-3">
                            <h5 class="text-uppercase font-os font-size-16 text-muted">My Reference</h5>
                            <h1 class="text-uppercase font-staat font-size-34">References</h1>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-6 my-3">
                                <div class="box"style="width:347px;">
                                <img src="./assets/reffer/praveensir.JFIF" class="img-fluid">
                                <div class="content">
                                    <br><br>
                                    <h3>Praveen Srivastav</h3>
                                    <p><h6>Microtek College of Management & Technology</h6><br>
                                    <span class="mr-3"><i class="fa fa-mobile"></i> +91-9889021018</span><br>
                                <span class="mr-3"><i class="fa fa-envelope"></i> praveenshri.vns@gmail.com</span><br>
                                 <span class="mr-3"><i class="fab fa-whatsapp"></i> +91-9889021018</span><br>
                                <span class="mr-3"><a href="https://www.youtube.com/channel/UCPaNAUTpZ7L2vphC7lTt-9A/featured"style="color:white"><i class="fab fa-youtube" style="color:white"></i> Professional</a></span><br><br>
                            </p>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6 my-3">
                                <div class="box" style="width:351px;">
                                <img src="./assets/reffer/vk.jpg" class="img-fluid">
                                <div class="content"><br><br>
                                    <h3>Vinod Kumar Jaiswal</h3>
                                    <p><h6>Next Gen IT Academy</h6><br>
                                    <span class="mr-3"><i class="fa fa-mobile"></i> +91-7007970016</span><br>
                                <span class="mr-3"><i class="fa fa-envelope"></i> vkjaiswal2010@gmail.com</span><br>
                                <span class="mr-3"><i class="fab fa-whatsapp"></i> +91-8115785795</span><br><span class="mr-3"><a href="http://www.nitgroup.tech/about-us/"style="color:white"><i class="fa fa-link"style="color:white"></i> NextGen Institute of Technology(NIT)</a></span><br><br><br></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="work py-5 px-4" id="portfolio">
                        <div class="py-3">
                            <h5 class="text-uppercase font-os font-size-16 text-muted">Porfolio</h5>
                            <h1 class="text-uppercase font-staat font-size-34">Creative Work</h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 pb-4">
                                <img src="./assets/work/01.JPG" alt="work1" class="img-fluid">
                            </div>
                            <div class="col-sm-4 pb-4">
                                <img src="./assets/work/02.JPG" alt="work1" class="img-fluid">
                            </div>
                            <div class="col-sm-4 pb-4">
                                <img src="./assets/work/03.JPG" alt="work1" class="img-fluid">
                            </div>
                            <div class="col-sm-4 pb-4">
                                <img src="./assets/work/04.JPG" alt="work1" class="img-fluid">
                            </div>
                            <div class="col-sm-4 pb-4">
                                <img src="./assets/work/05.JPG" alt="work1" class="img-fluid">
                            </div>
                            <div class="col-sm-4 pb-4">
                                <img src="./assets/work/06.JPG" alt="work1" class="img-fluid">
                            </div>
                        </div>
                    </section>                
                <footer id="footer" class="pt-5 px-3">
                    <div id="contact_us">
                        <div class="py-3 px-2">
                            <h5 class="text-uppercase font-os font-size-16 text-muted">Location</h5>
                                <h1 class="text-uppercase font-staat font-size-34">Contact Us</h1>
                        </div>
                        <div class="row py-5">
                            <div class="col-sm-6">
                                <h6 class="text-uppercase font-ram font-size-16 text-dark">SPY Software Solutions.</h6>
                                <p class="font-ram w-50 font-size-16 text-black-50">This is our resolve that we make something better and innovative for our furture.</p>
                                <p class="font-ram font-size-16 text-black-50 pt-3">PHONE: +91-6394603713</p>
                                <p class="font-ram font-size-16 text-black-50">WHATSAPP: +91-7054073206</p>
                                <p class="font-ram font-size-16 text-black-50">EMAIL: mahboobhasan8770@gmail.com</p>
                                <p class="font-ram font-size-16 text-black-50">ADDRESS: A 25/78-A Saleempura, Koyala Bazar Varanasi</p>
                            </div>
                            <div class="col-sm-6 py-4 px-4">
                                <h6 class="text-uppercase font-ram font-size-16">Get in touch</h6>
                                <form action="insert.php" class="py-3"method="post">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Name"name="nme">
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" placeholder="Email or Phone" name="e_mail">
                                        </div>
                                    </div>
                                    <textarea cols="30" rows="3" class="form-control my-4" placeholder="Message" name="message"></textarea>
                                    <button type="submit" class="btn btn-dark" name="btnAdd">Say Hello!</button>
                             </form>
                            </div>
                        </div>
                        <div class="row bg-light py-5">
                            <div class="col-sm-4 my-5 text-center">
                                <h6 class="font-ram font-size-16 text-black-50">&copy;2023 SPY. All rights reserved</h6>
                            </div>
                            <div class="col-sm-4 my-4 text-center">
                                <div class="footer-title">
                                    <a href="#" class="navbar-brand font-staat font-size-40 text-dark">SPY</a>
                                    <p class="description font-os font-size-16 text-black-50 text-uppercase">Mahboob Hasan</p>
                                </div>
                            </div>
                            <div class="col-sm-4 my-5 text-center">
                                <span class="mr-3"><a href="https://www.facebook.com/mahboob.hasan.1253"><i class="fab fa-facebook-f"style="color:black"></i></a></span>
                                <span class="mr-3"><a href="https://twitter.com/Mahboob39193392"><i class="fab fa-twitter"style="color:black"></a></i></span>
                                <span class="mr-3"><a href="https://www.instagram.com/mahboob1862/"><i class="fab fa-instagram"style="color:black"></i></a></span>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
<script src="./vendor/typed/typed.min.js"></script>
<script src="./index.js"></script>
<script src="../chatterbox/bootstrap/js/sweetalert.min.js"></script>
</body>
</html>