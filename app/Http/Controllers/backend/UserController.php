<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
  
        $users = User::all();

        return response()->json([
            'users: ' => $users,
        ], 200);
    }

    public function show(string $id){

        $user = user::find($id);

        if ($user){
            return response()->json([
                'Message: ' => 'users found.',
                'user: ' => $user
            ], 200);

        }else {
            return response([
                'Message: ' => 'We could not find the user.',
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        $user = user::find($id);
        if($user){

           $input = $request->validate([
                'nama' => ['required'],
                'email' => ['required'],
                'password' => ['required'],
                'peran' => ['required'],
                'IDKelas' => ['required'],
            ]);

            $user->nama = $input['nama'];
            $user->email = $input['email'];
            $user->password = bcrypt($input['password']);
            $user->peran = $input['peran'];
            $user->IDKelas = $input['IDKelas'];

            if ($user->save()){
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'user created: ' => $user
                ], 200);
            }else {
                return response(['Message: ' => 'We could not update the user.'], 500);
            }
        }else {
            return response([
                'Message: ' => 'We could not find the user.',
            ], 500);
        }
    }

    public function destroy(string $id){
        $user = user::find($id);

        if($user){
            if ($user->delete()){
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            }else {
                return response(['Message: ' => 'We could not deleted the user.'], 500);
            }
        }else {

            return response([
                'Message: ' => 'We could not find the user.',
            ], 500);
        }
    }
}
