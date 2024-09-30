<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public $title = "Pengguna";
    public function index()
    {
        $title = $this->title;
        $datas = User::get();
        return view('app.pengguna.index', compact('datas', 'title'));
    }

    public function create()
    {
        $title = $this->title;
        return view('app.pengguna.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'username' => ['required', 'unique:users,username'],
            'role' => ['required'],
        ]);

        DB::beginTransaction();
        try {
            $pass = $request->role . '123###';
            $data = [
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => Hash::make($pass),
                'role' => $request->role,
            ];
            User::create($data);

            DB::commit();
            return to_route('pengguna.index')->withSuccess('Data berhasil disimpan!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('pengguna.index')->withError('Data gagal disimpan!');
        }
    }

    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $data = User::findOrFail($id);
            dd($data);
            $data->update([
                'password' => Hash::make('petugas123###'),
            ]);

            DB::commit();
            return to_route('pengguna.index')->withSuccess('Data berhasil disimpan!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('pengguna.index')->withError('Data gagal disimpan!');
        }
    }

    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {

            User::findOrFail($id)->delete();

            DB::commit();
            return to_route('pengguna.index')->withSuccess('Data berhasil dihapus!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return to_route('pengguna.index')->withError('Data gagal dihapus!');
        }
    }
}
