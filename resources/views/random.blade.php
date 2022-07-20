<!DOCTYPE html>
<html lang="pl-PL">

    <head>
        <meta charset="UTF-8">
        <title>Dodawanie przepisu</title>
        <link rel="stylesheet" href="/css/app.css" type="text/css" />
    </head>

    <body>
        <div id="container">

            <header>
                <div class="picture">
                    <img src="/Images/zdjecie1.jpg" alt="" height="300px" >
                </div>
                <img src="/Images/logo.png" alt="Przepiśnik. Rodzinne receptury" height="300px" width="300px">
                <div class="picture">
                    <img src="/Images/zdjecie.jpg" alt="" height="300px" >
                </div>
            </header>

            <nav>
                <a href="/index">
                    <div class="option">
                        <img src="/Images/home.png" alt="" height="25px">
                        Strona główna
                    </div>
                </a>
                <a href="/add">
                    <div class="option">
                        <img src="/Images/add.png" alt="" height="25px">
                        Dodaj przepis
                    </div>
                </a>
                <a href="/random">
                    <div class="option">
                        <img src="/Images/random.png" alt="" height="25px">
                        Losuj przepis
                    </div>
                </a>
                <a href="/about">
                    <div class="option">
                        <div id="last-option">
                            <img src="/Images/about.png" alt="" height="25px">
                            O przepiśniku
                        </div>
                    </div>
                </a>
            </nav>

            <div id="article">
                <div style="clear: both;"></div>
                <h1>Wylosuj przepis</h1>
                    <h2>
                        Określ, jaki przepis wylosować?
                    </h2>
                <div id="los">
                    <ul>
                        <li>
                            <input type="radio" id="1" name="dif_level" value="1">
                            <label for="1"><img src="/Images/1star.png"/>
                                <p>Prosty</p>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="2" name="dif_level" value="2">
                            <label for="2"><img src="/Images/2stars.png"/>
                                <p>Średnio zaawansowany</p>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="3" name="dif_level" value="3">
                            <label for="3"><img src="/Images/3stars.png"/>
                                <p>Zaawansowany</p>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="4" name="dif_level" value="4">
                            <label for="4"><img src="/Images/all.png"/>
                                <p>Losuj dla wszystkich poziomów</p>
                            </label>
                        </li>
                    </ul>
                </div>
                <a href="/index">
                    <div id="save">
                        <img src="/Images/los.png" alt="" height="50">
                        <h3>Losuj przepis</h3>
                    </div>
                </a>
                <div style="clear: both;"></div>
            </div>

            <footer>
                &copy; Copyright by MrsWanga 2022. Wszelkie prawa zastrzeżone.
            </footer>

        </div>
    </body>
</html>
