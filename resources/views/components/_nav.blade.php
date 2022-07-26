<nav class="navbar bg-warning navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="">All Stay</a>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-link" style="text-decoration: none" type="submit">Logout</button>
            </form>
        </li>
    </ul>
</nav>