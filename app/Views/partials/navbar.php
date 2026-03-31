<?php $currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH); ?>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm" style="background: linear-gradient(90deg, #4f6f3a 0%, #7aa05a 55%, #a8e6bf 100%);">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="/">🌿 Mini MVC</a>

    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <div class="navbar-nav ms-auto gap-lg-2">
        <a class="nav-link px-3 rounded-pill <?= $currentPath === '/' ? 'active text-dark bg-white' : 'text-white' ?>" href="/">Home</a>
        <a class="nav-link px-3 rounded-pill <?= $currentPath === '/home/about' ? 'active text-dark bg-white' : 'text-white' ?>" href="/home/about">About</a>
        <a class="nav-link px-3 rounded-pill <?= $currentPath === '/home/contact' ? 'active text-dark bg-white' : 'text-white' ?>" href="/home/contact">Contact</a>
      </div>
    </div>
  </div>
</nav>