<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Marketing;
use Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::OrderBy('id','desc')->paginate(5);
        return view('manage.users.index')->with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('display_name', 'id');
        return view('manage.users.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required|max:100',
            'email'=> 'required|email|max:120|unique:users',
            'password'=> 'required|confirmed|min:6',
            'roles'=> 'required'

        ]);

        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user['password'] = Hash::make($user['password']);
        $user->save();

        foreach ($request->input('roles') as $key => $value) {
          $user->attachRole($value);
        }
        return redirect()->route('users.index')->with('success', 'User berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('manage.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        $userRole = $user->roles->pluck('id')->toArray();

        return view('manage.users.edit')->with('user', $user)->with('roles', $roles)->with('userRole', $userRole);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name'=> 'required|max:100',
          'email'=> 'required|email|max:120|unique:users,email,'.$id,
          'password'=> 'required|confirmed|min:6',
          'roles'=> 'required'
        ]);

        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->password = $request->password;

         if (!empty($update['password'])) {
                  $update['password'] = Hash::make($update['password']);
         } else {
                  $update = array_except($update['password']);
         }

         $update->save();
         DB::table('role_user')->where('user_id',$id)->delete();


         foreach ($request->input('roles') as $key => $value) {
                $update->attachRole($value);
         }

         return redirect()->route('users.index')->with('success', 'User berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }
}
