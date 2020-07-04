<?php

namespace App\Http\Controllers;

// 
use App\Penceramah;
use Illuminate\Http\Request;

class PenceramahController extends Controller
{
    public function index() {
        $penceramahData = Penceramah::all();
        return response()->json($penceramahData);
    }

    public function show($id) {
        $penceramahData = Penceramah::find($id);
        return response()->json($penceramahData);
    }

    public function create(Request $request) {
        $this->validate($request, [
            'nama' => 'required|string',
            'status' => 'required|string'
        ]);
        
        $data = $request->all();
        $penceramahData = Penceramah::create($data);

        return response()->json($penceramahData);
    }
}
