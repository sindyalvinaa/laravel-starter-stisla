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
            <a href="/tambahpengacara" class="btn btn-success mb-2">Tambah Data Pengacara</a>

            <div class="row g-3 align-items-center mt-1 mb-2">
                <div class="col-auto">
                    <form action="/pengacara" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelp">
                </form>
                </div>
            </div>
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
                        @foreach ($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td class="text-center">
                                <img src="{{ asset('assets/img/'.$row->foto) }}" alt="" style="width:80px; height: 100px" class="mb-3 mt-3 ">
                            </td>
                            <td class="text-center">{{ $row->nama_pengacara }}</td>
                            <td class="text-center">{{$row->kategori}}</td>
                            <td class="text-center">{{$row->profil}}</td>
                            <td class="text-center">{{$row->created_at}}</td>
                            <td class="text-center">
                                <a href="/tampildata/{{ $row->id }}" class="btn btn-sm btn-primary btn-icon"><i class="fas fa-edit"></i>Edit</a>
                                <a href="/delete/{{ $row->id }}" class="btn btn-sm btn-danger btn-icon"><i class="fas fa-times"></i>Delete</a>
                                <button type="button" class="btn btn-sm btn-warning btn-icon"><i class="fas"></i>Detail</button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
              {{ $data->links() }}
        </div>
    </section>
@endsection
