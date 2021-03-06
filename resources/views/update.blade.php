<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello</title>
    <style>
        a {
            display: block;
        }
        input {
            width: 800px;
        }
        input, button, a {
            margin-top:10px;
        }
    </style>
</head>

<body>
<form method="POST" action="/heroes/{{ $hero->id }}">
  @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>Nickname:</label>
    <input name="nickname" id="nickname"><br>

    <label>RealName:</label>
    <input name="real_name" id="real_name"><br>

    <label>Origin description:</label>
    <input name="origin_description" id="origin_description"><br>

    <label>Superpowers:</label>
    <input name="superpowers" id="superpowers"><br>

    <label>Catch phrase:</label>
    <input name="catch_phrase" id="catch_phrase"><br>

    <label>URL image:</label>
    <input name="images" id="images"><br>

    <button id="addHero" type="submit">Update</button>
</form>


<div id="result"></div>

<a href="/heroes">Back to all</a>


<script>

    var nickname = document.getElementById('nickname');
    var real_name = document.getElementById('real_name');
    var origin_desctiption = document.getElementById('origin_description');
    var superpowers = document.getElementById('superpowers');
    var catch_phrase = document.getElementById('catch_phrase');
    var image = document.getElementById('images');

    nickname.value = '{{ $hero->nickname }}';
    real_name.value = '{{ $hero->real_name }}';
    origin_desctiption.value = '{{ $hero->origin_description }}';
    superpowers.value = '{{ $hero->superpowers }}';
    catch_phrase.value = '{{ $hero->catch_phrase }}';
    image.value = '{{ $hero->images }}';

    {{--function updateHero() {--}}



        {{--var req = new XMLHttpRequest();--}}
        {{--var params = 'nickname=' + nickname.value + '&' +--}}
            {{--'&real_name=' + real_name.value + '&' +--}}
            {{--'&origin_desctiption=' + origin_desctiption.value + '&' +--}}
            {{--'&superpowers=' + superpowers.value + '&' +--}}
            {{--'&catch_phrase=' + catch_phrase.value + '&' +--}}
            {{--'&image=' + image.value + '&id={{ $hero->id }}';--}}

        {{--req.open("GET", '/updatehero?' + params, true);--}}

        {{--req.onreadystatechange = function() {--}}
            {{--if (req.readyState === 4) {--}}
                {{--alert(params);--}}
                {{--var result = document.getElementById('result');--}}
                {{--result.innerHTML = req.responseText;--}}
            {{--}--}}
        {{--};--}}

        {{--req.send();--}}
    {{--}--}}
</script>
</body>
</html>