@if(Session::has('successfulAdd'))
<div class="alert alert-success mb-5" role="alert">
    {{Session::get('successfulAdd')}}
</div>
@endif

@if(Session::has('ErrorAddRecipient'))
<div class="alert alert-danger mb-5" role="alert">
    {{Session::get('ErrorAddRecipient')}}
</div>
@endif

@if(Session::has('ErroAddBaskets'))
<div class="alert alert-danger mb-5" role="alert">
    {{Session::get('ErroAddBaskets')}}
</div>
@endif


@if(Session::has('successfulBasketUpdate'))
<div class="alert alert-success mb-5" role="alert">
    {{Session::get('successfulBasketUpdate')}}
</div>
@endif


@if(Session::has('ErrorBasketUpdate'))
<div class="alert alert-danger mb-5" role="alert">
    {{Session::get('ErrorBasketUpdate')}}
</div>
@endif



@if(Session::has('successfulRecipientUpdate'))
<div class="alert alert-success mb-5" role="alert">
    {{Session::get('successfulRecipientUpdate')}}
</div>
@endif


@if(Session::has('ErrorRecipientUpdate'))
<div class="alert alert-danger mb-5" role="alert">
    {{Session::get('ErrorRecipientUpdate')}}
</div>
@endif