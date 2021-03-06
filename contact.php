<?php 
if(isset($_POST['submit'])){
    $to = "info@gestricia.se"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company = $_POST['company'];
    $subject = $_POST['dropdown'];
    // $subject = "tjenare!";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . ", som kommer från " . $company . ", behöver hjälp med " . $subject . "." . "\n\nMeddelande:" . $_POST['message'];
    $message2 = "Hej " . $first_name . "! \nHär är en kopia på ditt meddelande du skickade till " . $to . "\n\nNamn: " . $first_name . " " . $last_name . "\nFöretag: " . $company . "\nÄmne: " . $subject . "\nMeddelande: " . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Tack " . $first_name . "! Vi kontaktar dig snarast.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Kontakt</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link href=“https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i%7CPoppins:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i”
        rel=“stylesheet”>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="./img/favicon.png">
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="white">
                <div class="nav-wrapper container"><a id="logo-container" href="./index.html" class="brand-logo">
                        <img width="30px" src="img/gestricia_logo_original-03.svg" alt="Logo Gestricia"></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Tjänster<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="omgestricia.html">Om Gestricia</a></li>
                        <li><a href="contact.php">Kontakt</a></li>
                    </ul>

                    <ul id="dropdown1" class="dropdown-content">
                        <!-- <li><a href="./contact.php">Redovisning</a></li> -->
                        <li><a href="./redovisning.html">Redovisning</a></li>
                        <li><a href="./bokslut.html">Bokslut</a></li>
                        <li><a href="./deklaration.html">Deklaration</a></li>
                        <li><a href="./startup.html">Uppstart</a></li>
                        <li><a href="./loneadministration.html">Löneadministration</a></li>
                        <li><a href="./foretagsradgivning.html">Företagsrådgivning</a></li>
                    </ul>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <ul id="nav-mobile" class="sidenav center-align">
            <div class="nav-item-wrap">
                <li>
                    <h5 class="bold">Tjänster</h5>
                </li>
                <li><a href="./redovisning.html">Redovisning</a></li>

                <li><a href="./bokslut.html">Bokslut</a></li>
                <li><a href="./deklaration.html">Deklaration</a></li>
                <li><a href="./startup.html">Uppstart</a></li>
                <li><a href="./loneadministration.html">Löneadministration</a></li>
                <li><a href="./foretagsradgivning.html">Företagsrådgivning</a></li>
            </div>
            <!-- <li class="divider"></li> -->
            <div class="nav-item-wrap">

                <li>
                    <h5 class="bold">Mer om oss</h5>
                </li>
                <li><a href="omgestricia.html">Om Gestricia</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </div>
        </ul>
    </header>


    <header>
        <div class="hero-section pb-2 gray-bg " id="index-banner">
            <div class="container white-text">
                <br>
                <h4 class="header center white-text">Kontakt</h4>
                <div class="row">
                    <p class="col m10 offset-m1">
                        subst. <strong>~en</strong><br>
                        <span class="thin">
                            ORDLED:
                        </span>e--post-en <br>
                        • system för sändning av meddelanden mellan datoranvändare som både kan skriva och ta emot dem
                        via en dataskärm: ~ används i stället för vanlig post eller telefon och för meddelanden som
                        skall bearbetas av en dator eller läsas av flera personer.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <section class="pb-2 orange-bg white-text">
        <div class="container pb-2 pt-3 ">
            <div class="row">
                <div class="col l6 m6 s12 center-align offset-l3 offset-m3">
                    <p>
                        Du är välkommen att kontakta mig antingen genom kontaktuppgifterna som du hittar nedan, eller
                        via kontaktformuläret.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col l6 m6 s12 offset-l2">
                    <h6>Kontaktuppgifter</h6>
                    <p>Mail: <a href="mailto:tobias@gestricia.se" class="white-text pink-color-hover">tobias@gestricia.se</a></p>
                    <p>Telefon: <a href="phone:0722000241" class="white-text pink-color-hover">+46 (0)72 200 02 41</a></p>
                    <address>
                        <p>Adress: <a class="white-text" target="_blank" href="https://goo.gl/maps/sjVS8ZH3SWx">Västra
                                Vägen 52, 803 24 Gävle</a>
                        </p>
                    </address>
                    <p><a class="white-text" target="_blank" href="https://www.allabolag.se/5591622096/gestricia-redovisning-ab">Organisationsnummer:
                            559162-2096 </a></p>
                </div>
            </div>
            <div class="row">
                <div class="col l6 m6 s12">
                    <img class="contact-icon hide-on-med-and-down" src="img/ikon_multi.png" alt="">
                </div>
                <div class="col l1 flex hide-on-med-and-down">
                    <div class="vl"></div>
                </div>
                <div class="col l5 m12 s12">
                    <div class="row">
                        <div class="col m4 l3 s4 offset-m8 offset-l9 hide-on-med-and-down">

                            <img class="ikon-frimarke" src="img/ikon_frimarke.svg" alt="">
                        </div>
                    </div>

                    <!-- <form action="" method="post">
                        First Name: <input type="text" name="first_name"><br>
                        Last Name: <input type="text" name="last_name"><br>
                        Email: <input type="text" name="email"><br>
                        Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
                        <input type="submit" name="submit" value="Submit">
                    </form> -->



                    <form action="" method="POST">
                        <div class="row">
                            <div class="input-field col s12 ">
                                <input id="first_name_id" type="text" class="validate" name="first_name" required>
                                <label for="first_name_id">Namn</label>
                                <span class="helper-text" data-error="Skulle väldigt gärna vilja veta ditt förnamn!"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 ">
                                <input id="last_name_id" type="text" class="validate" name="last_name" required>
                                <label for="last_name_id">Efternamn</label>
                                <span class="helper-text" data-error="Skulle väldigt gärna vilja veta ditt efternamn!"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="email_inline" type="email" class="validate" name="email" required>
                                    <label for="email_inline">Email</label>
                                    <span class="helper-text" data-error="Denna emailadress är lite suspekt. Testa en annan!"
                                        data-success="Korrekt!"></span>
                                    <span class="helper-text" data-error="Denna emailadress är lite suspekt. Testa en annan!"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="company_id" type="text" class="validate" name="company" required>
                                <label for="company_id">Företag</label>
                                <span class="helper-text" data-error="Skulle väldigt gärna veta vart du jobbar!"></span>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="dropdown">
                                    <option value="" disabled selected>Välj ett ämne</option>
                                    <option value="bokslut">Bokslut</option>
                                    <option value="deklaration">Deklaration</option>
                                    <option value="företagsrådgivning">Företagsrådgivning</option>
                                    <option value="löneadministration">Löneadministration</option>
                                    <option value="redovisning">Redovisning</option>
                                    <option value="startup">Startup</option>
                                    <option value="omdöme">Lämna omdöme</option>
                                    <option value="övrigt">Övrigt</option>
                                </select>
                                <!-- <label>Välj ämne</label> -->
                                <span class="helper-text" data-error="Skulle väldigt gärna veta ditt namn!"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" name="message" required></textarea>
                                <label for="textarea1">Beskriv ditt ärende</label>
                                <span class="helper-text" data-error="Skulle väldigt gärna veta varför du kontaktar mig!"></span>
                            </div>
                        </div>
                        <div class="row center-align">
                            <div class="col l12 m12 s10 offset-s1 ">
                                <input type="submit" name="submit" value="Kontakta mig" class="btn waves-effect waves-light selling-button pink-bg pink-bg-hover"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l4 s12">
                    <h5 class="white-text">Gestricia</h5>
                    <p class="white-text light">Gestricia Redovisning är inriktade på små- och medelstora företag i
                        alla brancher.
                    </p>
                </div>
                <div class="col l2 s12">
                    <h5 class="white-text">Tjänster</h5>
                    <ul class="thin">
                        <li><a class="white-text" href="./redovisning.html">Redovisning</a></li>
                        <li><a class="white-text" href="./bokslut.html">Bokslut</a></li>
                        <li><a class="white-text" href="./deklaration.html">Deklaration</a></li>
                        <li><a class="white-text" href="./startup.html">Uppstart</a></li>
                        <li><a class="white-text" href="./loneadministration.html">Löneadministration</a></li>
                        <li><a class="white-text" href="./foretagsradgivning.html">Företagsrådgivning</a></li>
                    </ul>
                </div>
                <div class="col l2 s12">
                    <h5 class="white-text">Mer om oss</h5>
                    <ul class="thin">
                        <li><a class="white-text" href="./omgestricia.html">Om Gestricia</a></li>
                        <li><a class="white-text" href="./contact.php">Kontakt</a></li>

                    </ul>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Kontakt</h5>
                    <ul class="thin">
                        <li><a class="white-text" href="mailto:tobias@gestricia.se">Tobias@gestricia.se</a></li>
                        <li><a class="white-text" href="phone:12334543">+46 (0)72 200 02 41</a></li>
                        <li><a class="white-text" target="_blank" href="https://goo.gl/maps/sjVS8ZH3SWx">Västra Vägen
                                52, 803 24 Gävle</a></li>
                        <li><a class="white-text" target="_blank" href="https://www.allabolag.se/5591622096/gestricia-redovisning-ab">Organisationsnummer:
                                559162-2096 </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center-align">
                <a href="./index.html" class="orange-text text-lighten-3"> &copy; Tobias</a>
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>

</html>