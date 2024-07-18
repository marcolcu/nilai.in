<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
  
        $users = User::all();

        return response()->json([
            'users: ' => $users,
        ], 200);
    }

    public function rapor($id){
        $rapor = User::join('progressujians', 'users.id', '=', 'progressujians.IDUser')
        ->join('ujians', 'progressujians.IDUjian', '=', 'ujians.id')
        ->join('matapelajarans', 'ujians.IDMataPelajaran', '=', 'matapelajarans.id')
        ->join('kelases', 'users.IDKelas', '=', 'kelases.id')
        ->where('users.id', '=', $id)
        ->select('users.id', 'users.nama', 'users.email', 'matapelajarans.nama AS nama_mapel', 'ujians.nama AS nama_ujian', 'progressujians.nilai', 'progressujians.catatan',
        DB::raw("SUBSTRING(ujians.nama, 1, 3) as tipe_ujian"))
        ->get();


        return response()->json([
            'rapor: ' => $rapor,
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

            $users = User::all();
            foreach ($users as $user1) {
                if ($input['email'] == $user1->email) {
                    return response([
                        'Message: ' => 'Email already used, please input another email',
                    ], 500);
                }
            }

            $user->email = $input['email'];
            $user->nama = $input['nama'];
            $user->peran = $input['peran'];
            $user->password = bcrypt($input['password']);
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
