<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sale Baloni, Sale Dekoracija, Dekoracija, Baloni, Slavlja">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ivan Todorovic">
    <title>SaleBaloni</title>
    <script src="https://kit.fontawesome.com/06b0f55414.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="7.1 Grid.css">
    <!--<link rel  = "stylesheet" href = "https://icons8.com/icon/stEibDUxUgR1/party-balloons">-->
    <link rel="icon" type="image/png" href="https://img.icons8.com/officel/80/000000/party-baloons.png" />
    <link rel="stylesheet" href="magnific/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">



</head>

<body>
    <header>
        <nav id="nav">
            <div class="nav-logo">
                <img src="img/Logo_2.png" alt="logo" width="145px" height="85px">
                <i class="fas fa-bars" id="toggle-btn"></i>
            </div>
            <ul class="nav-links">
                <li><a href="#banner" id="nav-links-i">Pocetna</a></li>
                <li><a href="#current" id="nav-links-ii">ideje</a></li>
                <li><a href="#about" id="nav-links-iii">O nama</a></li>
                <li><a href="#work" id="nav-links-iv">proizvodi</a></li>
                <li><a href="#team" id="nav-links-v">Drugi o nama</a></li>
                <li><a href="#contact" id="nav-links-vi">Kontakt</a></li>
                <li class="nav-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </nav>
        <div id="banner">
            <div class="banner-text">
                <h1>sa<span id="le">le</span> <span id="ba">ba</span><span id="lo">lo</span><span id="ni">ni</span></h1>
                <div class="banner-line"></div>
                <h3>prodaja balona <span>i</span> dekoracija veselja</h3>
                <a href="#current">ideje</a>
                <a href="#work">istrazi</a>
            </div>
        </div>
    </header>

    <section id="icon-section">
        <a href="#banner"><i class="fas fa-home"></i></a>
        <a href="#work"><i class="fas fa-palette"></i></a>
        <a href="#about"><i class="fas fa-splotch"></i></a>
        <a href="#current"><i class="fas fa-baby"></i></a>
    </section>

    <section id="work">
        <div class="title">
            <div class="title-icon">
                <i class="fas fa-cogs  "></i>
            </div>
            <div class="title-text">
                <h2 class="title-heading">Nasa ponuda</h2>
                <p class="title-subheading">kontaktirajte nas lako cemo se dogovoriti</p>

            </div>
        </div>

        <button class="btn-back dataLoaderNone" data-filter="fbro"><i class="fas fa-arrow-circle-left"></i></button>
        <div class="work-center">

            <div class="button-container">
                <div class="button-group filter-button-group">
                    <!--<button  class = "srt-btn" data-filter = "*">sve</button>-->
                    <button class="srt-btn" data-filter="fbro">Folija brojevi 40"</button>
                    <button class="srt-btn" data-filter="fobli">street folija 14" i 28"</button>
                    <button class="srt-btn" data-filter="hrom">hrom baloni</button>
                    <button class="srt-btn" data-filter="lmetali">lateks metalik 5",10",12" i 19"</button>
                    <button class="srt-btn" data-filter="zfoli">zvezda folija 18"</button>
                    <button class="srt-btn" data-filter="stamp">stampani baloni</button>
                    <button class="srt-btn" data-filter="srfoli">street srca folija 18"</button>
                    <button class="srt-btn" data-filter="sfoli">srca folija 18"</button>
                    <button class="srt-btn" data-filter="lpastel">lateks pastelni 5",10",12" i 19"</button>
                    <button class="srt-btn" data-filter="access">dodatna oprema</button>
                    <button class="srt-btn" data-filter="dekor">dekoracije</button>
                    <button class="srt-btn" data-filter="stam">stampa</button>
                </div>
            </div>
            <h1 class="dataLoader" data-text="Izaberite zeljenu grupu...">Izaberite zeljenu grupu...</h1>
            <div class="picture-container">

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
        <div class="typewriter">
            <h1>Nase iskustvo i zelja za daljim usavrsavanjem stavljaju nas ispred svih u pogledu robe i usluga....</h1>
        </div>
    </section>

    <section id="current">
        <div class="title">
            <div class="title-icon">
                <i class="fas fa-image"></i>
            </div>
            <div class="title-text">
                <h2 class="title-heading">Ideje</h2>
                <p class="title-subheading">U dogovoru sa vama svaka dekoracija je moguca</p>
            </div>
        </div>

        <div id="current-center">
            <artile class="current-item">
                <a href="img/projecat/Dekoracija_16_.jpg">
                    <img src="img/projecat/Dekoracija_16_.jpg" alt="current"></a>
            </artile>
            <artile class="current-item">
                <a href="img/projecat/Dekoracija_17_.jpg">
                    <img src="img/projecat/Dekoracija_17_.jpg" alt="current"></a>
            </artile>
            <artile class="current-item">
                <a href="img/projecat/Dekoracija_18_.jpg">
                    <img src="img/projecat/Dekoracija_18_.jpg" alt="current"></a>
            </artile>
            <artile class="current-item">
                <a href="img/projecat/Dekoracija_19_.jpg">
                    <img src="img/projecat/Dekoracija_19_.jpg" alt="current"></a>
            </artile>
            <artile class="current-item">
                <a href="img/projecat/Dekoracija_20_.jpg">
                    <img src="img/projecat/Dekoracija_20_.jpg" alt="current"></a>
            </artile>
            <artile class="current-item">
                <a href="img/projecat/Dekoracija_21_.jpg">
                    <img src="img/projecat/Dekoracija_21_.jpg" alt="current"></a>
            </artile>
            <artile class="current-item">
                <a href="img/projecat/Dekoracija_22_.jpg">
                    <img src="img/projecat/Dekoracija_22_.jpg" alt="current"></a>
            </artile>
            <artile class="current-item">
                <a href="img/projecat/Dekoracija_23_.jpg">
                    <img src="img/projecat/Dekoracija_23_.jpg" alt="current"></a>
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
                <img src="img/kupci/person_1.jpg" alt="img">
                <h2>Petar Zivic</h2>
                <h5>Inzenjer</h5>
                <p>Sve pohvale za Vas rad!</p>
                <div class="team-member-footer">
                    <i class="fas fa-thumbs-up"></i>
                </div>
            </article>
            <article class="team-member">
                <img src="img/kupci/persona_1.jpg" alt="img">
                <h2>Milica Aleksic</h2>
                <h5>Ekonomista</h5>
                <p>Brzi i efikasni!</p>
                <div class="team-member-footer">
                    <i class="fas fa-heart"></i>
                </div>
            </article>
            <article class="team-member">
                <img src="img/kupci/persona_2.jpg" alt="img">
                <h2>Marija Maric</h2>
                <h5>Knjigovodja</h5>
                <p>Kooperativni!</p>
                <div class="team-member-footer">
                    <i class="fas fa-smile"></i>
                </div>
            </article>
            <article class="team-member">
                <img src="img/kupci/person_2.jpg" alt="img">
                <h2>Milos Nikolic</h2>
                <h5>Frizer</h5>
                <p>Hvala!</p>
                <div class="team-member-footer">
                    <i class="fas fa-thumbs-up"></i>
                </div>
            </article>
        </div>
    </section>

    <section class="section-form" id="contact">
        <div class="row">
            <div class="title">
                <div class="title-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="title-text">
                    <h2 class="title-heading">Sa radoscu ocekujemo vas email</h2>
                    <p class="title-subheading">Email-om mozete poslati spisak proizvoda koji zelite</p>
                </div>
            </div>
        </div>

        <div class="section-group">
            <div class="contact-member">
                <img src="img/Logo_2.png" alt="contact-image" class="contact-image">
            </div>
            <div class="form" id="form">
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">

                        <?php 
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-message success\">Hvala. Vasa poruka je poslata!</div>";
                            };
                            if($_GET['success'] == -1) {
                                echo "<div class=\"form-message error\"> Upppss! Molim Vas probajte opet!</div>";
                            }; ?>

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
                        <div class="col span-1-of-3 form-attach">
                            <input type="checkbox" name="news" id="news" checked>Da, molim
                            <input type="file" name="file" accept="application/pdf">
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="message">Vasa poruka</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" id="message" cols="30" rows placeholder="Vasa poruka"></textarea>
                        </div>                                                
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="form-button">
                            <input type="submit" value="Posaljite poruku">
                            <a href="uploads/Porudzbina.pdf" download>Primer porudzbine</a>
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
        <div class="footer-number">
            <h1>06<span id="le">53</span> <span id="ba">41</span><span id="lo">58</span> <span id="ni">98</span></h1>
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
    <script src="https://cdn.jsdelivr.net/npm/contentful@latest/dist/contentful.browser.min.js"></script>
    <script src="script.js"></script>
    <script src="main.js"></script>
    <script src="magnific/magnific.js"></script>
    <script src="numscroller-1.0.js"></script>

</body>

</html>