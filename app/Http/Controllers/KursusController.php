<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    //
    public function index(){
  
        $kursuses = Kursus::all();

        return response()->json([
            'kursuses: ' => $kursuses,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'nama' => ['required'],
            'deskripsi' => ['required'],
            'jadwalmulai' => ['required'],
            'jadwalselesai' => ['required'],
        ]);
        $kursus = new Kursus();

        $kursus->nama = $input['nama'];
        $kursus->deskripsi = $input['deskripsi'];
        $kursus->jadwalmulai = $input['jadwalmulai'];
        $kursus->jadwalselesai = $input['jadwalselesai'];

        if ($kursus->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'kursus created: ' => $kursus
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new kursuses.'], 500);
        }
    }

    public function show(string $id){

        $kursus = Kursus::find($id);

        if ($kursus){
            return response()->json([
                'Message: ' => 'Kursuses found.',
                'Kursus: ' => $kursus
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the kursus.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $kursus = Kursus::find($id);

        if($kursus){

           $input = $request->validate([
                'nama' => ['required'],
                'deskripsi' => ['required'],
                'jadwalmulai' => ['required'],
                'jadwalselesai' => ['required'],
            ]);

            $kursus->nama = $input['nama'];
            $kursus->deskripsi = $input['deskripsi'];
            $kursus->jadwalmulai = $input['jadwalmulai'];
            $kursus->jadwalselesai = $input['jadwalselesai'];

            if ($kursus->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'kursus created: ' => $kursus
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the kursus.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the kursus.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $kursus = Kursus::find($id);

        if($kursus){
            if ($kursus->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the kursus.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the kursus.',
            ], 500);
        }
    }
}