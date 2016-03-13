@extends('layout')

@section('content')
    <h3><i class="fa fa-edit"></i> Editar Telefone - {{ $telefone->pessoa->apelido }} </h3>
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" id="formTelefone" action="{{ route('telefone.update', ['id' => $telefone->id]) }}" method="post">
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="pessoa_id" value="{{ $telefone->pessoa->id }}" />
                <div class="form-group">
                    <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição do Telefone" value="{{ $telefone->descricao }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ddd" class="col-sm-2 control-label">DDD</label>
                    <div class="col-sm-4">
                        <input type="text" name="ddd" class="form-control" id="ddd" placeholder="DDD" value="{{ $telefone->ddd }}">
                    </div>
                    <label for="codpais" class="col-sm-2 control-label">Cod País</label>
                    <div class="col-sm-4">
                        <input type="text" name="codpais" class="form-control" id="codpais" placeholder="Códico do País" value="{{ $telefone->codpais }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="prefixo" class="col-sm-2 control-label">Prefixo</label>
                    <div class="col-sm-4">
                        <input type="text" name="prefixo" class="form-control" id="prefixo" placeholder="Prefixo" value="{{ $telefone->prefixo }}">
                    </div>
                    <label for="sufixo" class="col-sm-2 control-label">Sufixo</label>
                    <div class="col-sm-4">
                        <input type="text" name="sufixo" class="form-control" id="sufixo" placeholder="Sufixo" value="{{ $telefone->sufixo }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection