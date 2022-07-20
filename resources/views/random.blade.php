<!DOCTYPE html>
<html lang="pl-PL">
@extends('layouts.app')
  <body>
  @section('content')
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
  @endsection
    </body>
</html>
