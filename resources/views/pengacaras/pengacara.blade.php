@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Table Pengacara</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <a href="/tambahpengacara" class="btn btn-success mb-3">Tambah Data Pengacara</a>
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>

            <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Profil</th>
                        <th class="text-center">Dibuat</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td class="text-center">
                                <img src="{{ asset('assets/img/'.$row->foto) }}" alt="" class="img-fluid w-75 " class="mb-3 mt-3 ">
                            </td>
                            <td class="text-center">{{ $row->nama_pengacara }}</td>
                            <td class="text-center">{{$row->kategori}}</td>
                            <td class="text-center">{{$row->profil}}</td>
                            <td class="text-center">{{$row->created_at}}</td>
                            <td class="text-center">
                                <a href="/tampildata/{{ $row->id }}" class="btn btn-primary d-flex justify-content-center">Edit</a>
                                <a href="/delete/{{ $row->id }}" class="btn btn-danger d-flex justify-content-center">Delete</a>
                                <button type="button" class="btn btn-warning d-flex justify-content-center">Detail</button>

                            </td>
                        </tr>
                        @endforeach

              </table>
        </div>
    </section>
@endsection
