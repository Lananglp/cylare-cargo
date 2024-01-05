<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Item;
use App\Models\Stock;
use App\Models\User;
use App\Models\History;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users'));
    }



    public function create()
    {
        return view('users.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'address' => ['required'],
            'phone' => ['required'],
            'password' => ['required'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $logs = new History;
        $logs->name_items = $request->input('name');
        $logs->info = 'New account';
        $logs->old_qty = 0;
        $logs->new_qty = 0;
        $logs->total_qty = 0;
        $logs->save();

        return redirect('/users')->with('warning', 'Successfully create account !');
    }



    public function Register()
    {
        return view('register');
    }



    public function storeRegister(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'address' => ['required'],
            'phone' => ['required'],
            'password' => ['required'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $logs = new History;
        $logs->name_items = $request->input('name');
        $logs->info = 'New account';
        $logs->old_qty = 0;
        $logs->new_qty = 0;
        $logs->total_qty = 0;
        $logs->save();

        return redirect('/login')->with('warning', 'Successfully create account !');
    }

    public function destroy($id)
    {
        $users = User::find($id);

        $logs = new History;
        $logs->name_items = $users->name;
        $logs->info = 'Drop account';
        $logs->old_qty = 0;
        $logs->new_qty = 0;
        $logs->total_qty = 0;
        $logs->save();
        
        $users->delete();

        return redirect('/users')->with('warning', 'Successfully delete account !');
    }
}
