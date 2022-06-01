@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Table Kost</h1>
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
            <a href="/tambahkost" class="btn btn-success mb-3">Tambah Data Pengacara</a>
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
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td>Muso</td>
                            <td>1</td>
                            <td>uydoaiydisycishcfidhdj</td>
                            <td>
                                <button type="button" class="btn btn-info">Edit</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
              </table>
        </div>
    </section>
@endsection
