@extends('layout.panel.master')

@section('title', 'Anggota')

@section('content')
    <div class="card">
        <div class="card-header text-right">
            <a href="{{ route('member.create') }}" class="btn btn-primary">
                <i class="fa-solid fa-user-plus mr-1"></i>
                Tambah anggota
            </a>
        </div>
        <div class="card-body">
            <table id="datatable" class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Profil</th>
                        <th>Nama</th>
                        <th>Sebagai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td>Arif</td>
                        <td>Helper</td>
                        <td>adsdsa</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
