<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('user.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('user.create', [
            'companies' => Company::query()->select('id', 'name')->get() ?? null,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserCreateRequest $request
     * @return RedirectResponse
     */
    public function store(UserCreateRequest $request)
    {
        User::create($request->validated());

        toastr()->success('User created');

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return View
     */
    public function show(User $user)
    {
        return view('user.show', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserUpdateRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        if ($request->get('delete'))
            return $this->destroy($user);

        $password = $request->get('password') ? bcrypt($request->get('password')) : $user->password;

        $user->update(array_merge($request->validated(), ['password' => $password]));

        toastr()->success('User updated');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        toastr()->success('User deleted');

        return redirect()->route('user.index');
    }
}
