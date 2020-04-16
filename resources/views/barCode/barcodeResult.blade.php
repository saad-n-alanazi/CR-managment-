

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
</nav>

  <div class="container mt-5">

  <form method="GET" action="{{route('resultUpdate' , $showBasketResult->id)}}">

<div class="card mb-5"> <!-- card -->


@include('errors')
    <div class="card-body">  <!-- start body -->
            @csrf
             <!-- row start -->
                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong> رقم السلة :  </strong> </label>
                        <input type="text" name="basketType" id="basketType" class="form-control" value="{{$showBasketResult->id}}">
                    </div>
                </div>  <!-- end col -->

                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong>  المحتويات :  </strong> </label>
                        <textarea name="basketContent" id="basketContent" cols="30" rows="5" class="form-control"> {{$showBasketResult->content}}</textarea>
                    </div>
                </div>  <!-- end col -->

       <!-- row start -->
                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong>  اسم المستفيد :  </strong> </label>
                        <input type="text" name="recipientName" id="recipientName" class="form-control" value="{{$showBasketResult->recipient->name}}">
                    </div>
                    <div class="form-group">
                        <label for="name"> <strong>    رقم الجوال :  </strong> </label>
                        <input type="text" name="recipientPhone" id="recipientPhone" class="form-control" value="{{$showBasketResult->recipient->phone}}">
                    </div>
                </div>  <!-- end col -->

                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong>  العنوان :  </strong> </label>
                        <textarea name="recipientAddress" id="recipientAddress" cols="30" rows="5" class="form-control">{{$showBasketResult->recipient->address}}</textarea>
                    </div>
                </div>  <!-- end col -->

            <div class="form-group">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button type="submit" class="btn  text-light bg-mycolor" style="width:100%"> <i class="fas fa-folder-plus"></i> تسليم</button>
                    </div>
                </div>
               
    </div>  <!-- End body -->
</div> 


</form>
  </div>
     
  



  <script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/all.min.js') }}"></script>
  <script src="{{ asset('js/datatables.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>