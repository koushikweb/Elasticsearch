<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The HTML5 Herald</title>
    <meta name="description" content="digitalbga about">
    <meta name="todos" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
<h1>Article Listing</h1>
<br><br>
<a href="{{ url('/articleSearch') }}">Article Search >></a>
@foreach($articles as $article)
    <p>title : {{ $article->title }}</p>
    <p>Description : {{ $article->body }}</p>
    <p>Tags : {{ $article->tags }}</p>
    <hr>
@endforeach

</body>
</html>
