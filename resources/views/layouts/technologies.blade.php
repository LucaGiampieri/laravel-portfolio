<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Technologies</a>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">

            <h1 class="mb-4 fw-bold">
                @yield('title')
            </h1>

            <div class="card shadow-sm">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>

</body>

</html>