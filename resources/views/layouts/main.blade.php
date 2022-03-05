<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/js.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="nav">
            <div>
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.png" alt="Brasil Prensas">
                </a>
            </div>
            <div>
                <h4>@yield('name')</h4>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p class="msg">{{ session('msg') }}</p>
                </div>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    @yield('script')
</body>
</html>
