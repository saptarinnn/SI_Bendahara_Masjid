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
                        <form method="POST" action="{{ route('masjid.store') }}" class="settings-form" enctype="multipart/form-data">
                            @csrf
                            <x-forms.input name="nama" label="Nama Pengirim" type="" value="{{ old('nama') }}" required="required" />
                            <x-forms.select name="kategori" label="Kategori" required="required">
                                <option class="fw-bold" value="">Pilih salah satu...</option>
                                <option class="fw-bold" value="masjid">Masjid</option>
                                <option class="fw-bold" value="sosial">Sosial</option>
                            </x-forms.select>
                            <x-forms.input name="jumlah" label="Jumlah" type="number" value="{{ old('jumlah') }}" required="required" />
                            <x-forms.input name="tanggal" label="Tanggal" type="date" value="{{ old('tanggal') }}" required="required" />
                            <x-forms.textarea name="keterangan" label="Keterangan" value="{{ old('keterangan') }}" required="required" />
                            <x-forms.input name="bukti" label="Bukti" type="file" value="" required="required" />

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
