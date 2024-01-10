<?php

namespace App\Http\Controllers\Api;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAllDonors(Request $request)
    {
        try {
            $donors = Donor::all();

            return response()->json(['donors' => $donors], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter doadores'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function createNewDonor(Request $request)
    {
        try {

            $request['uuid'] = Str::uuid(); // Gera um UUID dinamicamente usando a classe Str do Laravel, antes de inserir um registro
            $donor = Donor::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Doador criado com sucesso',
                'data'    => $donor,
            ], 201); // 201 Created é um código HTTP apropriado para criar recursos com sucesso
        } catch (\Exception $e) {
            // Se ocorrer um erro, retorne uma resposta JSON de erro
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar o doador: ' . $e->getMessage(),
            ], 500); // 500 Internal Server Error é um código HTTP apropriado para erros do servidor
        }
    }
    /**
     * Display the specified resource.
     */
    public function getDonorByUuid($identify)
    {
        try {
            $donor = Donor::where('uuid', $identify)->firstOrFail();
    
            return response()->json(['donor' => $donor], 200);
       
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter doador'], 500);
        }
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
    public function destroyDonorByUiid(string $identify)
    {
        try {
            $donor = Donor::where('uuid', $identify)->firstOrFail();
            $donor->delete();
            return response()->json(['message' => 'Doador excluído com sucesso'], 200);
       
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Doador não encontrado'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao excluir doador'], 500);
        }
    }
}
