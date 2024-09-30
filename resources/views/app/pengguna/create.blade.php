@extends('layouts.app')
@section('content')
    <div class="container-xl">

        <h1 class="app-page-title">{{ $title }}</h1>

        <div class="row g-4">
            <div class="col-12">
                <div class="app-card app-card-progress-list h-100 shadow-sm">
                    <div class="app-card-header p-3">
                        <div class="row justify-content-between align-items-center">
                            <h4 class="app-card-title fw-bold">Tambah Data {{ $title }}</h4>
                        </div><!--//row-->
                    </div><!--//app-card-header-->
                    <div class="app-card-body p-3">
                        <form method="POST" action="{{ route('pengguna.store') }}" class="settings-form" enctype="multipart/form-data">
                            @csrf
                            <x-forms.input name="nama" label="Nama Lengkap" type="" value="{{ old('nama') }}" required="required" />
                            <x-forms.input name="username" label="Username" type="" value="{{ old('username') }}" required="required" />

                            <x-forms.select name="role" label="Role" required="required">
                                <option class="fw-bold" value="">Pilih salah satu...</option>
                                <option class="fw-bold" value="bendahara">Bendahara</option>
                                <option class="fw-bold" value="petugas">Petugas</option>
                            </x-forms.select>

                            <x-forms.button />
                        </form>
                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div>
            <!--//col-->
        </div>
        <!--//row-->

    </div>
    <!--//container-fluid-->
@endsection
