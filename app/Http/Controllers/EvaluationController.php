<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function index()
    {
        $evaluations = Evaluation::all();
        return response()->json($evaluations);
    }

    public function store(StoreEvaluationRequest $request)
    {
        $evaluation = Evaluation::create($request->validated());
        return response()->json(['message' => 'Evaluation créée avec succès', 'evaluation' => $evaluation], 201);
    }

    public function show(Evaluation $evaluation)
    {
        return response()->json($evaluation);
    }

    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
        $evaluation->update($request->validated());
        return response()->json(['message' => 'Evaluation mise à jour avec succès', 'evaluation' => $evaluation], 200);
    }

    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return response()->json(['message' => 'Evaluation supprimée avec succès'], 200);
    }
}
