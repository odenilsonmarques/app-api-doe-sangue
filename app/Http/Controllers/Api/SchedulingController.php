<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Scheduling;
use App\Models\User;
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
            // return response()->json(['schedulings' => $schedulings], 200);

            // dd($schedulings);
            return view('scheduling.index',compact('schedulings'));


        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter agendamento'], 500);
        }
    }

    public function create()
    {
        $bloodCenters = BloodCenter::all();
        $users = User::all();
        // dd($bloodCenters);
        return view('scheduling.create', compact('bloodCenters', 'users'));
    }


    public function createNewScheduling(Request $request)
    {
        
        try {
            // dd($request->all()); 
            $userId = $request->input('user_id');
            $user = User::where('id', $userId)->firstOrFail();

            $bloodCenterId = $request->input('blood_center_id');
            $bloodCenter = BloodCenter::where('id', $bloodCenterId)->firstOrFail();

            // dd($user, $bloodCenter);

            $request['uuid'] = Str::uuid();

            // Crie o novo agendamento associado ao doador e ao hemocentro
            $scheduling = $user->schedulings()->create([
               
                

                //nesse caso esrou passando todos os dados pois nao usei create::all(), devido esta trabakhando com mais de um relacionamnto
                'uuid' => $request->uuid,
                'scheduling_date' =>$request->scheduling_date,
                'phone' => $request->phone,
                'blood_type' => $request->blood_type,
                'user_id' => $user->id,
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
