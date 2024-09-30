@extends('layouts.app')
@section('content')
    <div class="container-xl">

        <h1 class="app-page-title">{{ $title }}</h1>

        <div class="row g-4">
            <div class="col-12">
                <div class="app-card app-card-progress-list h-100 shadow-sm">
                    <div class="app-card-header p-3">
                        <div class="row justify-content-between align-items-center">
                            <h4 class="app-card-title fw-bold">Konfirmasi Data {{ $title }}</h4>
                        </div><!--//row-->
                    </div><!--//app-card-header-->
                    <div class="app-card-body p-3">
                        <table class="table app-table-hover mb-0 text-left">
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Kode</th>
                                <td class="cell" style="font-weight: 700" width="70%">: {{ $data->kode }}</td>
                            </tr>
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Nama</th>
                                <td class="cell" style="font-weight: 700" width="70%">: {{ ucwords($data->nama) }}</td>
                            </tr>
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Kategori</th>
                                <td class="cell" style="font-weight: 700" width="70%">: {{ ucwords($data->kategori) }}
                                </td>
                            </tr>
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Jumlah</th>
                                <td class="cell" style="font-weight: 700" width="70%">: Rp
                                    {{ number_format($data->jumlah) }}</td>
                            </tr>
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Tanggal</th>
                                <td class="cell" style="font-weight: 700" width="70%">:
                                    {{ date('d F Y', strtotime($data->tanggal)) }}</td>
                            </tr>
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Keterangan</th>
                                <td class="cell" style="font-weight: 700" width="70%">:
                                    {{ ucwords($data->keterangan) }}</td>
                            </tr>
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Bendahara</th>
                                <td class="cell" style="font-weight: 700" width="70%">:
                                    {{ ucwords($data->bendahara->nama) }}</td>
                            </tr>
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Bukti</th>
                                <td class="cell" style="font-weight: 700" width="70%">:
                                    <a href="{{ asset('storage/' . $data->bukti) }}" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="{{ asset('storage/' . $data->bukti) }}" alt=""
                                            style="width: 100px; height: 100px; object-fit: cover; border-radius: 100%;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="cell" style="font-weight: 900" width="30%">Status</th>
                                <td class="cell" style="font-weight: 700" width="70%">:
                                    @if ($data->status == 0)
                                        <span class="badge bg-info">Konfirmasi</span>
                                    @elseif ($data->status == 1)
                                        <span class="badge bg-success">Berhasil</span>
                                    @else
                                        <span class="badge bg-danger">Gagal</span>
                                    @endif
                                </td>
                            </tr>
                        </table>

                        <hr />

                        <form method="POST" action="{{ route('masjid.update', $data->id) }}" class="settings-form">
                            @csrf
                            @method('PUT')
                            <x-forms.select name="status" label="Status" required="required">
                                <option class="fw-bold" value="1" {{ $data->status == 1 ? 'selected' : '' }}>Berhasil
                                </option>
                                <option class="fw-bold" value="2" {{ $data->status == 2 ? 'selected' : '' }}>Gagal
                                </option>
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
