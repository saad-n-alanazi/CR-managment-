@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg">
        <div class="dash first-dash">
            <span> <i class="fas fa-signal"></i> </span> <a href="" style="color: white"> 
                عدد السلات المدخلة ({{$basketsCount}}) </a>
        </div>
    </div>
    <div class="col-lg">
        <div class="dash second-dash">
            <span> <i class="fas fa-folder-open"></i></span> <a href="" style="color: white">
                 عدد المستفيدين ({{$recipient}} )</a>
        </div>
    </div>
    <div class="col-lg">
        <div class="dash third-dash">
            <span> <i class="far fa-copy"></i></span> <a href="" style="color: white"> 
                السلات المسلمة ({{$delivered}}) </a>
        </div>
    </div>
    <div class="col-lg">
        <div class="dash last-dash">
            <span><i class="fas fa-search"></i></span> <a href="" style="color: white"> 
                 السلات الغير مسلمة ({{$notDelivered}})</a>
        </div>
    </div>
</div>

@endsection