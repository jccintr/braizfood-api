<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxa;


class TaxaController extends Controller
{
    public function index()
    {
        $taxas = Taxa::orderBy('bairro')->get();
        return response()->json($taxas->values()->all(),200);
    }

    public function store(Request $request)
    {
        $loja_id = $request->loja_id;
        $valor = $request->valor;
        $bairro = $request->bairro;
        if ($bairro and $valor) {
            $taxa = new Taxa();
            $taxa->loja_id = $loja_id;
            $taxa->bairro = $bairro;
            $taxa->valor = $valor;
            $taxa->save();
            return response()->json($taxa,201);
        } else {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

    }

    public function update(Request $request, $id)
    {
        $taxa = Taxa::find($id);

        if ($taxa) {
            $valor = $request->valor;
            $bairro = $request->bairro;
            if ($bairro and $valor) {
                $taxa->bairro = $bairro;
                $taxa->valor = $valor;
                $taxa->save();
                return response()->json($taxa,200);
            } else {
              return response()->json(['erro'=>'Campos obrigatórios não informados.'],400);
            }
        } else {
            return response()->json(['erro'=>'Taxa não encontrada.'],404);
        }
    }
}
