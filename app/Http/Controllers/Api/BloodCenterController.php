<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodCenter;

class BloodCenterController extends Controller
{
    public function getAllBloodCenter()
    {
        try {
            $bloodCenters = BloodCenter::all();
            // return response()->json(['bloodCenters' => $bloodCenters], 200);
            return view('bloodcenter.index', compact('bloodCenters'));
        } catch (\Exception $e) {

            return response()->json(['error' => 'Erro ao obter hemocentro'], 500);
        }
    }

    public function create()
    {
        return view('bloodcenter.create');
    }

    public function createNewBloodCenter(Request $request)
    {
        try {
            $request['uuid'] = Str::uuid();
            $bloodCenters = BloodCenter::create($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Hemocentro criado com sucesso',
                'data'    => $bloodCenters,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar Hemocentro'.$e->getMessage(),
            ], 500);
        }
    }
}
