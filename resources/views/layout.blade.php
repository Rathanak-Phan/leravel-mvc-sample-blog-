<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <header class="container-fluid d-flex align-items-center bg-info py-3">
        <div class="container d-flex items-content-center justify-content-between">
            <div>Logo</div>

            <nav>
                <ul class="d-flex gap-5">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('blog') }}">Blog</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </ul>
            </nav>

            <div>
                Account
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
