@extends('layouts.app')
@section('content')
    <div class="container-xl">

        <h1 class="app-page-title">{{ $title }}</h1>

        <div class="row g-4">
            <div class="col-12">
                <div class="app-card app-card-progress-list h-100 shadow-sm">
                    <div class="app-card-header p-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h4 class="app-card-title fw-bold">Data {{ $title }}</h4>
                            </div><!--//col-->
                            <div class="col-auto">
                                <div class="card-header-action">
                                    <a href="{{ route('pengguna.create') }}">Tambah Data</a>
                                </div><!--//card-header-actions-->
                            </div><!--//col-->
                        </div><!--//row-->
                    </div><!--//app-card-header-->
                    <div class="app-card-body p-3">
                        <table id="data-table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-start">#</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td class="cell text-start">{{ $loop->iteration }}</td>
                                        <td class="cell">{{ ucwords($data->nama) }}</td>
                                        <td class="cell">{{ $data->username }}</td>
                                        <td class="cell">{{ ucwords($data->role) }}</td>
                                        <td class="cell">
                                            <form action="{{ route('pengguna.update', $data->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    style="border-radius: 4px; padding: 0 10px 2px; margin: 5px 0;"
                                                    class="small app-btn-secondary text-warning fw-bold show_confirm_ps">Reset Password</button>
                                            </form>
                                            <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    style="border-radius: 4px; padding: 0 10px 2px; margin: 5px 0;"
                                                    class="small app-btn-secondary text-danger fw-bold show_confirm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div>
            <!--//col-->
        </div>
        <!--//row-->

    </div>
    <!--//container-fluid-->
@endsection
