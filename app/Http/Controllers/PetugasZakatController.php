<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasZakatController extends Controller
{
    public $title = "Petugas Zakat";

    public function index()
    {
        $title = $this->title;
        $datas = User::where('role', 'petugas')->get();
        return view('app.petugaszakat.index', compact('datas', 'title'));
    }

    public function create()
    {
        $title = $this->title;
        return view('app.petugaszakat.create', compact('title'));
    }

    public function store(Request $request)
    {
        $datas = $request->validate([
            'nama' => ['required'],
            'username' => ['required', 'unique:users,username'],
        ]);

        DB::beginTransaction();
        try {
            User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => Hash::make('petugas123###'),
                'role' => 'petugas',
            ]);

            DB::commit();
            return to_route('petugaszakat.index')->withSuccess('Data berhasil disimpan!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('petugaszakat.index')->withError('Data gagal disimpan!');
        }
    }

    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $data = User::findOrFail($id)->update([
                'password' => Hash::make('petugas123###'),
            ]);

            DB::commit();
            return to_route('petugaszakat.index')->withSuccess('Data berhasil disimpan!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('petugaszakat.index')->withError('Data gagal disimpan!');
        }
    }

    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            User::findOrFail($id)->delete();

            DB::commit();
            return to_route('petugaszakat.index')->withSuccess('Data berhasil dihapus!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('petugaszakat.index')->withError('Data gagal dihapus!');
        }
    }
}
