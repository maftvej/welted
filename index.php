<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img/w.png">
    <title>WELTED</title>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

    <!--FONTY-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <!--STYLES-->
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/smoothscroll-polyfill/dist/smoothscroll.min.js"></script>
    <script src="https://unpkg.com/smoothscroll-anchor-polyfill"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143794090-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-143794090-1');
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>


</head>

<body>
    <nav class="fixed-top">
        <ul>
            <li class="pdr"><a href="#home">DOMOV</a></li>
            <li class="pdl pdr"><a href="#product">PRODUKT</a></li>
            <li class="pdl"><a href="#order">NAPÍŠ MI</a></li>
        </ul>
    </nav>

    <main id="home">

        <!---------------INTRO NA DESKTOP--------------->
        <section class="intro desktop">
            <img class="logo" src="/img/logo.svg" alt="logo">

            <img class="hero-desktop" src="/img/bra_hero-done.jpg" alt="hero">
        </section>

        <!----------------RESPONZIVNE INTRO---------------->
        <section class="intro-mobile">
            <img class="mobile-logo" src="/img/logo.svg" alt="">
            <h3><a href="#product">SCROLL</a></h3>
        </section>

        <!--------------PRODUKT PAGES-------------->
        <div id="product"></div>
        <section class="first">
            <img src="/img/first-done.jpg" alt="first_hero">
            <p><b>Zložená zo zamatu a ľahkej krajky.</b> Vďaka výberu kvalitných materiálov je bralettka príjemná na
                nosenie.
                Netypická kombinácia materiálu obzvláštni aj tvoj bežný outfit. Nemusíš si vyberať medzi komfortom a
                dobrým výzorom.
            </p>
        </section>
        <section class="second">
            <img src="/img/fifth-done.jpg" alt="second">
            <p><b>Bez kostíc.</b> Mäkké košíčky, ktoré sa ľahko prispôsobujú a prirodzene podržia dekolt. Braletty bez
                kostíc môžu mať mnoho tvarov a strihov. Taktiež sú prospešné pre zdravie a telo.
            </p>
        </section>
        <section class="first">
            <img src="/img/second-done.jpg" alt="first_hero">
            <p><b>Ručná výroba na mieru. </b> Každý z kúskov je šitý ručne, takže má aj originálny vzhľad.
                Vďaka rozmanitej škále štýlov a strihov bude bralettka podľa vlastného návrhu len v tvojom šatníku.
            </p>
        </section>
        <section class="second">
            <img src="/img/fourth-done.jpg" alt="second">
            <p><b>Vyzerá dobre.</b> Je ľahko kombinovateľná s inými kúskami oblečenia. Dá sa nosiť v lete pod vzdušné
                tielko, pod blúzku s výstrihom, ako top, alebo aj v zime pod pletený sveter.
            </p>
        </section>
        <section class="first">
            <img src="/img/third-done.jpg" alt="first_hero">
            <p><b>Lepšia ako bežná podprsenka.</b> Bežné podprsenky zovierajú hrudník, a ich každodenné nosenie môže
                spôsobiť zdravotné problémy. Bralettky sú prirodzenejšia náhrada. Sú pohodlnejšie na
                nosenie.
            </p>
        </section>

        <!------------ORDER PAGE------------->
        <section class="order" id="order">
            <h3><a href="https://instagram.com/welted_?igshid=1f30465u73nke">INSTAGRAM</a></h3>
            <div class="split">
                <div class="line"></div>
                <h4>ALEBO</h4>
                <div class="line"></div>
            </div>
            <h3 class="btn-email"><a href="#email">E-MAIL</a></h3>
        </section>
        <div id="vertical">
            <section class="email" id="email">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        </div>
                    </div>

                    <!------------------------------------------EMAIL FORM----------------------------------------->
                    <div class="row formicka">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3" id="form">
                            <form id="contact-form" class="form" action="send.php" method="POST" role="form">
                                <div class="form-group">
                                    <h3>Napíš mi</h3>
                                    <select name="subject" class="mdb-select md-form" id="subject" required>
                                        <option value="" disabled selected>Vyber si: Objednávka/Otázka</option>
                                        <option value="Objednávka">Objednávka</option>
                                        <option value="Otázka">Otázka</option>
                                    </select>
                                    <select name="budget" id="budget">
                                        <option value="" disabled selected>Vyber si budget:</option>
                                        <option value="Neviem">Neviem</option>
                                        <option value="15 eur">15€</option>
                                        <option value="20 eur">20€</option>
                                        <option value="30 eur">30€</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="name" required>Meno</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Meno"
                                        tabindex="1" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input required type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" tabindex="2" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="message">Správa...</label>
                                    <textarea required rows="5" cols="50" name="message" class="form-control"
                                        id="message" placeholder="Správa..." tabindex="4" required></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LekbLYUAAAAAMTjE9dPOJPU0CHRvwYkQQZNgu74"></div>
                                <div class="text-center">
                                    <button type="submit" class=" text-center btn btn-start-order">poslať</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>        
    </main>
</body>

</html>