<?php

namespace App\Http\Controllers;

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

    public function store(Request $request){
        $input = $request->validate([
            'pertanyaan' => ['required'],
            'benar' => ['required'],
            'salah1' => ['required'],
            'salah2' => ['required'],
            'salah3' => ['required'],
            'salah4' => ['required'],
            'kursus_id' => ['required'],
        ]);
        $ujian = new Ujian();

        $ujian->pertanyaan = $input['pertanyaan'];
        $ujian->benar = $input['benar'];
        $ujian->salah1 = $input['salah1'];
        $ujian->salah2 = $input['salah2'];
        $ujian->salah3 = $input['salah3'];
        $ujian->salah4 = $input['salah4'];
        $ujian->kursus_id = $input['kursus_id'];

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
                'pertanyaan' => ['required'],
                'benar' => ['required'],
                'salah1' => ['required'],
                'salah2' => ['required'],
                'salah3' => ['required'],
                'salah4' => ['required'],
                'kursus_id' => ['required'],
            ]);

            $ujian->pertanyaan = $input['pertanyaan'];
            $ujian->benar = $input['benar'];
            $ujian->salah1 = $input['salah1'];
            $ujian->salah2 = $input['salah2'];
            $ujian->salah3 = $input['salah3'];
            $ujian->salah4 = $input['salah4'];
            $ujian->kursus_id = $input['kursus_id'];

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
