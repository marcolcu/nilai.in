<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProgressUjian;
use Illuminate\Http\Request;

class ProgressUjianController extends Controller
{
    //
    public function index(){
  
        $progressujians = ProgressUjian::all();

        return response()->json([
            'progressujians: ' => $progressujians,
        ], 200);
    }

    public function progressUjianSyncUjianUser(){
        $progressUjianUser = ProgressUjian::join('ujians', 'ujians.id', '=', 'progressujians.IDUjian')
        ->join('users', 'users.id', '=', 'progressujians.IDUser')
        ->select('users.id AS id_murid', 'users.nama AS nama_murid','users.email AS email','users.peran AS peran',
        'ujians.id AS id_ujian', 'ujians.nama AS nama_ujian', 'ujians.deskripsi AS deskripsi_ujian', 'ujians.kkm AS kkm_ujian',
        'progressujians.id AS id_progressujian', 'progressujians.nilai','progressujians.catatan AS catatan_ujian')
        ->get();

        return response()->json([
            'progressUjianUser: ' => $progressUjianUser,
        ], 200);
    }

    public function progressUjianSyncUjianByUjianID(string $id){
        $progressUjianbyID = ProgressUjian::join('ujians', 'ujians.id', '=', 'progressujians.IDUjian')
        ->join('users', 'users.id', '=', 'progressujians.IDUser')
        ->select('progressujians.*', 'users.nama AS nama_murid','users.email AS email','users.peran AS peran',
        'ujians.nama AS nama_ujian', 'ujians.deskripsi AS deskripsi_ujian', 'ujians.kkm AS kkm_ujian')
        ->where('ujians.id', '=', $id)
        ->get();

        return response()->json([
            'progressUjianbyID: ' => $progressUjianbyID,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'IDUjian' => ['required'],
            'nilai' => ['required'],
            'catatan' => ['required'],
            'IDUser' => ['required'],
        ]);
        $progressujian = new ProgressUjian();

        $progressujian->IDUjian = $input['IDUjian'];
        $progressujian->nilai = $input['nilai'];
        $progressujian->catatan = $input['catatan'];
        $progressujian->IDUser = $input['IDUser'];

        if ($progressujian->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'progressujian created: ' => $progressujian
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new progressujians.'], 500);
        }
    }

    public function show(string $id){

        $progressujian = progressujian::find($id);

        if ($progressujian){
            return response()->json([
                'Message: ' => 'progressujians found.',
                'progressujian: ' => $progressujian
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the progressujian.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $progressujian = progressujian::find($id);

        if($progressujian){
           $input = $request->validate([
                'IDUjian' => ['required'],
                'nilai' => ['required'],
                'catatan' => ['required'],
                'IDUser' => ['required'],
            ]);
                
            $progressujian->IDUjian = $input['IDUjian'];
            $progressujian->nilai = $input['nilai'];
            $progressujian->catatan = $input['catatan'];
            $progressujian->IDUser = $input['IDUser'];

            if ($progressujian->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'progressujian created: ' => $progressujian
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the progressujian.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the progressujian.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $progressujian = progressujian::find($id);

        if($progressujian){
            if ($progressujian->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the progressujian.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the progressujian.',
            ], 500);
        }
    }
}
