</<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Managment System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  //  <link rel="stylesheet" href="/school/main.css">
  //  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@700&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="nav nav-tabs">
        <li><a class="nav-item nav-link" href ="/students"> Studenci </a></li>
        <li><a class="nav-item nav-link" href="/teachers"> Nauczyciele </a></li>
        <li><a class="nav-item nav-link" href="/subjects"> Przedmioty </a></li>
    </ul>
</nav>



<div class="wrapper">
    @yield('header')

    @yield('content')
</div>


<footer class="footer">copyright Monika Gabryś, data: 2021 </footer>
</body>
</html>
