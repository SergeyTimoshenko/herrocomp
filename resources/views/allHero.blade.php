<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    </style>
</head>
<body>

<div>
    <a href="/heroes/create">Add new Hero</a>
</div>
@foreach($heroes as $hero)
    <div class="hero-block">
        <img style="height: 150px; width: auto;" src="{{ $hero->images }}">
        <div>{{ $hero->nickname }}</div>
        <a id="{{ $hero->id }}" href="/heroes/{{ $hero->id }}">Read more</a>
    </div>
@endforeach

</body>
</html>