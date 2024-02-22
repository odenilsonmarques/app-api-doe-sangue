<?php

namespace App\Http\Controllers\Api;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{

    // To user any method this controller, the user has authenticate
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    /**
     * Display a listing of the resource.
     */
    public function getAllDonors()
    {
        try {
            $donors = Donor::all();
            // dd($donors);
            // return response()->json(['donors' => $donors], 200);
            return view('donor.index',compact('donors'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter doadores'], 500);
        }
    }

    public function create()
    {
        return view('donor.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeNewDonor(Request $request)
    {
        try {
            $request['uuid'] = Str::uuid(); // Gera um uuid dinamicamente usando a classe Str do Laravel, antes de inserir um registro
            $donor = Donor::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Doador criado com sucesso',
                'data'    => $donor,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar o doador: ' . $e->getMessage(),
            ], 500);
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
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Doador não encontrado'], 404);
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
