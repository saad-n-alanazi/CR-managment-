@extends('layout')

@section('content')

<form method="POST" action="{{route('baskets.store')}}">

<div class="card mb-5"> <!-- card -->

<!--
<div class="card-header text-light bg-cards">
    <h6>معلومات السلة</h6>
</div>

-->
@include('errors')
    <div class="card-body">  <!-- start body -->
    <h4 class="formText">  معلومات السلة :  </h4>
            @csrf
            <div class="row mt-5">  <!-- row start -->
                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong> نوع السلة :  </strong> </label>
                        <input type="text" name="basketType" id="basketType" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name"> <strong>     السلة :  </strong> </label>
                        <input type="text" name="basketName" id="basketName" class="form-control">
                    </div>
                </div>  <!-- end col -->

                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong>  المحتويات :  </strong> </label>
                        <textarea name="basketContent" id="basketContent" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>  <!-- end col -->

            </div> 
            <h4 class="formText">  معلومات المستفيد :  </h4>
            <div class="row mt-5">  <!-- row start -->
                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong>  اسم المستفيد :  </strong> </label>
                        <input type="text" name="recipientName" id="recipientName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name"> <strong>    رقم الجوال :  </strong> </label>
                        <input type="text" name="recipientPhone" id="recipientPhone" class="form-control">
                    </div>
                </div>  <!-- end col -->

                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong>  العنوان :  </strong> </label>
                        <textarea name="recipientAddress" id="recipientAddress" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>  <!-- end col -->

            </div>  <!-- row end  -->
            <div class="form-group">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button type="submit" class="btn  text-light bg-mycolor" style="width:100%"> <i class="fas fa-folder-plus"></i> اضافة</button>
                    </div>
                </div>
               
    </div>  <!-- End body -->
</div> 


</form>

@endsection