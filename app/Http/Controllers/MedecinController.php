<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medecin;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class MedecinController extends Controller
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
        $services = Service::all();
        $medecins=Medecin::all();
        return view("back_end.Medecins.ajout_medecin",compact("services","medecins"));
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
            'service_id' => 'required|exists:services,service_id',
            'specialite' => 'required|string',
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
            'avatar' => $avatarPath,
        ]);

        // Attribuer le rôle "medecin" à l'utilisateur
        $user->addRole('medecin');

    // Création du patient lié à l'utilisateur
    $medecin = Medecin::create([
        'specialite' => $request->input('specialite'),
        'service_id' => $request->input('service_id'),
        'user_id' => $user->id,
    ]);

    // // Gestion de l'avatar
    // if ($request->hasFile('avatar')) {
    //     $avatarPath = $request->file('avatar')->store('avatars', 'public');

    //     // Enregistrez le chemin de l'avatar dans la base de données
    //     $user->update(['avatar' => $avatarPath]);
    // }

    return redirect()->route('back_end.medecins.create')->with('success', 'Medecin ajouté avec succès.');
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
