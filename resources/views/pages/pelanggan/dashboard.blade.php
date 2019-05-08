@extends('layouts.templatepelanggan')
@section('title', 'Pelanggan')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <span class="h1">Menu Terbaru</span>
            </div>
            @for($i=0;$i<3;$i++)
                <div class="col-sm-4 mt-4">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header"><span class="h4">{{ $masakan[$i]->nama_masakan }}</span></div>
                        <img src="{{ asset('assets/img/'.$masakan[$i]->gambar) }}" alt="" height="200" class="card-img-bottom">
                    </div>
                </div>
            @endfor
            <div class="col-md-12 mt-4">
                <div class="card border-0 shadow-lg">
                    <video src="{{ asset('assets/video/restaurant.mp4') }}" class="card-img-top" controls></video>
                </div>
            </div>
        </div>
    </div>
@endsection