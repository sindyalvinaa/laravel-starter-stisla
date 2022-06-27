@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Formulir Konsultasi</h1>
        </div>
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/Konsultasi-Management/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Upload KTP Anda</label>
                                    <input type="file" name="foto" class="form-control" value= img src="{{ asset('assets/img/'.$data->gambar) }}" alt="" style="width: 150px;" class="mb-3 mt-3">
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Bidang Praktik</label>
                                  <input type="text" name="bidang_praktik" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp" value="{{ $data->bidang_praktik }}">
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Biaya Konsultasi</label>
                                    <input type="text" name="biaya" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->biaya }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ceritakan Permasalahan Anda</label>
                                    <input type="text" name="masalah" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->masalah }}">
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
