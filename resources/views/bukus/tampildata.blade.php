@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Detail Buku</h1>
        </div>
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/Buku-Management/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->nama }}">
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Penulis</label>
                                  <input type="text" name="penulis" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp" value="{{ $data->penulis }}">
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                    <input type="text" name="tahun" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->tanggal }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Stok</label>
                                    <input type="text" name="stok" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->stok }}">
                                  </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Harga</label>
                                      <input type="text" name="harga" class="form-control" id="exampleInputEmail1"
                                      aria-describedby="emailHelp" value="{{ $data->harga }}">
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
