
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

                    @foreach($recipes as $recipe)
                        <tr>
                            <td>{{ $recipe->level }}</td>
                            <th>{{ $recipe->name }}</th>
                            <td>{{ $recipe->ingredient }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endsection
    </body>
</html>
