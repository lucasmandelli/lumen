<?php

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Telefone;

class TelefoneController extends Controller
{
    public function create($idPessoa)
    {
        $pessoa = Pessoa::findOrFail($idPessoa);
        return view('telefone.create', compact('pessoa'));
    }

    public function edit($id)
    {
        $telefone = Telefone::findOrFail($id);
        return view('telefone.edit', compact('telefone'));
    }

    public function delete($id)
    {
        $telefone = Telefone::findOrFail($id);
        $pessoa = $telefone->pessoa;

        return view('telefone.delete', compact('telefone', 'pessoa'));
    }

    public function destroy($id)
    {
        Telefone::destroy($id);

        return redirect()->route('agenda.index');
    }
}