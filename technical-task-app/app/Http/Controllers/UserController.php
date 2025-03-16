<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(10);

        return view('users.index')->with('users', $users);

    }

    public function create() {
        
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'unique:users|email:rfc,dns',
            'date_of_birth' => [
                'required',
                Rule::date()->beforeToday(),
            ],
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->date_of_birth = $request->date_of_birth;

        $user->save();

        return redirect()->route('users.index');
    }

}