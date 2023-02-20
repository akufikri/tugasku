@extends('template')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                        <form action="/updatedata/{{ $data->id }}" method="POST">
                            @csrf
                            <div class="row justify-content-center">
                                  <div class="col-md-4">
                             <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="kode_barang" value="{{ $data->kode_barang }}" readonly>
                        </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $data->nama_barang }}">
                             </div>
                            </div>

                        <div class="col-md-6">
                              <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kategori</label>
                            <input type="text" class="form-control" name="kategori_barang" value="{{ $data->kategori_barang }}">
                             </div>
                        </div>
                        <div class="col-md-3">
                              <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ $data->jumlah}}">
                             </div>
                        </div>
                        <div class="col-md-9">
                              <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $data->harga }}">
                             </div>
                        </div>
                        <div class="col-md-9">
                             <button class="btn btn-primary" type="submit">Tambah Data</button>
                             <a href="/">kembali ke dashboard <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        </div>
                          
                        </form>
                </div>
            </div>
        </div>
    </section>
@endsection