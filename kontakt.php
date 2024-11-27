<!-- 2 BLOKI 
 DANE KONTAKTOWE I FORMULARZ KONTAKTOWY -->

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Profesjonalna firma wykończeniowa oferująca usługi remontowe, aranżacje wnętrz i więcej.">
    <title>Kogucik Firma Wykończeniowa - Remonty i Wykończenia Wnętrz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dbbe685d22.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="logo">
            <a href="index.php"><img src="zdjecia/logo.png" alt="Logo naszej firmy"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">O nas</a></li>
                <li><a href="uslugi.php">Oferta</a></li>
                <li><a href="realizacje.php">Wykończenie wnętrz</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>

                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            </ul>
        </nav>
    </header>

    <main>

        <section id="kontakt">

            <div class="kontakt-row">

                <div class="danekontaktowe">
                    <h1>Dane kontaktowe</h1><br>
                    <hr>
                    <ul>
                        <ol>
                            <span class="icon"> 
                                <i class="fa fa-map-marker"> </i>
                            </span>
                            <span class="text">
                                ul. Kolbuszowska 187, 36-100 Kolbuszowa
                            </span>
                        </ol>

                        <ol>
                            <span class="icon"> 
                                <i class="fa fa-phone"> </i>
                            </span>
                            <span class="text">
                                + 48 123 456 789
                            </span>
                        </ol>

                        <ol>
                            <span class="icon"> 
                                <i class="fa fa-envelope-open"> </i>
                            </span>
                            <span class="text">
                                kogucik@gmail.com lub www.kogucik.pl
                            </span>
                        </ol>
                        <ol>
                            <span class="icon"> 
                                <i class="fa fa-cog"> </i>
                            </span>
                            <span class="text">
                                NIP: 9321174187
                            </span>
                        </ol>
                        <ol>
                            <span class="icon"> 
                                <i class="fa fa-cogs"> </i>
                            </span>
                            <span class="text">
                                Regon: 361877501
                            </span>
                        </ol>

                    </ul>

                </div>

                <div class="formularzkontaktowy">
                    <h1>Formularz kontaktowy</h1><br>
                    <hr>
                    <form action="kontakt.php" method="post"><br>
                        <input type="text" name="imie" id="" placeholder="Imię"><br>
                        <input type="text" name="nazwisko" id="" placeholder="Nazwisko"><br>
                        <input type="email" name="email" id="" placeholder="E-mail"><br>
                        <input type="number" name="telefon" id="" placeholder="Telefon *"><br>
                        <p>Odezwiemy się do Ciebie w ciągu 24h !</p>
                        <input type="submit" value="WYŚLIJ">

                        <!-- PHP FORMULARZ WYSYŁAJĄCY DANE DO BAZY -->

                    </form>

                </div>
            </div>

        </section>

    </main>

    <footer>
        <section id="stopka">

            <div class="stopka2">
                <img src="zdjecia/logo.png" alt="logo firmy"><br>
            </div>

            <div class="stopka2">
                <h2>Kontakt</h2>
                <address>
                    <p>Firma Wykończeniowa Kogucik</p>
                    <p>ul. Kolbuszowska 187, 36-100 Kolbuszowa</p>
                    <p>Email: kogucik@gmail.com</p>
                    <p>Telefon: +48 123 456 789</p>
                </address>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            </div>

        </section>

        <p>&copy; 2024 Firma Wykończeniowa Kogucik. Wszelkie prawa zastrzeżone.</p>
    </footer>

</body>

</html>