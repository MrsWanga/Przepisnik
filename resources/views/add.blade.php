<!DOCTYPE html>
<html lang="pl-PL">
@extends('layouts.app')
    <body>
    @section('content')

        <div id="article">
            <div style="clear: both;"></div>
            <h1>Dodaj przepis</h1>
            <div class="point">
                <h2>
                    Nazwa przepisu:
                </h2>
                <textarea name="name" cols="20" rows="1" placeholder="Tu podaj nazwę"></textarea>
            </div>
            <div class="point">
                <h2>
                    Składniki:
                </h2>
                <form action="...">
                    <textarea name="igredients" cols="100" rows="25" placeholder="Tu wpisz składniki"></textarea>
                </form>
            </div>
            <div class="point">
                <h2>
                    Sposób wykonania:
                </h2>
                <form action="...">
                    <textarea name="preparing" cols="100" rows="25" placeholder="Tu wpisz sposób przygotowania"></textarea>
                </form>
            </div>
            <div class="point">
                <h2>
                    Poziom trudności:
                </h2>
                <ul>
                    <li>
                        <input type="radio" id="1" name="dif_level" value="1">
                        <label for="1"><img src="/Images/1star.png" height="60px"/>
                            <p>Prosty</p>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="2" name="dif_level" value="2">
                        <label for="2"><img src="/Images/2stars.png" height="50px"/>
                            <p>Średnio zaawansowany</p>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="3" name="dif_level" value="3">
                        <label for="3"><img src="/Images/3stars.png" height="50px"/>
                            <p>Zaawansowany</p>
                        </label>
                    </li>
                </ul>
                <div style="clear: both;"></div>
            </div>
            <a href="/index">
                <div id="save">
                    <img src="/Images/save.png" alt="" height="50">
                    <h3>Zapisz przepis</h3>
                </div>
            </a>
        </div>
    @endsection
    </body>
</html>
