<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="/">Home</a>
        </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('create') ? 'active' : ''}}"  href="/create">Create</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('edit') ? 'active' : ''}}" href="/edit">Edit</a>
    </li>
    </ul>
  </div>
</nav>
<br>
