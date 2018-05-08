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
    <a href="/add">Add new Hero</a>
</div>
@for($i = 0; $i < count($heros); $i++)
    <div class="hero-block">
        <img style="height: 150px; width: auto;" src="{{ $heros[$i]->images }}">
        <div>{{ $heros[$i]->nickname }}</div>
        <a id="{{ $heros[$i]->id }}" href="/hero/{{ $heros[$i]->id }}">Read more</a>
    </div>
@endfor

<script>
//    var req = new XMLHttpRequest();
//    req.open("GET", '/all/show', true);
//
//    req.onreadystatechange = function() {
//        if (req.readyState === 4) {
//            alert('Send!');
//
//            document.body.innerHTML = req.responseText;
//        }
//    };

   // req.send();
</script>
</body>
</html>