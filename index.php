<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sale Baloni, Sale Dekoracija, Dekoracija, Baloni, Slavlja">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ivan Todorovic">
    <title>SaleBaloni</title>
    <script src="https://kit.fontawesome.com/06b0f55414.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="7.1 Grid.css">
    <link rel="stylesheet" href="https://icons8.com/icon/stEibDUxUgR1/party-balloons">
    <link rel="icon" type="image/png" href="https://img.icons8.com/officel/80/000000/party-baloons.png" />
    <link rel="stylesheet" href="magnific/magnific-popup.css">





</head>

<body>

    <header>
        <nav id="nav">
            <div class="nav-logo">
                <img src="img/Logo.PNG" alt="logo" width="85px" height="85px">
                <i class="fas fa-bars" id="toggle-btn"></i>
            </div>
            <ul class="nav-links">
                <li><a href="#banner">Pocetna</a></li>
                <li><a href="#current">Dekoracije</a></li>
                <li><a href="#about">O nama</a></li>
                <li><a href="#work">Kupi</a></li>
                <li><a href="#team">Drugi o nama</a></li>
                <li><a href="#contact">Kontakt</a></li>
                <li class="nav-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </nav>
        <div id="banner">
            <div class="banner-text">
                <h1>sale baloni</h1>
                <h3>prodaja balona <span>i</span> dekoracija veselja</h3>
                <a href="#current">istrazi</a>
                <a href="#work">kupi</a>
            </div>
        </div>
    </header>

    <section id="icon-section">
        <a href="#banner"><i class="fas fa-home"></i></a>
        <a href="#work"><i class="fas fa-palette"></i></a>
        <a href="#about"><i class="fas fa-splotch"></i></a>
        <a href="#current"><i class="fas fa-baby"></i></a>
    </section>


    <section id="skills">
        <div class="title">
            <div class="title-icon">
                <i class="fas fa-cogs  "></i>
            </div>
            <div class="title-text">
                <h2 class="title-heading">Nasa ponuda</h2>
                <p class="title-subheading">kontaktirajte nas lako cemo se dogovoriti</p>
            </div>
        </div>

        <section id="work" class="clearfix">
            <div class="work-center">
                <div class="button-container">
                    <div class="button-group filter-button-group">
                        <button data-filter="*">sve</button>
                        <button data-filter=".heli">helijumski baloni</button>
                        <button data-filter=".pvc">pvc baloni</button>
                        <button data-filter=".access">dodatna oprema</button>
                    </div>
                </div>
                <div class="picture-container">
                    <article class="picture-item heli">
                        <a href="img/projecat/jungle-theme-balloon-bunches_thvuk0_c_scale,w_839.jpg"><img
                                src="img/projecat/jungle-theme-balloon-bunches_thvuk0_c_scale,w_839.jpg" alt="1"></a>
                    </article>
                    <article class="picture-item pvc">
                        <a href="img/projecat/balloonarch10_z8pn7s_ar_1_1,c_fill,g_auto__c_scale,w_767.jpg"><img
                                src="img/projecat/balloonarch10_z8pn7s_ar_1_1,c_fill,g_auto__c_scale,w_767.jpg"
                                alt="2"></a>
                    </article>
                    <article class="picture-item access">
                        <a
                            href="img/projecat/deco-wedding-decoration-background-flowers-romantic_fz4gja_c_scale,w_910.jpg"><img
                                src="img/projecat/deco-wedding-decoration-background-flowers-romantic_fz4gja_c_scale,w_910.jpg"
                                alt="3"></a>
                    </article>
                    <article class="picture-item heli">
                        <a
                            href="img/projecat/balloon-expert-decorator-tx_1_orig_wab9qf_ar_1_1,c_fill,g_auto__c_scale,w_767.jpg"><img
                                src="img/projecat/balloon-expert-decorator-tx_1_orig_wab9qf_ar_1_1,c_fill,g_auto__c_scale,w_767.jpg"
                                alt="1"></a>
                    </article>
                    <article class="picture-item pvc">
                        <a href="img/projecat/WEDDIN~1.JPG"><img src="img/projecat/WEDDIN~1.JPG" alt="2"></a>
                    </article>
                    <article class="picture-item access">
                        <a
                            href="img/projecat/deco-wedding-decoration-background-flowers-romantic_fz4gja_c_scale,w_910.jpg"><img
                                src="img/projecat/deco-wedding-decoration-background-flowers-romantic_fz4gja_c_scale,w_910.jpg"
                                alt="3"></a>
                    </article>

                </div>
            </div>
        </section>

        <section id="about">
            <div class="title">
                <div class="title-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="title-text">
                    <h2 class="title-heading">O nama</h2>
                    <p class="title-subheading">dugogodisnje iskustvo je nasa garancija</p>
                </div>
            </div>

            <div id="about-center">
                <article id="about-photo">
                    <img src="img/kupci/kupac_2.jpg" alt="o nama">
                </article>
                <article id="about-text">
                    <div id="accordion">
                        <h3>kliknite za vise informacija</h3>
                        <div>Dugogodisnje iskustvo u dekoraciji i prodaji balona.</div>
                        <h3>kliknite za vise informacija</h3>
                        <div>Visoki nivo profesionalizma i saradnje sa klijentima.</div>
                        <h3>kliknite za vise informacija</h3>
                        <div>Tacnost, pouzdanost i kreativnost u svakom pogledu.</div>
                    </div>
                </article>
            </div>

        </section>

        <section id="current">
            <div class="title">
                <div class="title-icon">
                    <i class="fas fa-image"></i>
                </div>
                <div class="title-text">
                    <h2 class="title-heading">Dekoracije</h2>
                    <p class="title-subheading">U dogovoru sa vama svaka dekoracija je moguca</p>
                </div>
            </div>

            <div id="current-center">
                <artile class="current-item">
                    <a
                        href="img/projecat/balloon-expert-decorator-tx_1_orig_wab9qf_ar_1_1,c_fill,g_auto__c_scale,w_767.jpg">
                        <img src="img/projecat/balloon-expert-decorator-tx_1_orig_wab9qf_ar_1_1,c_fill,g_auto__c_scale,w_767.jpg"
                            alt="current"></a>
                </artile>
                <artile class="current-item">
                    <a href="img/projecat/balloon-flower-decor-wedding_w9z3ry_c_scale,w_910.jpg">
                        <img src="img/projecat/balloon-flower-decor-wedding_w9z3ry_c_scale,w_910.jpg" alt="current"></a>
                </artile>
                <artile class="current-item">
                    <a href="img/projecat/balloonarch10_z8pn7s_ar_1_1,c_fill,g_auto__c_scale,w_767.jpg">
                        <img src="img/projecat/balloonarch10_z8pn7s_ar_1_1,c_fill,g_auto__c_scale,w_767.jpg"
                            alt="current"></a>
                </artile>
                <artile class="current-item">
                    <a href="img/projecat/deco-wedding-decoration-background-flowers-romantic_fz4gja_c_scale,w_910.jpg">
                        <img src="img/projecat/deco-wedding-decoration-background-flowers-romantic_fz4gja_c_scale,w_910.jpg"
                            alt="current"></a>
                </artile>
                <artile class="current-item">
                    <a href="img/projecat/jungle-theme-balloon-bunches_thvuk0_c_scale,w_839.jpg">
                        <img src="img/projecat/jungle-theme-balloon-bunches_thvuk0_c_scale,w_839.jpg" alt="current"></a>
                </artile>
                <artile class="current-item">
                    <a href="img/projecat/WEDDIN~1.JPG">
                        <img src="img/projecat/WEDDIN~1.JPG" alt="current"></a>
                </artile>

            </div>

        </section>


        <section id="numbers">
            <article class="number">
                <i class="fas fa-user">
                    <p class='numscroller' data-min='1' data-max='1000' data-delay='10000' data-increment='1'>1000</p>
                </i>
                <h3>Korisnika</h3>
            </article>
            <article class="number">
                <i class="fas fa-cart-plus">
                    <p class='numscroller' data-min='1' data-max='1000' data-delay='1000' data-increment='1'>1000</p>
                </i>
                <h3>kupovina</h3>
            </article>
            <article class="number">
                <i class="fas fa-brain">
                    <p class='numscroller' data-min='1' data-max='1000' data-delay='10000' data-increment='1'>1000</p>
                </i>
                <h3>Ideja</h3>
            </article>
            <article class="number">
                <i class="fas fa-envelope">
                    <p class='numscroller' data-min='1' data-max='1000' data-delay='1000' data-increment='1'>1000</p>
                </i>
                <h3>Poruka</h3>
            </article>
        </section>

        <section id="team">

            <div class="title">
                <div class="title-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="title-text">
                    <h2 class="title-heading">Drugi o nama</h2>
                    <p class="title-subheading">Sta kazu drugi o nama</p>
                </div>
            </div>
            <div id="team-center">
                <article class="team-member">
                    <img src="img/kupci/kupac_1.png" alt="img">
                    <h2>Petar Petrovic</h2>
                    <h5>Inzenjer</h5>
                    <p>Sve pohvale za Vas rad i kreativnost!</p>
                    <div class="team-member-footer">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                </article>
                <article class="team-member">
                    <img src="img/kupci/kupac_2.jpg" alt="img">
                    <h2>Petar Petrovic</h2>
                    <h5>Inzenjer</h5>
                    <p>Sve pohvale za Vas rad i kreativnost!</p>
                    <div class="team-member-footer">
                        <i class="fas fa-heart"></i>
                    </div>
                </article>
                <article class="team-member">
                    <img src="img/kupci/kupac_3.jpg" alt="img">
                    <h2>Petar Petrovic</h2>
                    <h5>Inzenjer</h5>
                    <p>Sve pohvale za Vas rad i kreativnost!</p>
                    <div class="team-member-footer">
                        <i class="fas fa-smile"></i>
                    </div>
                </article>
                <article class="team-member">
                    <img src="img/kupci/kupac_1.png" alt="img">
                    <h2>Petar Petrovic</h2>
                    <h5>Inzenjer</h5>
                    <p>Sve pohvale za Vas rad i kreativnost!</p>
                    <div class="team-member-footer">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                </article>
            </div>

        </section>

        <!--<section class="contact" id=contact>
            <div class="contact-center">
                <article class="contact-info">
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="contact-text">
                            <h3>pronadjite nas</h3>
                            <p>pere perica 149</p>
                            <p>19000</p>
                            <p>Zajecar</p>
                        </div>

                    </div>
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h3>pozovite nas</h3>
                            <p>sasa rancic</p>
                            <p>+381 64 1234567</p>
                            <p>svakim <span>danom od 8h do 23h</span> </p>
                        </div>

                    </div>
                </article>
                <article class="contact-form">
                    <h3>Kontaktirajte nas</h3>
                    <form>
                        <input type="text" id="name" placeholder="ime">
                        <input type="text" id="lastname" placeholder="prezime">
                        <input type="email" id="email" placeholder="email adresa">
                        <textarea name="comments" id="comments" cols="30" rows="10"
                            placeholder="tvoja poruka"></textarea>
                        <button type="submit">Posalji poruku</button>
                    </form>
                </article>


                <iframe class="contact-map"
                    src="https://www.google.com/maps/search/zajecar+knjazevacka/@43.9064918,22.2524619,17z/data=!3m1!4b1"></iframe>


            </div>
        </section>-->

        <section class="section-form" id="contact">
            <div class="row">
                <div class="title">
                    <div class="title-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="title-text">
                        <h2 class="title-heading">Sa radoscu ocekujemo vas email</h2>
                        <p class="title-subheading">U email mozete poslati spisak proizvoda koji zelite</p>
                    </div>
                </div>
            </div>

        <div class="row section-group">

            <div class="map">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, natus.</p>
            </div>

            <div class="form">
                <form method="post" action="mailer.php" class="contact-form">
                        <div class="row">
                            <?php
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-message success\">Hvala. Vasa poruka je poslata!</div>";
                            }
                            if($_GET['success'] == -1) {
                                echo "<div class=\"form-message error\"> Upppss! Molim Vas probajte opet!</div>";
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="name">Ime</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text" name="name" id="name" placeholder="Ime" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="email">Email</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="find-us">Kako ste nas pronasli?</label>
                            </div>
                            <div class="col span-2-of-3">
                                <select name="find-us" id="find-us">
                                    <option value="friends">Prijatelji</option>
                                    <option value="search" selected>Pretragom interneta</option>
                                    <option value="ad">Preko oglasa</option>
                                    <option value="other">Drugo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="news">Obavestenja</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="checkbox" name="news" id="news" checked> Da, molim
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="message">Vasa poruka</label>
                            </div>
                            <div class="col span-2-of-3">
                                <textarea name="message" id="message" cols="30" rows="10"
                                    placeholder="Vasa poruka"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="Posaljite poruku">
                            </div>
                        </div>
                </div>

                </form>

        </div>



        </section>



        <footer>
            <div class="footer-text">
                <h3>Copyright &copy; 2019. Sva prava zadrzana</h3>
            </div>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

        </footer>







        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="iso.js"></script>
        <script src="magnific/jquery.magnific-popup.min.js"></script>
        <script src="script.js"></script>
        <script src="magnific/magnific.js"></script>
        <script src="numscroller-1.0.js"></script>


</body>