<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::latest()->paginate(5);

        
        return new UserResource(true, 'List Data User', $users);
    }
    
    public function store(Request $request)
    {
        //define validation rules
        $rules=[
            'email' => 'required|email|unique:users',
            'name'  => 'required|alpha:ascii',
            'password' => ['required', 'string', 'min:6', 'regex:/[0-9]/', 'confirmed'],
        ];
        
        $validator = Validator::make($request->all(), $rules);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $user = User::create([
            'email'     => $request->email,
            'name'     => $request->name,
            'password'   => $request->password,
        ]);

        //return response
        return new UserResource(true, 'Data User Berhasil Ditambahkan!', $user);
    }
    
    public function show($id)
    {
        //find post by ID
        $user = User::find($id);

        //return single post as a resource
        return new UserResource(true, 'Detail Data User!', $user);
    }

    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'name'  => 'required|alpha:ascii',
            'password' => ['required', 'string', 'min:6', 'regex:/[0-9]/', 'confirmed'],
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $user = User::find($id);

        //update post with new image
        $user->update([
            'email'     => $request->email,
            'name'     => $request->name,
            'password'   => bcrypt($request->password),
        ]);

        //return response
        return new UserResource(true, 'Data User Berhasil Diubah!', $user);
    }
    
    public function destroy($id)
    {

        //find post by ID
        $user = User::find($id);

        //delete post
        $user->delete();

        //return response
        return new UserResource(true, 'Data User Berhasil Dihapus!', null);
    }
}
