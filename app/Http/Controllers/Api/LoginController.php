<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    /**
     * Handle user login and issue JWT token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // Validate request data
        $credentials = $request->only(['email', 'password']);

        

        if ($token = JWTAuth::attempt($credentials)) {
            // Configura o token JWT para ser enviado com todas as solicitações Axios
            $response = response()->json(['token' => $token]);
        
            // Adiciona o token JWT como um cookie OU cabeçalho de autorização
            // Escolha apenas uma das opções abaixo
        
            // Opção 1: Adiciona o token como um cookie
            $response->cookie('jwt_token', $token);
        
            // OU
        
            
            // Opção 2: Adiciona o token como um cabeçalho de autorização
            // $response->header('Authorization', 'Bearer ' . $token);

            Log::info('Resposta do login: ' . $response->getContent());
        
            // Retorna a resposta JSON com o token JWT
            return $response;
        } else {
            // Autenticação falhou
            return response()->json(['message' => 'Credenciais inválidas'], 401);
        }
        
    }


}


