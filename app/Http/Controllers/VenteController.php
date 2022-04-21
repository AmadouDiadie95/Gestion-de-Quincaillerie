<?php

namespace App\Http\Controllers;

use App\Models\Vente ;
use Illuminate\Http\Request;

class VenteController extends Controller
{

    public function save(Request $request)
    {
        // return $request ;
        Vente::create($request->all());
        return view('vente/vente-list')
            ->with(['allVentes'=>Vente::all()]) ;
    }

    public function findAll()
    {
        return view('vente/vente-list')
            ->with(['allVentes'=>Vente::all()]) ;

    }

    public function delete(Request $request)
    {
        $vente = Vente::find($request->id) ;
        $vente->delete() ;
        return view('vente/vente-list')->with(['allVentes'=>Vente::all()]);
    }

}
