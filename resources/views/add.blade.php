<!DOCTYPE html>
<html lang="pl-PL">
@extends('layouts.app')
    <body>
    @section('content')

        <div id="article">
            <div style="clear: both;"></div>
            <h1>Dodaj przepis</h1>

            <form id="create-recipe-form" method="post" action="{{ route('store') }}">
                @csrf

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
                    <textarea name="igredients" cols="100" rows="25" placeholder="Tu wpisz składniki"></textarea>
                </div>
                <div class="point">
                    <h2>
                        Sposób wykonania:
                    </h2>
                    <textarea name="preparing" cols="100" rows="25" placeholder="Tu wpisz sposób przygotowania"></textarea>
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

                <button type="submit" title="Zapisz" class="btn btn-primary" tabindex="4">
                    Zapisz przepis
                </button>
            </form>
        </div>
    @endsection
    </body>
</html>
