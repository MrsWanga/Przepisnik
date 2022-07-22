<!DOCTYPE html>
<html lang="pl-PL">
@extends('layouts.app')
<body>
@section('content')

    <div id="article">
        <div style="clear: both;"></div>
        <h1>{{$recipe->name}}</h1>



            <div class="point">
                <h2>
                    Składniki:
                </h2>
                <p>
                    {{$recipe->ingredient}}
                </p>
                <h2>
                    Przygotowanie:
                </h2>
                <p>
                    {{$recipe->preparing}}
                </p>
            </div>

{{--            <div class="point">--}}
{{--                <h2>--}}
{{--                    Składniki:--}}
{{--                </h2>--}}
{{--                <p>--}}
{{--                    {{$recipe->Recipe::ingredients}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="point">--}}
{{--                <h2>--}}
{{--                    Sposób wykonania:--}}
{{--                </h2>--}}
{{--                <p>--}}
{{--                    {{$recipe->Recipe::preparing}}--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="point">--}}
{{--                <h2>--}}
{{--                    Poziom trudności:--}}
{{--                </h2>--}}
{{--                <p>--}}
{{--                    {{$recipe->Recipe::level}}--}}
{{--                </p>--}}
{{--                <div style="clear: both;"></div>--}}
{{--            </div>--}}

    </div>
@endsection
</body>
</html>
