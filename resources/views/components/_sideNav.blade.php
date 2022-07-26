<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Menu</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">User Dashboard</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="">Overview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Learning Modules</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Quick Reference</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('readCompany') }}">Company Manager</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('readModule') }}">Curriculum Manager</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Settings</a>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-link" style="text-decoration: none" type="submit">Logout</button>
            </form>
        </li>
    </ul>
  </div>
</div>