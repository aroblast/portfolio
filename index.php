<!DOCTYPE html5>

<html>
    <head>
        <title>Bastien LE CORRE</title>

        <meta charset="UTF-8">
        <meta name="description" content="Bastien LE CORRE's portfolio.">
        <meta name="keywords" content="Portfolio, Bastien, LE CORRE, web developer">
        <meta name="author" content="Bastien LE CORRE">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header>
            <link rel="stylesheet" href="style/main.css" type="text/css"/>
            <link rel="stylesheet" href="style/colors.css" type="text/css"/>

            <link rel="stylesheet" href="style/librairies/animate.css" type="text/css"/>
        </header>

        <div class="hero">
            <div class="background"></div>
            <div class="header">
                <div class="dark2">I'm Bastien LE CORRE,</div>
                <div class="dark3">designer, developer.</div>
            </div>

            <img class="scrollDown" src="style/gifs/scroll.gif"/>
        </div>

        <div class="panels">
            <div class="panel portfolio">
                <div class="content">
                    <div class="project srProject">
                        <div class="pictures two">
                            <div style="background-image: url('style/imgs/chronocross1.png')"></div>
                            <div style="background-image: url('style/imgs/chronocross2.png')"></div>
                        </div>
                        <div class="label">Chronocross (2018)</div>
                    </div>
                    <div class="project srProject">
                        <div class="pictures">
                            <div style="background-image: url('style/imgs/calendar1.png')"></div>
                            <div style="background-image: url('style/imgs/calendar2.png')"></div>
                            <div style="background-image: url('style/imgs/calendar3.png')"></div>
                        </div>
                        <div class="label">Calendar for French Teachers (2018)</div>
                    </div>
                    <div class="project srProject">
                        <div class="pictures one">
                            <div style="background-image: url('style/imgs/mfnu1.png')"></div>
                        </div>
                        <div class="label">MFNU Manager (2018)</div>
                    </div>
                    <div class="project srProject">
                        <div class="pictures four">
                            <div style="background-image: url('style/imgs/tpe1.png')"></div>
                            <div style="background-image: url('style/imgs/tpe2.png')"></div>
                            <div style="background-image: url('style/imgs/tpe3.png'); z-index: 1"></div>
                            <div style="background-image: url('style/imgs/tpe4.png'); z-index: 0"></div>
                        </div>
                        <div class="label">Travaux Pratiques Encadrés (2018)</div>
                    </div>
                    <div class="project srProject">
                        <div class="pictures">
                            <div style="background-image: url('style/imgs/zicanouic1.png')"></div>
                            <div style="background-image: url('style/imgs/zicanouic2.png')"></div>
                            <div style="background-image: url('style/imgs/zicanouic3.png')"></div>
                        </div>
                        <div class="label">Zicanouic (2016)</div>
                    </div>
                </div>
            </div>
            <div class="panel about">
                <div class="content map">
                    <div class="title">About me</div>
                </div>
            </div>
            <div class="panel experience">
                <div class="horizontalContainer">
                    <div class="rowItem two srRowNumber">
                        <div class="number"><?php echo (date('Y', strtotime('today')) - 2013); ?></div>
                        <div class="title">Years of Experience</div>
                    </div>
                    <div class="rowItem two srRowNumber">
                        <div class="number">5</div>
                        <div class="title">Main Programming Languages</div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="title">Skills and Knowledge</div>
                <div class="content little">
                    <div class="column two srColumn">
                        <div class="skill">
                            <div class="title"><b>Web Designer/</b></br> 80%</div>
                            <div class="progressbar">
                                <div style="width: 80%"></div>
                            </div>
                            <div class="items">
                                <div class="item">Clean Styles</div>
                                <div class="item">UI/UX Designer</div>
                                <div class="item">Professional Looking Websites</div>
                                <div class="item">Photoshop, Sketch, Adobe XD</div>
                            </div>
                        </div>
                    </div>
                    <div class="column two srColumn">
                        <div class="skill">
                            <div class="title"><b>Web Programmer/</b></br> 85%</div>
                            <div class="progressbar">
                                <div class="" style="width: 85%"></div>
                            </div>
                            <div class="items">
                                <div class="item">Clean Code</div>
                                <div class="item">Multiple Back-End Languages</div>
                                <div class="item">CSS Responsive</div>
                                <div class="item">Server Knowledge</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="title">Contact Me</div>
                <div class="content little">
                    <div class="column little">
                        <a href="mailto:bastien.lecorre@gmail.com" target="_blank"><div class="text label"><img src="style/icons/envelope.svg"/>bastien.lecorre@gmail.com</div></a>
                        <div class="text label"><img src="style/icons/phone-call.svg"/>+46 70 761 77 17</div>
                        <a href="https://www.instagram.com/aroblast" target="_blank"><div class="text label"><img src="style/icons/instagram.svg"/>@aroblast</div></a>
                        <a href="https://github.com/aroblast" target="_blank"><div class="text label"><img src="style/icons/github.svg"/>@aroblast</div></a>
                    </div>
                </div>
            </div>
            <div id="map"></div>
            <div class="panel dark">
                <div class="column">
                    <div class="text center">© Bastien LE CORRE - Stockholm, Sweden</div>
                    <div class="text center light">All the icons are made by Freepik or Gregor Cresnar, downloaded from <a href="https://www.flaticon.com" href="_blank">FlatIcon</a>.</div>
                </div>
            </div>
        </div>

        <footer>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                    crossorigin="anonymous"></script>
            <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
            <script type="text/javascript" src="js/main.js"></script>
        </footer>
    </body>
</html>
