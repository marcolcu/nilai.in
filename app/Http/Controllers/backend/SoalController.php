<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    //
    public function index(){
  
        $soals = Soal::all();

        return response()->json([
            'soals: ' => $soals,
        ], 200);
    }

    public function soalSyncUjian(){
        $soalUjian = Soal::join('ujians', 'soals.IDUjian', '=', 'ujians.id')
        ->get();

        return response()->json([
            'soalUjian: ' => $soalUjian,
        ], 200);
    }


    public function store(Request $request){
        $input = $request->validate([
            'tipe' => ['required'],
            'pertanyaan' => ['required'],
            'kunci' => ['required'],
            'pilihan1' => ['required'],
            'pilihan2' => ['required'],
            'pilihan3' => ['required'],
            'pilihan4' => ['required'],
            'pilihan5' => ['required'],
            'IDUjian' => ['required'],
        ]);
        $soal = new Soal();

        $soal->pertanyaan = $input['pertanyaan'];
        $soal->benar = $input['benar'];
        $soal->pilihan1 = $input['pilihan1'];
        $soal->pilihan2 = $input['pilihan2'];
        $soal->pilihan3 = $input['pilihan3'];
        $soal->pilihan4 = $input['pilihan4'];
        $soal->pilihan5 = $input['pilihan5'];
        $soal->IDUjian = $input['IDUjian'];

        if ($soal->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'soal created: ' => $soal
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new soals.'], 500);
        }
    }

    public function show(string $id){

        $soal = soal::find($id);

        if ($soal){
            return response()->json([
                'Message: ' => 'soals found.',
                'soal: ' => $soal
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the soal.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $soal = soal::find($id);

        if($soal){

           $input = $request->validate([
                'pertanyaan' => ['required'],
                'benar' => ['required'],
                'pilihan1' => ['required'],
                'pilihan2' => ['required'],
                'pilihan3' => ['required'],
                'pilihan4' => ['required'],
                'pilihan5' => ['required'],
                'IDUjian' => ['required'],
            ]);

            $soal->pertanyaan = $input['pertanyaan'];
            $soal->benar = $input['benar'];
            $soal->pilihan1 = $input['pilihan1'];
            $soal->pilihan2 = $input['pilihan2'];
            $soal->pilihan3 = $input['pilihan3'];
            $soal->pilihan4 = $input['pilihan4'];
            $soal->pilihan5 = $input['pilihan5'];
            $soal->IDUjian = $input['IDUjian'];

            if ($soal->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'soal created: ' => $soal
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the soal.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the soal.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $soal = soal::find($id);

        if($soal){
            if ($soal->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the soal.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the soal.',
            ], 500);
        }
    }
}
