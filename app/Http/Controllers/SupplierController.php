<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function add(){
        return view('supplier/supplier-add') ;
    }

    public function save(Request $request)
    {
        Supplier::create($request->all());
        return view('supplier/supplier-list')->with(['allSuppliers'=>Supplier::all()]);
    }

    public function findAll()
    {
        return view('supplier/supplier-list')->with(['allSuppliers'=>Supplier::all()]);
    }

    public function findById(Request $request)
    {
        $id = $request->id ;
        return Supplier::find($id) ;
        // return view('supplier/supplier-detail')->with(['supplierDetail'=>Supplier::find($id)]);
    }

    public function edit(Request $request)
    {
        $id = $request->id ;
        return view('supplier/supplier-edit')
            ->with(['supplierDetail'=>Supplier::find($id)]) ;
    }

    public function delete(Request $request)
    {
        $supplier = supplier::find($request->id) ;
        $supplier->delete() ;
        return view('supplier/supplier-list')->with(['allSuppliers'=>Supplier::all()]);
    }

    public function update(Request $request)
    {

        $supplier = Supplier::find($request->id) ;
        $supplier->name = $request->name ;
        $supplier->tel = $request->tel ;
        $supplier->email = $request->email ;
        $supplier->address = $request->address ;
        $supplier->update() ;
        return view('supplier/supplier-list')->with(['allSuppliers'=>Supplier::all()]);
    }
}
