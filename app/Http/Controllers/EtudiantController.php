<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiant = Etudiant::all();
        return $this->customJsonResponse("Liste des etudiants",$etudiant);
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
    public function store(StoreEtudiantRequest $request)
    {
        $etudiant = new Etudiant();
        $etudiant->fill($request->validated());
        $etudiant->save();
        return $this->customJsonResponse("etudiant créé avec succès", $etudiant, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return $this->customJsonResponse("Voici l'étudiant", $etudiant);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant)
    {
        $etudiant->fill($request->validated());
        $etudiant->update();
        return response()->json(['message' => 'Etudiant modifié avec succès', 'etudiant' => $etudiant], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return response()->json(['message' => 'Etudiant supprimé avec succès'], 200);
    }
}
