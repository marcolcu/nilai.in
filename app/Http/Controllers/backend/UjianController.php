<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    //
    public function index(){
  
        $ujians = Ujian::all();

        return response()->json([
            'ujians: ' => $ujians,
        ], 200);
    }

    public function ujianSyncMataPelajaran(){
  
        $ujians = Ujian::join('matapelajarans', 'ujians.IDMataPelajaran', '=', 'matapelajarans.id')
        ->select('matapelajarans.nama AS mapel', 'matapelajarans.deskripsi AS deskripsi_mapel', 'ujians.*')
        ->get();

        return response()->json([
            'ujians: ' => $ujians,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'nama' => ['required'],
            'deskripsi' => ['required'],
            'kkm' => ['required'],
            'IDMataPelajaran' => ['required'],
        ]);
        $ujian = new Ujian();

        $ujian->nama = $input['nama'];
        $ujian->deskripsi = $input['deskripsi'];
        $ujian->kkm = $input['kkm'];
        $ujian->IDMataPelajaran = $input['IDMataPelajaran'];

        if ($ujian->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'ujian created: ' => $ujian
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new ujians.'], 500);
        }
    }

    public function show(string $id){

        $ujian = ujian::find($id);

        if ($ujian){
            return response()->json([
                'Message: ' => 'ujians found.',
                'ujian: ' => $ujian
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the ujian.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $ujian = ujian::find($id);

        if($ujian){

           $input = $request->validate([
                'nama' => ['required'],
                'deskripsi' => ['required'],
                'kkm' => ['required'],
                'IDMataPelajaran' => ['required'],
            ]);

            $ujian->nama = $input['nama'];
            $ujian->deskripsi = $input['deskripsi'];
            $ujian->kkm = $input['kkm'];
            $ujian->IDMataPelajaran = $input['IDMataPelajaran'];

            if ($ujian->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'ujian created: ' => $ujian
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the ujian.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the ujian.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $ujian = ujian::find($id);

        if($ujian){
            if ($ujian->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the ujian.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the ujian.',
            ], 500);
        }
    }
}
