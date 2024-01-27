<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;

class HistoricController extends Controller
{
    public function createHistoricForDonor(Request $request, $donorUuid)
    {
        try {
            $donor = Donor::where('uuid', $donorUuid)->firstOrFail();
            $request['uuid'] = Str::uuid();


            $historic = $donor->historics()->create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Historico criado com sucesso',
                'data' => $historic,
            ], 201);
        } catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar histórico'.$e->getMessage(),
            ], 500);
        }
    }
}
