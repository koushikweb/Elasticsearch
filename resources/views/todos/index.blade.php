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
<h1>ToDos Page</h1>
<br><br>

@foreach($tasks as $task)
    <p>Name : {{ $task->name }}</p>
    <p>Name : {{ $task->description }}</p>
@endforeach

</body>
</html>
