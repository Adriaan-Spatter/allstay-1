<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('components._links')
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-light navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="">All Stay</a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
        </ul>
    </nav>
    @include('components._scripts')
</body>
</html>