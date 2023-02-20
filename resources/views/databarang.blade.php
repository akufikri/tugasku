@extends('template')

@section('header')
    Data Barang
@endsection

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <section>
        <div class="container">
            <a href="/tambahdata" class="btn btn-primary mb-3">Tambah data</a>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
            <div class="card-body">
                 <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Kode barang</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @php
                                            $no = 1;
                                        @endphp
                                         @foreach ($data as $data)
                                        <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$data->kode_barang}}</td>
                                                <td>{{$data->nama_barang}}</td>
                                                <td>{{$data->kategori_barang}}</td>
                                                <td>{{$data->harga}}</td>
                                                <td>{{$data->jumlah}}</td>
                                                <td>
                                                    <a href="/tampildata/{{ $data->id }}" class="btn btn-success" >Edit</a>
                                                    <a href="/hapus/{{ $data->id }}" class="btn btn-danger">Del</a>
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            <tbody>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection