<?php

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends Controller
{
    public function create()
    {
        return view('pessoa.create');
    }

    /*public function store(Request $request)
    {
        Pessoa::create($request->all());

        return redirect()->route('agenda.index');
    }*/

    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoa.edit', compact('pessoa'));
    }

    public function delete($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoa.delete', compact('pessoa'));
    }

    public function destroy($id)
    {
        Pessoa::destroy($id);

        return redirect()->route('agenda.index');
    }
}