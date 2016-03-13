<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Http\Request;
use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Telefone;

$app->get('/', ['as' => 'agenda.index', 'uses' => 'AgendaController@index']);

$app->get('/{letra}', ['as' => 'agenda.letra', 'uses' => 'AgendaController@index']);

$app->post('/busca', ['as' => 'agenda.busca', 'uses' => 'AgendaController@busca']);

/**
 * Pessoas
 */
$app->get('/contato/novo', ['as' => 'pessoa.create', 'uses' => 'PessoaController@create']);
$app->post('/contato/store', ['as' => 'pessoa.store', function(Request $request){
    $this->validate($request, [
        'nome' => 'required|min:3|max:250|unique:pessoas',
        'apelido' => 'required|min:2|max:50',
        'sexo' => 'required'
    ]);

    $pessoa = Pessoa::create($request->all());

    return redirect()->route('pessoa.edit', ['id' => $pessoa->id]);
}]);

$app->get('/contato/editar/{id}', ['as' => 'pessoa.edit', 'uses' => 'PessoaController@edit']);
$app->put('/contato/update/{id}', ['as' => 'pessoa.update', function(Request $request, $id){

    $pessoa = Pessoa::findOrFail($id);

    $this->validate($request, [
        'nome' => 'required|min:3|max:250|unique:pessoas,nome,'.$pessoa->id,
        'apelido' => 'required|min:2|max:50',
        'sexo' => 'required'
    ]);

    $pessoa->fill($request->all())->save();
    $letra = strtoupper(substr($pessoa->apelido, 0, 1));

    return redirect()->route('agenda.letra', ['letra' => $letra]);
}]);

$app->get('/contato/apagar/{id}', ['as' => 'pessoa.delete', 'uses' => 'PessoaController@delete']);
$app->delete('/contato/destroy/{id}', ['as' => 'pessoa.destroy', 'uses' => 'PessoaController@destroy']);


/**
 * Telefones
 */
$app->get('/telefone/novo/{pessoa_id}', ['as' => 'telefone.create', 'uses' => 'TelefoneController@create']);
$app->post('/telefone/store', ['as' => 'telefone.store', function(Request $request){
    $this->validate($request, [
        'pessoa_id' => 'required',
        'descricao' => 'required|min:3|max:250',
        'ddd' => 'required|min:2|max:2',
        'codpais' => 'required|min:1|max:8',
        'prefixo' => 'required|min:4|max:5',
        'sufixo' => 'required|min:4|max:4'
    ]);

    $telefone = Telefone::create($request->all());

    return redirect()->route('telefone.edit', ['id' => $telefone->id]);
}]);

$app->get('/telefone/editar/{id}', ['as' => 'telefone.edit', 'uses' => 'TelefoneController@edit']);
$app->put('/telefone/update/{id}', ['as' => 'telefone.update', function(Request $request, $id){

    $this->validate($request, [
        'descricao' => 'required|min:3|max:250',
        'ddd' => 'required|min:2|max:2',
        'codpais' => 'required|min:1|max:8',
        'prefixo' => 'required|min:4|max:5',
        'sufixo' => 'required|min:4|max:4'
    ]);

    $telefone = Telefone::findOrFail($id);
    $telefone->fill($request->all())->save();
    $letra = strtoupper(substr($telefone->pessoa->apelido, 0, 1));

    return redirect()->route('agenda.letra', ['letra' => $letra]);
}]);

$app->get('/telefone/apagar/{id}', ['as' => 'telefone.delete', 'uses' => 'TelefoneController@delete']);
$app->delete('/telefone/destroy/{id}', ['as' => 'telefone.destroy', 'uses' => 'TelefoneController@destroy']);