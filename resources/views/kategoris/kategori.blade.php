@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Table Kategori</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Title</h4>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <a href="{{ route('tambahKategori') }}" class="btn btn-success mb-3">Tambah Data Kategori</a>
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>

            <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Id</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Keterangan</th>
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
                            <td class="text-center">{{ $row->id }}</td>
                            <td class="text-center">{{ $row->kategori }}</td>
                            <td class="text-center">{{ $row->keterangan }}</td>
                            <td>
                                <a href="/tampilKategori/{{ $row->id }}" class="btn btn-sm btn-primary btn-icon"><i class="fas fa-edit"></i>Edit</a>
                                <a href="/delete/{{ $row->id }}" class="btn btn-sm btn-danger btn-icon"><i class="fas fa-times"></i>Delete</a>
                            </td>
                        </tr>
                        @endforeach
              </table>
        </div>
    </section>
@endsection
