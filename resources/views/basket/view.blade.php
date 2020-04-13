@extends('layout')

@section('content')


<div class="card mb-5">
    <div class="card-header  bg-cards">
    معلومات السلة :
    </div>
    <div class="card-body">
    <form method="POST" action="{{route('baskets.store')}}">
    @csrf
            <div class="row mt-5">  <!-- row start -->
                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong> نوع السلة :  </strong> </label>
                        <input type="text" name="basketType" id="basketType" class="form-control" value="{{$basketView->name}}">
                    </div>
                    <div class="form-group">
                        <label for="name"> <strong>     السلة :  </strong> </label>
                        <input type="text" name="basketName" id="basketName" class="form-control" value="{{$basketView->name}}">
                    </div>
                </div>  <!-- end col -->

                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong>  المحتويات :  </strong> </label>
                        <textarea name="basketContent" id="basketContent" cols="30" rows="5" class="form-control">{{$basketView->content}}</textarea>
                    </div>
                </div> 
            </div> 
            <div class="form-group">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button type="submit" class="btn  text-light bg-mycolor" style="width:100%"> <i class="fas fa-folder-plus"></i> تعديل</button>
                    </div>
                </div>
</div>
    </form>   
    </div>
</div>


<div class="card secodeCard">
    <div class="card-header  bg-cards">
    معلومات المستفيد :
    </div>
    <div class="card-body">
    <form method="POST" action="{{route('baskets.store')}}">
    @csrf
            <div class="row mt-5">  <!-- row start -->
                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong> اسم المستفيد :   </strong> </label>
                        <input type="text" name="basketType" id="basketType" class="form-control" value="{{$basketView->recipient->name}}">
                    </div>
                    <div class="form-group">
                        <label for="name"> <strong>   رقم الجوال :  </strong> </label>
                        <input type="text" name="basketName" id="basketName" class="form-control" value="{{$basketView->recipient->phone}}">
                    </div>
                </div>  <!-- end col -->

                <div class="col-md-6">  <!-- col -->
                    <div class="form-group">
                        <label for="name"> <strong>   العنوان :  </strong> </label>
                        <textarea name="basketContent" id="basketContent" cols="30" rows="5" class="form-control">{{$basketView->recipient->address}}</textarea>
                    </div>
                </div> 
            </div> 
            <div class="form-group">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button type="submit" class="btn  text-light bg-mycolor" style="width:100%"> <i class="fas fa-folder-plus"></i> تعديل</button>
                    </div>
                </div>
    </form>   
    </div>
</div>
@endsection