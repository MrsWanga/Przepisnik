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
                <h1>Wyniki wyszukiwania</h1>
                <table>
                    <thead>
                    <tr>
                        <th>Trudność</th>
                        <th>Nazwa ciasta</th>
                        <th>Składniki</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if (sizeof($recipes)==null){
                        <p>Brak wyników wyszukiwania</p>
                    }@else{
                    @foreach($recipes as $recipe)

                        <tr>
                            <td>
                                @if($recipe->level==1){
                                    <img src="/Images/1star.png" height="60px"/>
                                }@elseif($recipe->level==2){
                                    <img src="/Images/2stars.png" height="60px"/>
                                }@elseif($recipe->level==3){
                                    <img src="/Images/2stars.png" height="60px"/>
                                }@else{
                                    <p>Błąd przy wyświetlaniu</p>
                            </td>
                                <th>{{ $recipe->name }}</th>
                                <td>{{ $recipe->ingredient }}</td>
                        </tr>

                    @endforeach
                        }
                    </tbody>
                </table>
            </div>
        </div>
        @endsection
    </body>
</html>
