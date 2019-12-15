<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest as UserRequest;
use App\Informations;
use App\Mail\UserMail;
use App\roles;
use App\User;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AccountController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $users = User::withTrashed()->get();

        return view('admin.listAccount', compact('users'));
    }

    /**
     * @param User $user
     * @return Factory|View
     */
    public function show(User $user)
    {
        $informations = Informations::where('user_id', $user->id)->first();

        $roles = roles::all();

        return view('admin.accountShow', compact('user', 'informations', 'roles'));
    }

    /**
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function updateRoles(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('listAccount')->with('info', 'Le role de l\'utilisateur a bien été mis à jour');
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        $password = Str::random(8);

        return view('admin.accountCreate', compact('password'));
    }

    /**
     * @param UserRequest $userRequest
     * @return RedirectResponse
     */
    public function store(UserRequest $userRequest)
    {
        $userCreate = User::create([
            'name' => $userRequest['name'],
            'email' => $userRequest['email'],
            'password' => Hash::make($userRequest['password'])
        ]);

        $userCreate->roles()->attach(config('enums.roles.MST'));

        $user = User::where('name', $userRequest['name'])->first();

        Informations::create([
            'user_id' => $user->id
        ]);

        Mail::to($userRequest['email'])
            ->send(new UserMail($userRequest->except('name')));

        return redirect()->route('listAccount')->with('info', 'L\'utilisateur a bien été créé');
    }

    /**
     * @return Factory|View
     */
    public function edit()
    {
        return view('admin.account');
    }

    /**
     * @param UserRequest $userRequest
     * @return RedirectResponse
     */
    public function update(UserRequest $userRequest)
    {
        User::whereId(Auth::user()->id)->update([
            'name' => $userRequest['name'],
            'email' => $userRequest['email'],
            'password' => Hash::make($userRequest['password'])
        ]);

        return redirect()->route('account')->with('info', 'Votre compte a bien été mis à jour');
    }

    /**
     * @param User $user
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('info', 'L\'utilisateur a bien été mis dans la corbeille');
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function forceDestroy(User $user)
    {
        User::withTrashed()->where('id', $user->id)->firstOrFail()->forceDelete();

        return back()->with('info', 'L\'utilisateur a bien été supprimé définitivement de la base de donnée.');
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function restore(User $user)
    {
        User::withTrashed()->where('id', $user->id)->firstOrFail()->restore();

        return back()->with('info', 'L\'utilisateur a bien été restauré.');
    }
}
