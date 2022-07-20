<!DOCTYPE html>
<html lang="pl-PL">
@extends('layouts.app')
    <body>
        @section('content')
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
        </div>
        @endsection
    </body>
</html>
