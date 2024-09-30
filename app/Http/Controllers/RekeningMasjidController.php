<?php

namespace App\Http\Controllers;

use App\Models\RekeningZakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekeningMasjidController extends Controller
{
    public $title = "Rekening Masjid";

    public function index()
    {
        $title = $this->title;
        $datas = RekeningZakat::all();
        return view('app.rekmasjid.index', compact('datas', 'title'));
    }

    public function create()
    {
        $title = $this->title;
        return view('app.rekmasjid.create', compact('title'));
    }

    public function store(Request $request)
    {
        $datas = $request->validate([
            'no_rek' => ['required', 'numeric', 'unique:rek_zakat,no_rek'],
            'jenis_bank' => ['required'],
        ]);

        DB::beginTransaction();
        try {
            RekeningZakat::create($datas);

            DB::commit();
            return to_route('rekmasjid.index')->withSuccess('Data berhasil disimpan!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('rekmasjid.index')->withError('Data gagal disimpan!');
        }
    }

    public function edit(string $id)
    {
        $title = $this->title;
        $data = RekeningZakat::findOrFail($id);
        return view('app.rekmasjid.edit', compact('title', 'data'));
    }

    public function update(Request $request, string $id)
    {
        $datas = $request->validate([
            'no_rek' => ['required', 'numeric', 'unique:rek_zakat,no_rek,' . $id],
            'jenis_bank' => ['required'],
        ]);

        DB::beginTransaction();
        try {
            $data = RekeningZakat::findOrFail($id)->update($datas);

            DB::commit();
            return to_route('rekmasjid.index')->withSuccess('Data berhasil disimpan!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('rekmasjid.index')->withError('Data gagal disimpan!');
        }
    }

    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            RekeningZakat::findOrFail($id)->delete();

            DB::commit();
            return to_route('rekmasjid.index')->withSuccess('Data berhasil dihapus!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('rekmasjid.index')->withError('Data gagal dihapus!');
        }
    }
}
