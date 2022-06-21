@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Pengacara</h1>
        </div>
            <div class="section-body">
            <div class="card-body">
                <img src="{{ asset('assets/img/'.$pengacara->foto) }}" alt="" style="width:250px; height: 300px" class="mb-3 mt-3">
                <h5 class="card-title">Name : {{$pengacara->nama_pengacara}}</h5>
                <p class="card-text">Kategori : {{$pengacara->kategori}}</p>
                <p class="card-text">Profil : {{$pengacara->profil}}</p>
                <a href="https://wa.me/6285731177676" class="btn btn-sm btn-info btn-icon"><i class="fas fa-phone"></i> Hubungi Pengacara</a>
            </div>
            </div>
        </div>
    </section>
@endsection
