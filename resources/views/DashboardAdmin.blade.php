<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="{{ asset('css/dashboardadmin.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="mx-3 my-sm-3">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mx-3">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Role</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Buku</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Peminjaman</a>
      </li>
    </ul>
  </div>
  
  <a href="/logout">
      <button class="btn btn-outline-danger my-2 my-sm-0 mx-5 float-end" type="submit">Logout</button>
    </a>
</nav>

<div class="text-center">
<div class="btn-group btn-group-lg my-sm-5 float-justify" role="group" aria-label="Basic example">
  <a href="/role">
    <button type="button" class="btn btn-primary">Role</button>
  </a>
  <a href="/buku">
    <button type="button" class="btn btn-success">Buku</button>
  </a>
  <a href="/peminjaman">
    <button type="button" class="btn btn-warning">Peminjaman</button>
  </a>
</div>
</div>