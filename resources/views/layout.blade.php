<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ادارة الازمات</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>

<div class="firstHeader">
      <div class="container">
        <div class="row">
          <div class="mr-auto">
            <img src=" {{asset('images/Ministry.PNG')}}" alt="download" class="img" >
          </div>
          <div class="ml-auto">
              <img src=" {{asset('images/Community_logo_smaller.png')}}" alt="download" class="img" >
          </div>
        </div> 
      
      </div>
    
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-mycolor">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/"> <i class="fas fa-home"></i> </span> <span> الرئيسية </span> &nbsp;&nbsp; | &nbsp;&nbsp;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('baskets.create')}}"> <span> <i class="fas fa-plus"></i> </span> <span> أضافة سلة </span>  &nbsp;&nbsp; | &nbsp;&nbsp;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('baskets.index')}}"> <span> <i class="fas fa-shopping-basket"></i> </span> <span>  السلات المضافة </span>  &nbsp;&nbsp; | &nbsp;&nbsp;</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('delivered')}}"> <span> <i class="fas fa-shipping-fast"></i> </span> <span>  السلات المسلمة </span>  &nbsp;&nbsp; | &nbsp;&nbsp;</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('notDelivered')}}"> <span> <i class="fas fa-ban" ></i> </span> <span>  السلات الغير مسلمة </span>  &nbsp;&nbsp; | &nbsp;&nbsp;</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('notDelivered')}}"> <span><i class="fas fa-user-friends"></i></span> <span> المستخدين </span></a>
      </li>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">  <span> <i class="fas fa-sign-out-alt"></i> </span> <span>  خروج</span>  </span></a>
      </li>
    </ul>

  </div>
</nav>

  <div class="container mt-5">
  @yield('content')
  </div>
     
  



  <script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/all.min.js') }}"></script>
  <script src="{{ asset('js/datatables.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>