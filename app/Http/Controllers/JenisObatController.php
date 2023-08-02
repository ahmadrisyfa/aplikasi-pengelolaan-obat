<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisObat;
class JenisObatController extends Controller
{
    public function index()
    {
        $data = JenisObat::paginate(10);
        return view('page.jenis_obat.index',compact('data'));
    }
    public function read()
    {
        $data = JenisObat::all();
        return view('page.jenis_obat.read')->with([
            'data' => $data
        ]);
    }
    public function create()
    {
        return view('page.jenis_obat.create');
    }
    public function store(Request $request)
    {
        $data['nama_jenis_obat'] = $request->nama_jenis_obat;
        JenisObat::insert($data);
    }
    public function edit($id)
    {
        $data = JenisObat::findOrfail($id);
        return view('page.jenis_obat.edit')->with([
            'data' => $data
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = jenisObat::findOrFail($id);
        $data->nama_jenis_obat = $request->nama_jenis_obat;
        $data->save();
    }
    public function destroy($id)
    {
        $data = JenisObat::findOrFail($id);
        $data->delete();
    }
}
