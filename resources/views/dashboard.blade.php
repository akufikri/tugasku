@extends('template')

@section('header')
    Dashboard
@endsection

@section('content')
<div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <x-card/>
                    <div class="container">
                </div>
                <!-- /.container-fluid -->
            </div>
            <div class="container">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
            <div class="card-body">
                 <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                             <th>No</th>
                                            <th>Kode barang</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($ds as $ds)
                                           <tr>
                                             <td>{{$no++}}</td>
                                                <td>{{$ds->kode_barang}}</td>
                                                <td>{{$ds->nama_barang}}</td>
                                                <td>{{$ds->kategori_barang}}</td>
                                                <td>{{$ds->harga}}</td>
                                                <td>{{$ds->jumlah}}</td>
                                           </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode barang</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </tfoot>
                            <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>
    </div>
@endsection