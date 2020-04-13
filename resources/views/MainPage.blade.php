@extends('layout')

@section('content')


<div class="row">

<div class="col">
    <div class="circle">
            <div class="contentCircle">
                <h1> {{$basketsCount}} </h1>
                <h5>  عدد السلات المدخلة</h5>
            </div>
    </div>
</div>

<div class="col">
    <div class="circle">
            <div class="contentCircle">
                <h1> {{$recipient}} </h1>
                <h5> عدد المستفيدين </h5>
            </div>
    </div>
</div>

<div class="col">
    <div class="circle">
            <div class="contentCircle">
                <h1> {{$delivered}} </h1>
                <h5>   السلات المسلمة </h5>
            </div>
    </div>
</div>

<div class="col">
    <div class="circle">
            <div class="contentCircle">
                <h1> {{$notDelivered}} </h1>
                <h5>  السلات الغير مسلمة </h5>
            </div>
    </div>
</div>
 
</div>

@endsection