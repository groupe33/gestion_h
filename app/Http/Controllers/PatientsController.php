<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PatientRequest;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\LaratrustUserTrait;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        return view ('back_end.Patients.profil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view ('back_end.Patients.ajout_patient');
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(PatientRequest $request)
        {
            $request->validate($request->rules());

            // dd($request->all());
            // Création de l'utilisateur
            $avatarPath = $this->uploadAvatar($request->file('avatar'));
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

            // Attribuer le rôle "patient" à l'utilisateur
            $user->addRole('patient');

        // Création du patient lié à l'utilisateur
        $patient = Patient::create([
            'ville' => $request->input('ville'),
            'user_id' => $user->id,
        ]);


        return redirect()->route('back_end.patients.create')->with('success', 'Patient ajouté avec succès.');
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
        return view ('back_end.Patients.ajout_patientFin');
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
