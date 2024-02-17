<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Scheduling;
use App\Models\Donor;
use App\Models\BloodCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Psy\CodeCleaner\ReturnTypePass;

class SchedulingController extends Controller
{
    public function getAllScheduling()
    {
        try {
            $schedulings = Scheduling::all();
            return response()->json(['schedulings' => $schedulings], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter agendamento'], 500);
        }
    }

    public function createNewScheduling(Request $request)
    {
        try {
            $donorUuid = $request->input('donor_uuid');
            $donor = Donor::where('uuid', $donorUuid)->firstOrFail();

            $bloodCenterUuid = $request->input('blood_center_uuid');
            $bloodCenter = BloodCenter::where('uuid', $bloodCenterUuid)->firstOrFail();

            $request['uuid'] = Str::uuid();

            // Crie o novo agendamento associado ao doador e ao hemocentro
            $scheduling = $donor->schedulings()->create([


                //nesse caso esrou passando todos os dados pois nao usei create::all(), devido esta trabakhando com mais de um relacionamnto
                'uuid' => $request->uuid,
                'scheduling_date' =>$request->scheduling_date,
                'donor_id' => $donor->id,
                'blood_center_id' => $bloodCenter->id,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Agendamento criado com sucesso',
                'data' => $scheduling,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar agendamento: ' . $e->getMessage(),
            ], 500);
        }
    }
}
