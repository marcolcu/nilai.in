<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function index(){
  
        $kelases = Kelas::all();

        return response()->json([
            'kelases: ' => $kelases,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'tingkat' => ['required'],
            'jurusan' => ['required'],
            'wali' => ['required'],
            'ketua' => ['required'],
        ]);
        $kelas = new Kelas();

        $kelas->tingkat = $input['tingkat'];
        $kelas->jurusan = $input['jurusan'];
        $kelas->wali = $input['wali'];
        $kelas->ketua = $input['ketua'];

        if ($kelas->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'kelas created: ' => $kelas
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new kelases.'], 500);
        }
    }

    public function show(string $id){

        $kelas = Kelas::find($id);

        if ($kelas){
            return response()->json([
                'Message: ' => 'kelases found.',
                'Kelas: ' => $kelas
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the kelas.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $kelas = Kelas::find($id);

        if($kelas){
           $input = $request->validate([
                'tingkat' => ['required'],
                'jurusan' => ['required'],
                'wali' => ['required'],
                'ketua' => ['required'],
            ]);
    
            $kelas->tingkat = $input['tingkat'];
            $kelas->jurusan = $input['jurusan'];
            $kelas->wali = $input['wali'];
            $kelas->ketua = $input['ketua'];

            if ($kelas->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'kelas created: ' => $kelas
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the kelas.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the kelas.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $kelas = Kelas::find($id);

        if($kelas){
            if ($kelas->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the kelas.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the kelas.',
            ], 500);
        }
    }
}
