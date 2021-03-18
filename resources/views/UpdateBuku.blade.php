<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<link href="{{ asset('css/dashboard2.css') }}" rel="stylesheet">
<link href="{{ asset('css/buku.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
  
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
     <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav">

          <a class="nav-link navlogo text-center" href="/admin/a">
            <img src="https://www.sekalahita.id/assets/images/logo/logo.png">
          </a>

        <li class="nav-item">
          <a class="nav-link sidefrst" href="/admin/a">
            <span class="textside">  Home</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link sidesecnd" href="/admin/role">
            <span class="textside">  Role</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link sidesthrd" href="/admin/buku">
            <span class="textside">  Buku</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link sidesforth" href="/admin/peminjaman">
            <span class="textside">  Peminjaman</span>
          </a>
        </li>
      </ul>
      
      <ul class="navbar-nav2 ml-auto">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome Admin</a>
            <ul class="dropdown-menu">
                <li class="resflset"><a href="/logout"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
            </ul>
        </li>
      </ul>
      
    </div>
  </nav>


<div class="container" id="registrasi">
        
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
            <p class="text-center">Update Buku</p>
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/createbuku" method="POST">
                        @csrf
                            <div class="form-group">
                                <input value = {{$buku->name}} type="text" class="form-control" name="name" placeholder="Nama">
                            </div>                            
                            <div class="form-group">
                                <input value= {{$buku->jumlah_buku}} type="username" class="form-control" name="jumlah_buku" placeholder="Jumlah Buku">
                            </div>
                              <button type="button" class="btn btn-danger">Close</button> 
                              <button type="submit" class="btn btn-primary">Submit</button>                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>