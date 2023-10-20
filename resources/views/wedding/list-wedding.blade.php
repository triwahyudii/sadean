@extends('layouts.home')

@section('content')
<div class="container pt-5 pb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($data as $item)
        <div class="col">
            <div class="card border-0">
                <div style="max-height: 250px; overflow: hidden;">
                    <img src="{{ asset('/' . $item['images']) }}" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$item['title']}}</h5>
                    <div class="col text-center d-grid gap-2 col-6 mx-auto">
                        <a href="{{ url('wedding/' . $item['id']) }}" class="btn btn-warning justify-content-center">Rincian</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection