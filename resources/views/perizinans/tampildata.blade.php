@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Perizinan</h1>
        </div>
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/Perizinan-Management/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Perizinan</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->nama }}">
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Lembaga</label>
                                  <input type="text" name="lembaga" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp" value="{{ $data->lembaga }}">
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Lama Pengerjaan</label>
                                    <input type="text" name="lama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->lama }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Biaya</label>
                                    <input type="text" name="biaya" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->biaya }}">
                                  </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Persyaratan</label>
                                      <input type="text" name="persyaratan" class="form-control" id="exampleInputEmail1"
                                      aria-describedby="emailHelp" value="{{ $data->persyaratan }}">
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
