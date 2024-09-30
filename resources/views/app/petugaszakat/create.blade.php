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
                        <form method="POST" action="{{ route('petugaszakat.store') }}" class="settings-form" enctype="multipart/form-data">
                            @csrf
                            <x-forms.input name="nama" label="Nama Lengkap" type="" value="{{ old('nama') }}" required="required" />
                            <x-forms.input name="username" label="Username" type="" value="{{ old('username') }}" required="required" />

                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <input type="text" class="form-control fw-bold" readonly value="Petugas" />
                            </div>

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
