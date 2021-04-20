<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('admin')}}">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('animal.index')}}">Animals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('animal.create')}}">New animals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('home')}}">Back to site</a>
      </li>
    </ul>
  </div>
</nav>