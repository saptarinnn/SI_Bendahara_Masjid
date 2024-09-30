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
                        <form method="POST" action="{{ route('rekmasjid.store') }}" class="settings-form" enctype="multipart/form-data">
                            @csrf
                            <x-forms.input name="no_rek" label="Nomor Rekening" type="number" value="{{ old('no_rek') }}" required="required" />
                            <x-forms.input name="jenis_bank" label="Nama Bank" type="" value="{{ old('jenis_bank') }}" required="required" />

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
