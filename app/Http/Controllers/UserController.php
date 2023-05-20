<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('user.index', [
            'users' => User::all(),
        ]);
    }

    public function create(): View
    {
        return view('user.create');
    }

    public function store(UserCreateRequest $request): RedirectResponse
    {
        User::create($request->validated());

        toastr()->success('User created');

        return redirect()->route('user.index');
    }

    public function show(User $user): View
    {
        return view('user.show', [
            'user' => $user,
        ]);
    }

    public function update(UserUpdateRequest $request, User $user): RedirectResponse
    {
        $password = $request->get('password') ? bcrypt($request->get('password')) : $user->password;

        $user->update(array_merge($request->validated(), ['password' => $password]));

        toastr()->success('User updated');

        return back();
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        toastr()->success('User deleted');

        return redirect()->route('user.index');
    }
}
