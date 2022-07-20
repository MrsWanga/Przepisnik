<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Przepiśnik</title>
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
                <h1>Witamy w słodkim świecie!</h1>
                <div class="point">
                    <h2>
                        Wyszukaj przepis według nazwy:
                    </h2>
                    <div id="search">
                            <textarea name="name" cols="20" rows="1" placeholder="Tu podaj nazwę"></textarea>
                            <div class="option">
                                <img src="/Images/search.png" alt="" height="25px">
                                Wyszukaj
                            </div>
                        </div>
                    <div style="clear: both;"></div>
                </div>
                <h2>
                    Wszystkie przepisy:
                </h2>
                <table>
                    <thead>
                        <tr>
                            <th>Trudność</th>
                            <th>Nazwa ciasta</th>
                            <th>Składniki</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="/Images/1star.png" alt="prosty"/></td>
                            <th>Piernik</th>
                            <td>Składniki Składniki Składniki Składniki</td>
                        </tr>
                        <tr>
                            <td><img src="/Images/2stars.png" alt="Średnio zaawansowany"/></td>
                            <th>Pychotka</th>
                            <td>Składniki Składniki Składniki Składniki</td>
                        </tr>
                        <tr>
                            <td><img src="/Images/3stars.png" alt="Zaawansowany"/></td>
                            <th>Sernik</th>
                            <td>Składniki Składniki Składniki Składniki</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <footer>
                &copy; Copyright by MrsWanga 2022. Wszelkie prawa zastrzeżone.
            </footer>

        </div>
    </body>
</html>
