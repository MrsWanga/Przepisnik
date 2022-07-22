<?php
use App\Models\Recipe;
?>

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
                        <form id="search-recipe-form" method="get" action="{{ route('search') }}">
                            <textarea name="name" cols="20" rows="1" placeholder="Tu podaj nazwę"></textarea>
                                <button type="submit" title="Wyszukaj">
                                    Wyszukaj
                                </button>
                        </form>

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
                        <th colspan="2">Akcja</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($recipes as $recipe)
                        <tr>
                            <td>
                                @if($recipe->level==1)
                                <img src="/Images/1star.png" height="60px"/>
                                @elseif($recipe->level==2)
                                <img src="/Images/2stars.png" height="60px"/>
                                @elseif($recipe->level==3){
                                <img src="/Images/2stars.png" height="60px"/>
                                @else
                                <p>Błąd przy wyświetlaniu</p>
                                @endif
                            </td>
                            <th>{{ $recipe->name }}</th>
                            <td>{{ $recipe->ingredient }}</td>
                            <td>
                                <a type="button" style="margin-right: 5px; color: #0D0D0D" title="Zobacz przepis" href="{{ route('show' ,$recipe->id) }}">
                                    <b>Zobacz przepis</b>
                                </a>
                            </td>
                            <td>
                                <a type="button" style="margin-right: 5px; color: darkred" title="Zobacz przepis" href="{{ route('destroy' ,$recipe->id) }}">
                                    <b>Usuń przepis</b>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endsection
    </body>
</html>
