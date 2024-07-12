<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\KelasDetail;
use Illuminate\Http\Request;

class KelasDetailController extends Controller
{
    //
    public function index(){
  
        $kelasdetails = KelasDetail::all();

        return response()->json([
            'kelasdetails: ' => $kelasdetails,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'IDMataPelajaran' => ['required'],
            'IDKelas' => ['required'],
        ]);
        $kelasdetail = new KelasDetail();

        $kelasdetail->IDMataPelajaran = $input['IDMataPelajaran'];
        $kelasdetail->IDKelas = $input['IDKelas'];

        if ($kelasdetail->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'kelasdetail created: ' => $kelasdetail
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new kelasdetails.'], 500);
        }
    }

    public function show(string $id){

        $kelasdetail = kelasdetail::find($id);

        if ($kelasdetail){
            return response()->json([
                'Message: ' => 'kelasdetails found.',
                'kelasdetail: ' => $kelasdetail
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the kelasdetail.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $kelasdetail = kelasdetail::find($id);

        if($kelasdetail){
           $input = $request->validate([
                'IDMataPelajaran' => ['required'],
                'IDKelas' => ['required'],
            ]);

            $kelasdetail->IDMataPelajaran = $input['IDMataPelajaran'];
            $kelasdetail->IDKelas = $input['IDKelas'];

            if ($kelasdetail->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'kelasdetail created: ' => $kelasdetail
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the kelasdetail.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the kelasdetail.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $kelasdetail = kelasdetail::find($id);

        if($kelasdetail){
            if ($kelasdetail->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the kelasdetail.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the kelasdetail.',
            ], 500);
        }
    }
}
