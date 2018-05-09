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
        input, button, a {
            margin-top:10px;
        }
    </style>
</head>

<body>

<form action="/heroes" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>Nickname:</label>
    <input name="nickname" id="nickname"><br>

    <label>RealName:</label>
    <input name="real_name" id="real_name"><br>

    <label>Origin description:</label>
    <input name="origin_description" id="origin_desctiption"><br>

    <label>Superpowers:</label>
    <input name="superpowers" id="superpowers"><br>

    <label>Catch phrase:</label>
    <input name="catch_phrase" id="catch_phrase"><br>

    <label>URL image:</label>
    <input name="images" id="image"><br>

    <button id="addHero" type="submit">Add person</button>

</form>

<div id="result"></div>
<a href="/">Back to all</a>
