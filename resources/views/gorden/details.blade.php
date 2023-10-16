@extends('layouts.home')

@section('content')
<div class="container pt-5 pb-5">
    <div class="col">
        <div>
            <img src="{{ asset('storage/'.$data['images']) }}" class="img-fluid" alt="">
        </div>
        <h3 class="fw-bold pt-3">{{ $data['title'] }}</h3>
        <h4 class="fw-bold pt-3 text-primary">Rp {{ number_format($data['price'], 0, ',', '.') }}</h4>
        <div class="container">
            <h5 class="fw-bold pt-2">Rincian</h5>
            <p>{{ $data['desc'] }}</p>
        </div>
        <div class="text-center">
            <h5>Konsultasi secara <span class="text-danger">GRATIS</span></h5>
            <a href="https://wa.me/6285732003433?text=Saya%20ingin%20konsultasi%20dengan%20Sadean.com" class="btn btn-primary">GRATIS Konsultasi</a>
        </div>
    </div>
</div>
@endsection