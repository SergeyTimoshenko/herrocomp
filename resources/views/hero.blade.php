<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hero</title>
    <style>

    </style>
</head>
<body>


        <img style="height: 300px; width: auto; margin: 0 auto;" src="{{ $hero->images }}">
        <div>Name: {{ $hero->nickname }}</div>
        <div>Real name: {{ $hero->real_name }}</div>
        <div>Description: {{ $hero->origin_description }}</div>
        <div>Superpowers: {{ $hero->superpowers }}</div>
        <div>He say: {{ $hero->catch_phrase }}</div>
        <a href="/update/{{ $hero->id }}">Update</a>
        <a id="" href="/heroes">Back to all</a>
        <form method="DELETE" action="/heroes/{{ $hero->id }}">

            @method('DELETE')
            <button id="" type="submit">Delete</button>
        </form>




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