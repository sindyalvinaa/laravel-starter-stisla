@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Pengacara</h1>
        </div>
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukkan Foto Pengacara</label>
                                    <input type="file" name="foto" class="form-control" value= img src="{{ asset('assets/img/'.$data->gambar) }}" alt="" style="width: 150px;" class="mb-3 mt-3">
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Masukkan Nama Pengacara</label>
                                  <input type="text" name="nama_pengacara" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp" value="{{ $data->nama_pengacara }}">
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <input type="text" name="kategori" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->kategori }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Profil Pengacara</label>
                                    <input type="text" name="profil" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->profil }}">

                                  </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                    </div>
                </div>

        </div>
    </section>
@endsection
