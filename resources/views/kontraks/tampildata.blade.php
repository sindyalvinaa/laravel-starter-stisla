@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Layanan Kontrak</h1>
        </div>
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/Kontrak-Management/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Kontrak</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->nama }}">
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Jenis Kontrak</label>
                                  <input type="text" name="jenis" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp" value="{{ $data->jenis }}">
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Pengesahan Kontrak</label>
                                    <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->tanggal }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Isi Kontrak</label>
                                    <input type="text" name="isi" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->isi }}">
                                  </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Biaya Kontrak</label>
                                      <input type="text" name="biaya" class="form-control" id="exampleInputEmail1"
                                      aria-describedby="emailHelp" value="{{ $data->biaya }}">
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
