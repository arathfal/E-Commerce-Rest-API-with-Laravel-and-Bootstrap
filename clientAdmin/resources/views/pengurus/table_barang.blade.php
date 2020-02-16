@extends('layout.template')

@section('title', 'Table Barang')
@section('isiAdmin')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables Barang</li>
</ol>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Barang</div>

    <div class="container" style="margin-top:10px;">
        <div class="row">
            <div class="col-md-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Barang
                </button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Nama Penjual</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barangs as $barang)
                    <tr>
                        <td>{{$barang->id}}</td>
                        <td>{{$barang->nama}}</td>
                        <td>{{$barang->deskripsi}}</td>
                        <td>{{$barang->harga}}</td>
                        <td>{{$barang->gambar}}</td>

                        @foreach($kategori as $k)
                        @if($k->id == $barang->kategori_id)
                        <td> {{$k->nama}}</td>
                        @endif
                        @endforeach

                        @foreach($user as $u)
                        @if($u->id == $barang->user_id)
                        <td> {{$u->nama}}</td>
                        @endif
                        @endforeach
                        <td>
                            <button barang_id="{{$barang->id}}" nama_barang="{{$barang->nama}}" deskripsi_barang="{{$barang->deskripsi}}" harga_barang="{{$barang->harga}}" gambar_barang="{{$barang->gambar}}" kategori_barang="{{$barang->kategori_id}}" penjual_barang="{{$barang->user_id}}" type="button" data-toggle="modal" class="btn btn-warning edit">Edit</button>
                            <button data-toggle="modal" IDBarang="{{$barang->id}}" class="btn btn-danger hapus">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal create data -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/pengurus/tambah_barang" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" placeholder="Nama Barang" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Barang"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" placeholder="Harga Barang" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pilih Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="row " style="margin-top:25px; margin-left:2px;">
                        <label>Kategori</label>
                        <select name="kategori_id" id="kategori" class="form-control">
                            @foreach($kategori as $kat)
                            <option value="{{$kat->id}}">{{$kat->nama}}</option>
                            @endforeach
                        </select>
                        <label>Nama Penjual</label>
                        <select name="user_id" id="user" class="form-control">
                            @foreach($user as $us)
                            <option value="{{$us->id}}">{{$us->nama}}</option>
                            @endforeach

                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Modal update -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/pengurus/update_barang" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="Id_barang" name="id">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" placeholder="Nama Barang" id="nama_Barang" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi_Barang" class="form-control" placeholder="Deskripsi Barang"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" id="harga_Barang" placeholder="Harga Barang" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pilih Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="row " style="margin-top:25px; margin-left:2px;">
                        <label>Kategori</label>
                        <select name="kategori_id" id="kategori" class="form-control">
                            @foreach($kategori as $kat)
                            <option value="{{$kat->id}}">{{$kat->nama}}</option>
                            @endforeach
                        </select>
                        <label>Nama Penjual</label>
                        <select name="user_id" id="user" class="form-control">
                            @foreach($user as $us)
                            <option value="{{$us->id}}">{{$us->nama}}</option>
                            @endforeach

                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Hapus Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/pengurus/hapus_barang" method="post">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    Yakin mau dihapus???
                    <input type="hidden" name="idbr" id="id_barang_delete">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection