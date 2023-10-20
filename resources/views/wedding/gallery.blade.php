@extends('layouts.home')

@section('content')
<div class="container pt-5 pb-5">
    <h1 class="text-center fw-bold">GALLERY WEDDING ORGANIZER</h1>
    @foreach($data as $item)
    <div class="col">
        <div>
            <img src="{{ asset('/'.$item['images']) }}" class="img-fluid" alt="">
        </div>
    </div>
    @endforeach
</div>
@endsection