<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /*
     * Metodo que retorna uma lista de usuários e retona um JSON como resultado
     */
    public function index() : JsonResponse
    {
        // Recupera os usuários do banco de dados, oerdenados pelo ID em order decrescente e paginados
        $users = User::orderBy('created_at', 'desc')->paginate(2);

        // Retrona os usuários recuperados como um resposta JSON
        return response()->json([
            'success' => true,
            'Usuários' => $users
        ]);
    }

    // Retorna os dados de um usuário em especifico pelo seu ID
    public function show(User $user) : JsonResponse
    {
        // Retorna os detalhes do usuário me formato JSON
        return response()->json([
            'sucess' => true,
            'Usuário' => $user,
        ]);
    }

    // Recebe os dados peloa requeste e inclui no banco de dados
    public function store(UserRequest $request) : JsonResponse
    {

        // Criando o usuário no banco
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'Usuário criado com sucesso!', 'user' => $user], 201);
    }

    public function update(UserRequest $request, User $user): JsonResponse
    {

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'Usuário atualizado com sucesso!', 'user' => $user], 200);
    }

    public function destroy(User $user) : JsonResponse
    {
        $user->delete();

        return response()->json(['message' => 'Usuário removido com sucesso!'], 200);
    }
}
