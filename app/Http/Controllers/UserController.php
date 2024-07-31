<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // handle authentifications
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7']
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('users/posts');
        }

        return back()->withErrors(['Authentication failed']);
    }

    // 
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('users/login');
    }

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
        // user form
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate form fields
        $request->validate([
            'fullname' => ['required', 'min:7'],
            'email' => ['required', 'unique:users', 'email', 'max:255'],
            'password' => ['min:7', 'confirmed'],
        ]);

        // register user
        User::create([
            'fullname' => request()->input('fullname'),
            'email' => request()->input('email'),
            'password' => request()->input('password')
        ]);

        // redirect to register form
        return redirect('users/create')->with(['status' => 'User created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
