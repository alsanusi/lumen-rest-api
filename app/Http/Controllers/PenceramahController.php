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

    public function update(Request $request, $id) {
        $penceramahData = Penceramah::find($id);

        if(!$penceramahData) {
            return response()->json([], 404);
        }

        $this->validate($request, [
            'nama' => 'string',
            'status' => 'string'
        ]);

        $data = $request->all();

        $penceramahData->fill($data);
        $penceramahData->save();

        return response()->json($penceramahData);
    }

    public function delete(Request $request, $id){
        $penceramahData = Penceramah::find($id);

        if(!$penceramahData) {
            return response()->json([], 404);
        }

        $penceramahData->delete();
        
        return response()->json(['message' => 'Data Terhapus!']);
    }
}
