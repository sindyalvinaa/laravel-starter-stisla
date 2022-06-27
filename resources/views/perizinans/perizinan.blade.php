@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Detail Perizinan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <a href="/Perizinan-Management/tambahperizinan" class="btn btn-success mb-2">Detail Perizinan</a>

            <div class="row g-3 align-items-center mt-1 mb-2">
                <div class="col-auto">
                    <form action="/Perizinan-Management/perizinan" method="GET">
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
                        {{-- <th class="text-center">No</th> --}}
                        <th class="text-center">Nama Perizinan</th>
                        <th class="text-center">Lembaga</th>
                        <th class="text-center">Lama Pengerjaan</th>
                        <th class="text-center">Biaya</th>
                        <th class="text-center">Persyaratan</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $no = 1;
                        @endphp --}}
                        @foreach ($data as $index => $row)
                        <tr>
                            <td class="text-center">{{$row->nama}}</td>
                            <td class="text-center">{{$row->lembaga}}</td>
                            <td class="text-center">{{$row->lama}}</td>
                            <td class="text-center">{{$row->biaya}}</td>
                            <td class="text-center">{{$row->persyaratan}}</td>
                            <td class="text-center">
                                <a href="/Perizinan-Management/tampildata/{{ $row->id }}" class="btn btn-sm btn-primary btn-icon"><i class="fas fa-edit"></i>Edit</a>
                                <a href="/Perizinan-Management/delete/{{ $row->id }}" class="btn btn-sm btn-danger btn-icon"><i class="fas fa-times"></i>Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
              {{ $data->links() }}
        </div>
    </section>
@endsection
