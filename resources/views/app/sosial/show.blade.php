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
                                <h4 class="app-card-title fw-bold">Data {{ $title }} - {{ ucwords($data->nama) }}</h4>
                            </div><!--//col-->
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

                        <div class="text-end">
                            <a href="{{ route('masjid.index') }}"
                                class="btn btn-primary fw-bold text-white px-3 py-1 mt-3">Kembali</a>
                        </div>

                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div>
            <!--//col-->
        </div>
        <!--//row-->

    </div>
    <!--//container-fluid-->
@endsection
