<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hero</title>
    <style>
        .hero-block {
            float: left;
            padding-left: 10px;
        }
        .hero-block:first-child {
            padding: 0px;
        }
        a {
            display: block;
            margin-bottom: 20px;
        }
        img {
            height: 150px;
            width: 270px;
        }

    </style>
</head>
<body>

<div id="app">
    <router-view></router-view>

    {{--<app>--}}
        {{--<router-view></router-view>--}}
        {{--<router-link to="/hero"></router-link>--}}
    {{--</app>--}}




    {{--<div>--}}
        {{--<a href="/heroes/create">Add new Hero</a>--}}
    {{--</div>--}}
    {{--@foreach($heroes as $hero)--}}
        {{--<div class="hero-block">--}}
            {{--<img style="height: 150px; width: auto;" src="{{ $hero->images }}">--}}
            {{--<div v-on:click="renderAll">{{ $hero->nickname }}</div>--}}
            {{--<a id="{{ $hero->id }}" href="/heroes/{{ $hero->id }}">Read more</a>--}}
        {{--</div>--}}
    {{--@endforeach--}}
</div>

{{--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>--}}
{{--<script>--}}
    {{--new Vue ({--}}
        {{--el: '#app',--}}
        {{--methods: {--}}
            {{--renderAll: function() {--}}
                {{--alert('I am hear');--}}
            {{--}--}}
        {{--}--}}
    {{--})--}}
{{--</script>--}}
<script src="{{url('js/app.js')}}"></script>
</body>
</html>