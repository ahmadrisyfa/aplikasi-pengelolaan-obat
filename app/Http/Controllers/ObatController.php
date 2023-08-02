<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\JenisObat;

class ObatController extends Controller
{
    public function index()
    {
      
        return view('page.obat.index');
    }
    public function read()
    {
        $data = Obat::all();
        return view('page.obat.read')->with([
            'data' => $data
        ]);
    }
    public function create()
    {
        $jenis_obat = JenisObat::all();
        return view('page.obat.create')->with([
            'jenis_obat' => $jenis_obat
        ]);
    }
    public function store(Request $request)
    {
        $data['id_jenis_obat'] = $request->id_jenis_obat;
        $data['nama_obat'] = $request->nama_obat;
        $data['satuan'] = $request->satuan;
        $data['harga'] = $request->harga;
        $data['stok'] = $request->stok;
        $data['tgl_exp'] = $request->tgl_exp;

        Obat::insert($data);
    }
    public function edit($id)
    {
        $data = Obat::findOrfail($id);
        $jenis_obat = JenisObat::all();

        return view('page.obat.edit')->with([
            'data' => $data,
            'jenis_obat' => $jenis_obat
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = Obat::findOrFail($id);
        $data->id_jenis_obat = $request->id_jenis_obat;
        $data->nama_obat = $request->nama_obat;
        $data->satuan = $request->satuan;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->tgl_exp = $request->tgl_exp;
        $data->save();
    }
    public function destroy($id)
    {
        $data = Obat::findOrFail($id);
        $data->delete();
    }
}
