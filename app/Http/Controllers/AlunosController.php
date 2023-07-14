<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\types\BaseResponse;
use Illuminate\Http\Request;

class AlunosController extends Controller
{

    public function index()
    {
        return response()->json(new BaseResponse(Alunos::all()));
    }

    public function store(Request $request)
    {
        Alunos::create([
            "nome" => $request->get("nome"),
            "email" => $request->get("email"),
            "ra" => $request->get("ra"),
            "cpf" => $request->get("cpf"),
        ]);
        return response()->json(new BaseResponse(null, true, 'Aluno cadastrado com sucesso'));
    }

    public function show($id)
    {
        $alunos = Alunos::find($id);
        return response()->json(new BaseResponse($alunos));
    }

    public function update(Request $request, $id)
    {
        $alunos = Alunos::find($id);
        if ($alunos) {
            $alunos->update([
                "nome" => $request->get("nome"),
                "email" => $request->get("email"),
                "ra" => $request->get("ra"),
                "cpf" => $request->get("cpf"),
            ]);
        };
        return response()->json(new BaseResponse(null, true, 'cadastro alterado com sucesso'));
    }

    public function destroy($id)
    {
        $alunos = Alunos::find($id);
        if ($alunos) {
            $alunos->delete();
            return response()->json(new BaseResponse(null, true, 'aluno deletado'));
        }
    }
}
