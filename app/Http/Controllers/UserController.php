<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        return view('page.user.index');
    }
    public function read()
    {
        $data = User::all();
        return view('page.user.read')->with([
            'data' => $data
        ]);
    }
    public function edit($id)
    {
        $data = User::findOrfail($id);
        return view('page.user.edit')->with([
            'data' => $data
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->is_active = $request->is_active;
        $data->save();
    }
}
