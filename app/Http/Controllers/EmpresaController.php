<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmpresaController extends Controller
{
    public function index()
    {
        $companys = User::All();
        return view('Empresa.index', compact('companys'));
    }

     public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
