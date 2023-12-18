<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services =Service::paginate(10);
        return view("back_end.Services.index",compact("services"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services =Service::all();
        return view("back_end.Services.createService",compact("services"));
    }

    public function rechercheService(Request $request)
    {
        $services = Service::query();

        // Vérifie si une recherche par nom a été effectuée
        if ($request->has('rechercheService')) {
            $searchTerm = $request->input('rechercheService');
            $services->where('nom', 'like', '%' . $searchTerm . '%');
        }

        $services = $services->select('service_id', 'nom','description')->get();

        return response()->json($services);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:50',
            'description' => 'required|string',
        ]);

        // dd($request->all());

        $service=Service::create([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('back_end.services.create')->with('success','service ajouté avec succés');
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
    public function edit(int $service_id)
    {
        $service = Service::find($service_id);
        if (!$service) {
            return redirect()->route('back_end.services.index')->with('error', 'service non trouvé.');
        }

        return view('back_end.Services.editService', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $service_id)
    {

     $request->validate([
            'nom' => 'required|string|max:50',
            'description' => 'required|string',
        ]);

        // dd($request->all());
        $service = Service::findOrFail($service_id);

        $service->update([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('back_end.services.create')->with('success','service modifié avec succés');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
