<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Retrieve the user
        $user = User::find($id);

        // Update the user's information
        $user->update($request->all());

        // Determine the role-specific home route
        $homeRoute = 'user.home';
        if ($user->role === 'staff') {
            $homeRoute = 'staff.home';
        } elseif ($user->role === 'admin') {
            $homeRoute = 'admin.home';
        }

        // Redirect to the appropriate home route based on the user's role
        return redirect()->route($homeRoute);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
