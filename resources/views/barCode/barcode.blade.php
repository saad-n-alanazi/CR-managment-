<!--

<h1> here should be the bar code and the barcode is {{$showBasket->id}}</h1>


<form method="GET" action="{{route('barcodeResult',$showBasket->id )}}">
@csrf

<button> See result </button> 

</form>

    -->
{!! QrCode::size(250)->generate(route('barcodeResult' ,$showBasket->id)); !!}