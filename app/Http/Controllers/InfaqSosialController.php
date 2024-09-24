<?php

namespace App\Http\Controllers;

use App\Models\Infaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InfaqSosialController extends Controller
{
    public $title = "Infaq Sosial";
    public function index()
    {
        $title = $this->title;
        $datas = Infaq::where(['kategori' => 'sosial', 'user_id' => Auth::user()->id])->get();
        return view('app.sosial.index', compact('datas', 'title'));
    }

    // public function create()
    // {
    //     $title = $this->title;
    //     return view('app.sosial.create', compact('title'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'kategori' => 'required|in:masjid,sosial',
    //         'jumlah' => 'required|numeric',
    //         'tanggal' => 'required|date',
    //         'keterangan' => 'required',
    //         'bukti' => 'required|mimes:jpeg,png,jpg',
    //     ]);

    //     DB::beginTransaction();
    //     try {
    //         $data = Infaq::create([
    //             'nama' => $request->nama,
    //             'kategori' => $request->kategori,
    //             'jumlah' => $request->jumlah,
    //             'tanggal' => $request->tanggal,
    //             'keterangan' => $request->keterangan,
    //             'user_id' => auth()->user()->id,
    //             'bukti' => $request->file('bukti')->store('bukti/infaq'),
    //             'status' => 0,
    //         ]);

    //         DB::commit();
    //         return to_route('masjid.show', $data)->withSuccess('Data berhasil ditambahkan!');
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //         DB::rollBack();
    //     }
    // }

    public function show(string $id)
    {
        $title = $this->title;
        $data = Infaq::findOrFail($id);
        return view('app.sosial.show', compact('title', 'data'));
    }

    public function edit(string $id)
    {
        $title = $this->title;
        $data = Infaq::findOrFail($id);
        return view('app.sosial.edit', compact('data', 'title'));
    }

    public function update(Request $request, string $id)
    {
        $datas = $request->validate([
            'status' => ['required', 'in:1,2']
        ]);

        DB::beginTransaction();
        try {

            $data = Infaq::findOrFail($id);
            $data->update($datas);

            DB::commit();
            return to_route('masjid.index')->withSuccess('Data berhasil disimpan!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('masjid.index')->withError('Data gagal disimpan!');
        }
    }

    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {

            Infaq::findOrFail($id)->delete();

            DB::commit();
            return to_route('masjid.index')->withSuccess('Data berhasil dihapus!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('masjid.index')->withError('Data gagal dihapus!');
        }
    }
}
