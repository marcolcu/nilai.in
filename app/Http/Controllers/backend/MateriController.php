<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    //
    public function index(){
  
        $materis = Materi::all();

        return response()->json([
            'materis: ' => $materis,
        ], 200);
    }


    public function materiSyncMataPelajaran(){
        $materiMataPelajaran = Materi::join('matapelajarans', 'materis.IDMataPelajaran', '=', 'matapelajarans.id')->get();

        return response()->json([
            '$materiMataPelajaran: ' => $materiMataPelajaran,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'judul' => ['required'],
            'deskripsi' => ['required'],
            'konten' => ['required'],
            'tipe' => ['required'],
            'IDMataPelajaran' => ['required'],
        ]);
        $materi = new Materi();

        $materi->judul = $input['judul'];
        $materi->deskripsi = $input['deskripsi'];
        $materi->konten = $input['konten'];
        $materi->tipe = $input['tipe'];
        $materi->IDMataPelajaran = $input['IDMataPelajaran'];

        if ($materi->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'materi created: ' => $materi
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new materis.'], 500);
        }
    }

    public function show(string $id){

        $materi = Materi::find($id);

        if ($materi){
            return response()->json([
                'Message: ' => 'materis found.',
                'Materi: ' => $materi
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the materi.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $materi = Materi::find($id);

        if($materi){

           $input = $request->validate([
                'judul' => ['required'],
                'deskripsi' => ['required'],
                'konten' => ['required'],
                'tipe' => ['required'],
                'IDMataPelajaran' => ['required'],
            ]);

            $materi->judul = $input['judul'];
            $materi->deskripsi = $input['deskripsi'];
            $materi->konten = $input['konten'];
            $materi->tipe = $input['tipe'];
            $materi->IDMataPelajaran = $input['IDMataPelajaran'];

            if ($materi->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'materi created: ' => $materi
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the materi.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the materi.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $materi = Materi::find($id);

        if($materi){
            if ($materi->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the materi.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the materi.',
            ], 500);
        }
    }
}
