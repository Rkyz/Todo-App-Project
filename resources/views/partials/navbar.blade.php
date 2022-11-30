@if(Auth::check())
<div class="container">
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Todo App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="data">data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create">create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
@endif