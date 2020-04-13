@extends('layout')

@section('content')

<div class="card">
<h4 class="cardText"> السلات الغير المسلمة </h4>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table id="datatable" class="table  table-bordered" style="width:100%">
                <thead class=" text-light bg-mycolor">
                    <tr>
                        <th> رقم السلة</th>
                        <th>  السلة </th>
                        <th> المحتويات </th>
                        <th>  اسم المستفيد </th>
                        <th>  رقم الجوال</th>
                        <th> العنوان </th>
                        <th> حالة التسليم </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notDeliveredBaskets as $basket)
                    <tr>
                        <td>{{$basket->id}}</td>
                        <td>{{$basket->name}}</td>
                        <td>{{$basket->content}}</td>
                        <td>{{$basket->recipient->name}}</td>
                        <td>{{$basket->recipient->phone}}</td>
                        <td>{{$basket->recipient->address}}</td>
                        @if($basket->status == 0)
                            <td>لم يتم التسليم</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection