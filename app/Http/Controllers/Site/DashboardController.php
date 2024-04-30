<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scheduling;
use App\Models\BloodCenter;
use App\Models\Historic;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     // get only scheduling user logeded
     public function index()
     {
        
             $user = Auth::user(); // Obtenha o usuário logado
 
             // Agora, em vez de buscar todos os agendamentos, filtre-os com base no ID do usuário
            //  $schedulings = Scheduling::where('user_id', $user->id)->get();
            $schedulings = Scheduling::with('bloodCenter')->where('user_id', $user->id)->get();

            $historrics = Historic::with(['user', 'scheduling', 'bloodCenter'])->where('user_id', $user->id)->get();


      

            $schedulingAlls = Scheduling::with('user', 'bloodCenter')->get();

 
            //  dd($historrics);
 
             // return response()->json(['schedulings' => $schedulings], 200);
             return view('dashboard.index', [
                'schedulings' => $schedulings,
                'historics' => $historrics,
                'schedulingAlls' => $schedulingAlls
             ]);

            








    
     }
}
