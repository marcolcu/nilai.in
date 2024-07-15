<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\KelasDetail;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    //
    public function index(){
  
        $matapelajarans = MataPelajaran::all();

        return response()->json([
            'matapelajarans: ' => $matapelajarans,
        ], 200);
    }

    public function materiSyncKelas(){
        $mataPelajaranKelas = MataPelajaran::join('kelasdetails', 'matapelajarans.id', '=', 'kelasdetails.IDMataPelajaran')->join('kelases', 'kelases.id', '=', 'kelasdetails.IDKelas')
        ->get();

        return response()->json([
            'mataPelajaranKelas: ' => $mataPelajaranKelas,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'nama' => ['required'],
            'deskripsi' => ['required'],
        ]);
        $matapelajaran = new MataPelajaran();

        $matapelajaran->nama = $input['nama'];
        $matapelajaran->deskripsi = $input['deskripsi'];

        if ($matapelajaran->save()){
            $idMapel = $matapelajaran->id;
            if($request->IDKelas){
                $kelasdetail = new KelasDetail();

                $kelasdetail->IDMataPelajaran = $idMapel;
                $kelasdetail->IDKelas = $request->IDKelas;

                $kelasdetail->save();
            }
            return response()->json([
                'Message: ' => 'Success!',
                'matapelajaran created: ' => $matapelajaran
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new matapelajarans.'], 500);
        }
    }

    public function show(string $id){

        $matapelajaran = matapelajaran::find($id);

        if ($matapelajaran){
            return response()->json([
                'Message: ' => 'matapelajarans found.',
                'matapelajaran: ' => $matapelajaran
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the matapelajaran.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $matapelajaran = matapelajaran::find($id);

        if($matapelajaran){

           $input = $request->validate([
                'nama' => ['required'],
                'deskripsi' => ['required'],
            ]);
                
            $matapelajaran->nama = $input['nama'];
            $matapelajaran->deskripsi = $input['deskripsi'];
            $matapelajaran->IDKelas = $input['IDKelas'];

            if ($matapelajaran->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'matapelajaran created: ' => $matapelajaran
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the matapelajaran.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the matapelajaran.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $matapelajaran = matapelajaran::find($id);

        if($matapelajaran){
            if ($matapelajaran->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the matapelajaran.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the matapelajaran.',
            ], 500);
        }
    }
}
