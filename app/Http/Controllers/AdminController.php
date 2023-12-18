<?php

namespace App\Http\Controllers;
use App\Models\Administrateur;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
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

        $admins=Administrateur::all();
        return view("back_end.Admin.ajout_admin",compact("admins",));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'adresse' => 'required|string',
            'date_naiss' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
            'telephone' => 'required|unique:users,telephone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $avatarPath = $this->uploadAvatar($request->file('avatar'));
        // dd($request->all());
        // Création de l'utilisateur
        $user = User::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'genre' => $request->input('genre'),
            'adresse' => $request->input('adresse'),
            'date_naiss' => $request->input('date_naiss'),
            'telephone' => $request->input('telephone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'avatar' => $avatarPath
        ]);

        // Attribuer le rôle "medecin" à l'utilisateur
        $user->addRole('admin');

        $administrateurs = Administrateur::create([
            'user_id' => $user->id,
        ]);


       return redirect()->route('back_end.admins.create')->with('success', 'Admin ajouté avec succès.');
    }

    function uploadAvatar($file)
    {
        if ($file) {
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $path = public_path('avatars');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file->move($path, $filename);

            return $filename;
        }

        return null;
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
