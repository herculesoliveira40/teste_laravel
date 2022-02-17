<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>
    <!-- <link rel="stylesheet" href="/css/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/img/deadpool-logo.png" sizes="42x42" type="image/png">
</head>

<body class="antialiased">

<nav class="navbar navbar-light bg-dark justify-content-between">
              
    <a class="nav-link" href="/">
    <img src="/img/deadpool-logo.png" alt="" height="60px" width="120px" class="d-inline-block align-text-top">
        Home
    </a>
    
        <a class="nav-link " aria-current="page" href="/produtos">Produtos</a>
        <a class="nav-link " aria-current="page" href="/contato">Contato</a>
        <a class="nav-link " aria-current="page" href="/sobre">Sobre</a>
               
            
           </nav>
@yield('content')   
<footer class="text-center bg-danger text-light">
    <p> "como sabemos se queremos alguma coisa ou se foi nossa criação programou para querer" </p>
        <p>  2022 <a href="https://github.com/herculesoliveira40" target="_blank"> Shelby  &copy;</a> </strong> </p>
</footer>
</body>

</html>