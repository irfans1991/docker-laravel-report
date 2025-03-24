<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\RoleResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = User::when($request->search,function($query)use($request){
            $query->where('firstname', 'like', '%'.$request->search.'%');
        })->whereNull('deleted_at')->latest()->paginate(request()->get('per_page', 1000))->withQueryString(); // Fetch all posts
    return Inertia::render('users/User', [
        'users' => $user, // Pass data to Vue
    ]);
    }

    public function showRegister(): Response
    {
        $roles = RoleResource::collection(Role::all())->resolve(); // Ensure it's an array

        return Inertia::render('auth/Register',[
            'roles' => $roles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = RoleResource::collection(Role::all())->resolve(); // Ensure it's an array
        // if (request()->has('lazyEvent')) {
        //     $roles = json_decode(request()->only(['lazyEvent'])['lazyEvent'], true);
        // }

        return Inertia::render('users/CreateUser',[
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'unique:users'],
            'email' => ['required', 'email', 'max:255'],
            'birthDate' => ['required'],
            'gender' => ['required'],
            'password' => ['required', 'confirmed', 'min:8'],
            'role' => ['required'],
            'dept' => ['required']
        ]);

     
           User::create([
                'firstname' => $fields['firstname'],
                'lastname' => $fields['lastname'],
                'username' => $fields['username'],
                'email' => $fields['email'],
                'birth_date' => $fields['birthDate'],
                'gender' => $fields['gender'],
                'dept' => $fields['dept'],
                'role' => $fields['role'],
                'password' => Hash::make($fields['password']),
            ])->assignRole(['role' => $fields['role']]);

            // Login

            // Auth::login($user);

            return redirect()
            ->route('users')
            ->with('success', 'User created successfully.');


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
        $user = User::findById($id);
        return response()->json([
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $fields = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return to_route('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->deleted_at = Carbon::now();
        $user->deleted_by = Auth::user()->firstname;
        $user->update();

        return redirect()->back()->with('success', 'Record deleted successfully.');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Check user existence and if they are soft deleted
            $user = User::where('email', $request->email)->first();

            if (!$user || $user->deleted_at !== null) {
                return back()->withErrors([
                    'email' => 'Your account has been deactivated.',
                ])->onlyInput('email');
    }

            if (Auth::attempt($credentials, $request->remember)) {
                $request->session()->regenerate();

                return redirect()->intended('/');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth/login');
    }

    public function addRole(Request $request){
       

    }
}
