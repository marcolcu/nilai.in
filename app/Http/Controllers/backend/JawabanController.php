<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    //
    public function index(){
  
        $jawabans = Jawaban::all();

        return response()->json([
            'jawabans: ' => $jawabans,
        ], 200);
    }

    public function jawawbanSyncProgressUjianSoal(){
        $jawabanProgressUjianSoal = Jawaban::join('progressujians', 'jawabans.IDProgressUjian', '=', 'progressujians.id')
        ->join('soals', 'soals.id', '=', 'jawabans.IDSoal')
        ->select('soals.tipe AS tipe_soal', 'soals.pertanyaan AS pertanyaan', 'soals.pilihan1 AS pilihan1', 'soals.pilihan2 AS pilihan2', 'soals.pilihan3 AS pilihan3',
        'soals.pilihan4 AS pilihan4', 'soals.pilihan5 AS pilihan5', 'soals.kunci AS kunci', 'jawabans.jawaban AS jawaban_murid', 'jawabans.jawaban AS jawaban_murid', 'progressujians.*')
        ->get();

        return response()->json([
            'jawabanProgressUjianSoal: ' => $jawabanProgressUjianSoal,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'jawaban' => ['required'],
            'IDProgressUjian' => ['required'],
            'IDSoal' => ['required'],
        ]);
        $jawaban = new Jawaban();

        $jawaban->jawaban = $input['jawaban'];
        $jawaban->IDProgressUjian = $input['IDProgressUjian'];
        $jawaban->IDSoal = $input['IDSoal'];

        if ($jawaban->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'jawaban created: ' => $jawaban
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new jawabans.'], 500);
        }
    }

    public function show(string $id){

        $jawaban = jawaban::find($id);

        if ($jawaban){
            return response()->json([
                'Message: ' => 'jawabans found.',
                'jawaban: ' => $jawaban
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the jawaban.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $jawaban = jawaban::find($id);

        if($jawaban){

           $input = $request->validate([
                'jawaban' => ['required'],
                'IDProgressUjian' => ['required'],
                'IDSoal' => ['required'],
            ]);

            $jawaban->jawaban = $input['jawaban'];
            $jawaban->IDProgressUjian = $input['IDProgressUjian'];
            $jawaban->IDSoal = $input['IDSoal'];

            if ($jawaban->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'jawaban created: ' => $jawaban
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the jawaban.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the jawaban.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $jawaban = jawaban::find($id);

        if($jawaban){
            if ($jawaban->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the jawaban.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the jawaban.',
            ], 500);
        }
    }
}
