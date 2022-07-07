<nav class="navbar bg-light navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="">All Stay</a>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('readModule') }}">Module Manager</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Search</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Notifications</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Expand</a>
        </li>
        <li class="nav-item">
            <form method="POST" action="">
                @csrf
                <button class="btn btn-link" style="text-decoration: none" type="submit">Logout</button>
            </form>
        </li>
    </ul>
</nav>