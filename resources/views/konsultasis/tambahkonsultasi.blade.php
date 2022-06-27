@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Formulir Konsultasi</h1>
        </div>
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('insertkonsultasi')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Upload KTP Anda</label>
                                    <input type="file" name="foto" class="form-control" >
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Bidang Praktik</label>
                                  <input type="text" name="bidang_praktik" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp">
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Biaya Konsultasi</label>
                                    <input type="text" name="biaya" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Ceritakan Permasalahan Anda</label>
                                        <input type="text" name="masalah" class="form-control" id="exampleInputEmail1"
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
