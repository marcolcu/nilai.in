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
        ->join('matapelajarans', 'matapelajarans.id', '=', 'ujians.IDMataPelajaran')
        ->select('soals.pertanyaan AS pertanyaan', 'soals.pilihan1 AS pilihan1', 'soals.pilihan2 AS pilihan2', 'soals.pilihan3 AS pilihan3',
        'soals.pilihan4 AS pilihan4', 'soals.pilihan5 AS pilihan5', 'soals.kunci AS kunci', 'ujians.nama AS nama_ujian', 'ujians.deskripsi AS deskripsi_ujian',
        'ujians.kkm AS kkm_ujian', 'matapelajarans.nama AS nama_mapel', 'matapelajarans.deskripsi AS deskripsi_mapel')
        ->get();

        return response()->json([
            'soalUjian: ' => $soalUjian,
        ], 200);
    }


    public function store(Request $request){
        // dd($request);
        $input = $request->validate([
            'tipe' => ['required'],
            'pertanyaan' => ['required'],
            'kunci' => ['required'],
            'IDUjian' => ['required'],
        ]);
        $soal = new Soal();

        $soal->pertanyaan = $input['pertanyaan'];           //pakai $input agar validatornya terpakai
        $soal->tipe = $input['tipe'];
        $soal->kunci = $input['kunci'];
        $soal->pilihan1 = $request->pilihan1;               //pakai $request agar masi dapat berlanjut tanpa harus validator
        $soal->pilihan2 = $request->pilihan2;
        $soal->pilihan3 = $request->pilihan3;
        $soal->pilihan4 = $request->pilihan4;
        $soal->pilihan5 = $request->pilihan5;
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
