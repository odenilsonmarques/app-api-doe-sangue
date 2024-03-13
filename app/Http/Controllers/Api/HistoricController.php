<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BloodCenter;
use App\Models\Historic;
use App\Models\Scheduling;
use Illuminate\Http\Request;

class HistoricController extends Controller
{
    public function create()
    {
        $users = User::all();
        $bloodCenters = BloodCenter::all();
        $schedulings = Scheduling::all();
      
        // dd($users,$bloodCenters,$historics);
        return view('historics.create', compact( 'users','bloodCenters','schedulings'));
    }

    public function getAllHistoric()
    {
        try {
            $historics = Historic::all();
            // dd($historics);
            // return response()->json(['historics' => $historics, 200]);
            return view('historics.index', compact('historics'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter agendamento'], 500);
        }
    }

    public function createNewHistoric(Request $request)
    {
        try {
            $userId = $request->input('user_id');
            $user = User::findOrFail($userId);

            $bloodCenterId = $request->input('blood_center_id');
            $bloodCenter = BloodCenter::findOrFail($bloodCenterId);

            $schedulingId = $request->input('scheduling_id');
            $scheduling = Scheduling::findOrFail($schedulingId);

            $historic = new Historic([
                'uuid' => Str::uuid(),
                'quantity_blood' => $request->input('quantity_blood'),
                'donation_date' => $request->input('donation_date'),
                'user_id' => $user->id,
                'blood_center_id' => $bloodCenter->id,
                'scheduling_id' => $scheduling->id,
            ]);

            $user->historics()->save($historic);

            return response()->json([
                'success' => true,
                'message' => 'Historico criado com sucesso',
                'data' => $historic,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar Historico: ' . $e->getMessage(),
            ], 500);
        }
    }
}
