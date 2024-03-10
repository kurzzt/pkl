<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        $users = User::query();
        
        if (request()->has('search')) {
            $searchTerm = request('search');
            $users = $users->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('username', 'like', '%' . $searchTerm . '%')
                    ->orWhere('email', 'like', '%' . $searchTerm . '%');
            });
        }
        
        $users = $users->whereNotIn('id', [1])->paginate(5);

        return view('admin.users.list', ['users' => $users]);
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'min:8|confirmed',
        ]);

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        $newUser = User::create($data);
        return redirect(route('users.index'));
    }

    public function show(User $user){
        $user_activity = ActivityLog::where('user_id', $user->id)->get();
        return view('admin.users.show', ['user' => $user, 'user_activity' => $user_activity]);
    }

    public function edit(User $user){
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            // GUIDE: https://stackoverflow.com/questions/73056392/how-to-edit-user-email-in-laravel
            'username' => ['required', 'string', Rule::unique('users', 'username')->ignore($user)],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user)],
            'new_password' => $request->filled('new_password') ? 'required|min:8|confirmed' : '',
            'status' => 'required|boolean',
        ]);

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->new_password),
            'status' => $request->status,
        ];

        $user->update($data);
        return redirect(route('users.index'))->with('success', 'User Updated Succesffully');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect(route('users.index'))->with('success', 'User deleted Succesffully');
    }
}
