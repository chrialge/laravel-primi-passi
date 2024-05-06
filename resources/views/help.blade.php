<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap Framework/libreria -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="antialiased">

    <!-- site Header -->
    <header id="site_header" class="bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark navbar-primary">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">

                        @foreach($data as $page)
                        <a class="nav-item nav-link" href="{{ strtolower($page)}}">{{$page}}</a>
                        @endforeach
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- site Main -->
    <main id="site_main">
        <div class="container">
            <h1>
                Welcome in Help
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit expedita officia veniam ratione provident! Pariatur minus distinctio hic provident maxime sunt aliquam, voluptate dolor obcaecati cum vel magnam libero deserunt consequuntur consequatur, nihil amet incidunt tempora natus cupiditate quod ut recusandae! Fugiat quas sapiente temporibus exercitationem pariatur assumenda tempora optio.
            </p>
        </div>
    </main>
    <!-- /#site_main -->





</body>

</html>