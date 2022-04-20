<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuridController extends Controller
{
    public function index()
    {
        return view('murid.home');
    }

    public function jadwal()
    {
        $jadwal = DB::table('tb_jadwal')->get();

        $senin = DB::table('tb_jadwal')->where('hari', 'Monday')->get();

        $selasa = DB::table('tb_jadwal')->where('hari', 'Tuesday')->get();

        $rabu = DB::table('tb_jadwal')->where('hari', 'Wednesday')->get();

        $kamis = DB::table('tb_jadwal')->where('hari', 'Thursday')->get();

        $jumat = DB::table('tb_jadwal')->where('hari', 'Friday')->get();

        $sabtu = DB::table('tb_jadwal')->where('hari', 'Saturday')->get();

        $minggu = DB::table('tb_jadwal')->where('hari', 'Sunday')->get();

        return view('murid.jadwal', compact('jadwal', 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'));
    }

    public function ikuti($id)
    {
        $jadwal = DB::table('tb_jadwal')->where('id_jadwal', $id)->get();

        return view('murid.create', compact('jadwal'));
    }

    public function reservasi(Request $request)
    {

        // dd($request);

        DB::table('tb_reservasi')->insert([
            'nama_guru' => $request->nama_guru,
            'nama_murid' => $request->nama_murid,
            'jam' => $request->jam,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('tb_jadwal')->where('id_jadwal', $request->id)->update([
            'status' => 'b'
        ]);

        return redirect()->route('murid.jadwal');
    }

}
