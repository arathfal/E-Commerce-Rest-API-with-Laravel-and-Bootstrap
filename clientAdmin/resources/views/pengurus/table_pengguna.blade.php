@extends('layout.template')

@section('title', 'Table Admin')
@section('isiAdmin')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables User</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data User</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <!-- <th>Password</th> -->
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penggunas as $pengguna)
                    <tr>
                        <td>{{$pengguna->id}}</td>
                        <td>{{$pengguna->nama}}</td>
                        <td>{{$pengguna->email}}</td>
                        <!-- <td>{{$pengguna->password}}</td> -->
                        <td>{{$pengguna->alamat}}</td>
                        <td>{{$pengguna->telepon}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection