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
          <a class="nav-link sidefrst" href="/user/a">
            <span class="textside">  Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link sidesthrd" href="/user/buku">
            <span class="textside">  Buku</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link sidesforth" href="/user/peminjaman">
            <span class="textside">  Peminjaman</span>
          </a>
        </li>
      </ul>
      
      <ul class="navbar-nav2 ml-auto">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome User</a>
            <ul class="dropdown-menu">
                <li class="resflset"><a href="/logout"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
            </ul>
        </li>
      </ul>
      
    </div>
  </nav>

   <!-- Table-->

<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead> 
    
        <tr> 
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Action</th>
        </tr>
      
    </thead>
    <tbody>
      @foreach($buku as $tabelbuku)
            <tr>
                  <td class="text-center">{{$tabelbuku->id}}</td>
                  <td class="text-center">{{$tabelbuku->name}}</td>
                  <td class="text-center">

                  <a class='btn btn-info btn-xs' href="lihatbukupage/{{$tabelbuku->id}}">
                      <span class="glyphicon glyphicon-edit"></span> Lihat
                    </a> 
            </tr>
        @endforeach
      </tbody>
    </table>

    </div>
</div>

