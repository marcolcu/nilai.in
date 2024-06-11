<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PenggunaanKursus;
use Illuminate\Http\Request;

class PenggunaanKursusController extends Controller
{
    //
    public function index(){
  
        $penggunaankursuses = PenggunaanKursus::all();

        return response()->json([
            'penggunaankursuses: ' => $penggunaankursuses,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'progres' => ['required'],
            'nilai' => ['required'],
            'user_id' => ['required'],
            'kursus_id' => ['required'],
        ]);
        $penggunaankursus = new PenggunaanKursus();

        $penggunaankursus->progres = $input['progres'];
        $penggunaankursus->nilai = $input['nilai'];
        $penggunaankursus->user_id = $input['user_id'];
        $penggunaankursus->kursus_id = $input['kursus_id'];

        if ($penggunaankursus->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'penggunaankursus created: ' => $penggunaankursus
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new penggunaankursuses.'], 500);
        }
    }

    public function show(string $id){

        $penggunaankursus = PenggunaanKursus::find($id);

        if ($penggunaankursus){
            return response()->json([
                'Message: ' => 'penggunaankursuses found.',
                'PenggunaanKursus: ' => $penggunaankursus
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the penggunaankursus.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $penggunaankursus = PenggunaanKursus::find($id);

        if($penggunaankursus){

           $input = $request->validate([
                'progres' => ['required'],
                'nilai' => ['required'],
                'user_id' => ['required'],
                'kursus_id' => ['required'],
            ]);

            $penggunaankursus->progres = $input['progres'];
            $penggunaankursus->nilai = $input['nilai'];
            $penggunaankursus->user_id = $input['user_id'];
            $penggunaankursus->kursus_id = $input['kursus_id'];

            if ($penggunaankursus->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'penggunaankursus created: ' => $penggunaankursus
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the penggunaankursus.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the penggunaankursus.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $penggunaankursus = PenggunaanKursus::find($id);

        if($penggunaankursus){
            if ($penggunaankursus->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the penggunaankursus.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the penggunaankursus.',
            ], 500);
        }
    }
}
