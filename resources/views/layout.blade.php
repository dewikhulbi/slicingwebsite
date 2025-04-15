<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">Dashboard</a>
    <a class="nav-link" href="/products">Produk</a>
    <a class="nav-link" href="/categories">Kategori</a>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
