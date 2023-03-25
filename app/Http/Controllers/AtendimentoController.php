<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendimento;

class AtendimentoController extends Controller
{
    public function index()
    {
        $atendimentos = Atendimento::orderBy('dia')->get();
        return response()->json($atendimentos->values()->all(),200);
    }

    public function store(Request $request)
    {
        $loja_id = $request->loja_id;
        $dia = $request->dia;
        $horario = $request->horario;
        if ($loja_id and $horario) {
            $atendimento = new Atendimento();
            $atendimento->loja_id = $loja_id;
            $atendimento->dia = $dia;
            $atendimento->horario = $horario;
            $atendimento->save();
            return response()->json($atendimento,201);
        } else {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

    }

    public function update(Request $request, $id)
    {
        $atendimento = Atendimento::find($id);

        if ($atendimento) {
            $dia = $request->dia;
            $horario = $request->horario;
            if ($horario) {
                $atendimento->dia = $dia;
                $atendimento->horario = $horario;
                $atendimento->save();
                return response()->json($atendimento,200);
            } else {
              return response()->json(['erro'=>'Campos obrigatórios não informados.'],400);
            }
        } else {
            return response()->json(['erro'=>'Taxa não encontrada.'],404);
        }
    }
}
