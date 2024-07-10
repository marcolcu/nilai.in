<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProgressUjian;
use Illuminate\Http\Request;

class ProgressUjianController extends Controller
{
    //
    public function index(){
  
        $progressujians = ProgressUjian::all();

        return response()->json([
            'progressujians: ' => $progressujians,
        ], 200);
    }

    public function store(Request $request){
        $input = $request->validate([
            'IDUjian' => ['required'],
            'nilai' => ['required'],
            'notes' => ['required'],
            'IDUser' => ['required'],
        ]);
        $progressujian = new ProgressUjian();

        $progressujian->IDUjian = $input['IDUjian'];
        $progressujian->nilai = $input['nilai'];
        $progressujian->notes = $input['notes'];
        $progressujian->IDUser = $input['IDUser'];

        if ($progressujian->save()){
            return response()->json([
                'Message: ' => 'Success!',
                'progressujian created: ' => $progressujian
            ], 200);
        }else {
            return response(['Message: ' => 'We could not create a new progressujians.'], 500);
        }
    }

    public function show(string $id){

        $progressujian = progressujian::find($id);

        if ($progressujian){
            return response()->json([
                'Message: ' => 'progressujians found.',
                'progressujian: ' => $progressujian
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the progressujian.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $progressujian = progressujian::find($id);

        if($progressujian){

           $input = $request->validate([
                'IDUjian' => ['required'],
                'Nilai' => ['required'],
                'Notes' => ['required'],
                'IDUser' => ['required'],
            ]);
                
            $progressujian->IDUjian = $input['IDUjian'];
            $progressujian->nilai = $input['nilai'];
            $progressujian->notes = $input['notes'];
            $progressujian->IDUser = $input['IDUser'];

            if ($progressujian->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'progressujian created: ' => $progressujian
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the progressujian.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the progressujian.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $progressujian = progressujian::find($id);

        if($progressujian){
            if ($progressujian->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the progressujian.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the progressujian.',
            ], 500);
        }
    }
}
