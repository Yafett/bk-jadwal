<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
        $jadwal = DB::table('tb_jadwal')->get();

        return view('guru.home', compact('jadwal'));
    }

    public function tambah()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        // dd($request);

$date=date_create($request->tanggal);
$hari = date_format($date,"l");
// dd($a);

        DB::table('tb_jadwal')->insert([
            'nama_guru' => $request->nama_guru,
            'hari' => $hari,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'status' => 'a',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        return redirect()->route('guru.home');
    }

    public function sudah($id)
    {
        DB::table('tb_jadwal')->where('id_jadwal', $id)->update([
            'status' => 'c'
        ]);

        return redirect()->route('guru.home');
    }

    public function batal($id)
    {
        DB::table('tb_jadwal')->where('id_jadwal', $id)->update([
            'status' => 'd'
        ]);

        return redirect()->route('guru.home');
    }
}
