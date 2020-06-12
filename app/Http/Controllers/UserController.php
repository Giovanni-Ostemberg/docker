<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Get the current user for the profile controller
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    private function getUser()
    {
        return Auth::user();
    }

    public function index()
    {
        $user = $this->getUser();
        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $user = $this->getUser();
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $user = $this->getUser();
        $data = $request->validated();

        if (is_null($request->password)){
            Arr::forget($data, 'password');
        }else{
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        return redirect()->route('profile.index')->with(['message' => 'Perfil atualizado com sucesso']);
    }
}
