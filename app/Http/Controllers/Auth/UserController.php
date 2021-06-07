<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    public function editakun()
    {
        return view('user.editakun');
    }

    public function updateakun(Request $request)
    {
        // $user = User::where('id', $id)->first();

        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'required',
        ]);

        if (!$request->file('image')) {
            $namaimg = auth()->user()->image;
        } else {
            $namaimg = auth()->user()->id . '_' . $request->username . '.' . $request->file('image')->getClientOriginalExtension();

            //// Simpan image ke storage public ////
            $request->file('image')->move(public_path() . '/img/profile', $namaimg);
        }

        // dd($namaimg);

        $currentpassword = auth()->user()->password;

        if (Hash::check($request->password, $currentpassword)) {
            auth()->user()->update([
                'name' => $request->nama,
                'username' => $request->username,
                'image' => $namaimg,
                'email' => $request->email,
            ]);
            return redirect()->route('user.index')->with('massage', 'Data anda berhasil diubah');
        } else {
            return back()->withErrors(['password' => 'Password anda salah']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change()
    {
        return view('auth.change-password');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => ['required', 'confirmed', 'min:3'],
        ]);

        $currentpassword = auth()->user()->password;
        $old_password = request('old_password');

        if (Hash::check($old_password, $currentpassword)) {
            auth()->user()->update([
                // 'password' => Hash::make(request('password')), // or
                'password' => bcrypt(request('password')),
            ]);
            return redirect()->route('user.index')->with('massage', 'You are change your password');
        } else {
            return back()->withErrors(['old_password' => 'You have to fill your old password']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $user = User::where('id', '!=', 1)->orderByDesc('created_at')->get();
        return view('user.showall', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function editrole(User $user)
    {
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name')->all();
        return view('user.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updaterole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required'
        ]);

        if (DB::table('model_has_roles')->where('model_id', $user->id)->delete()) {
            $user->assignRole($request->role);
        } else {
            $user->assignRole($request->role);
        }

        return redirect()->route('user.showall')->with('massage', 'User dengan nama ' . $user->name . ' berhasi Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
