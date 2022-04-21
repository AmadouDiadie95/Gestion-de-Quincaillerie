<?php

namespace App\Http\Controllers;

use App\Models\Commande ;
use App\Models\Supplier;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    public function save(Request $request)
    {
        // return $request ;
        Commande::create($request->all());
        return view('caisse/etat-caisse')
            ->with(['allAchats'=>Commande::all()])
            ->with(['allSuppliers'=>Supplier::all()]);
    }

    public function findAll()
    {
        return view('caisse/etat-caisse')
            ->with(['allAchats'=>Commande::all()])
            ->with(['allSuppliers'=>Supplier::all()]);

    }

    public function delete(Request $request)
    {
        $commande = Commande::find($request->id) ;
        $commande->delete() ;
        return view('caisse/etat-caisse')
            ->with(['allAchats'=>Commande::all()])
            ->with(['allSuppliers'=>Supplier::all()]);
    }

}
