@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Pengacara</h1>
        </div>
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('insertpengacara')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukkan Foto Pengacara</label>
                                    <input type="file" name="foto" class="form-control" >
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Masukkan Nama Pengacara</label>
                                  <input type="text" name="nama_pengacara" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp">
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="exampleInputKategori">
                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->kategori }}">{{$item->kategori}} </option>
                                        @endforeach
                                    </select>
                                    {{-- <input type="text" name="kategori" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp"> --}}
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Profil Pengacara</label>
                                    <input type="text" name="profil" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                    <input type="text" name="telp" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukkan Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
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
