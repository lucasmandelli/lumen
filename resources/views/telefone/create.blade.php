@extends('layout')

@section('content')
    <h3><i class="fa fa-user"></i> Criar Telefone - {{ $pessoa->apelido }} </h3>
    <form class="form-horizontal" id="formTelefone" action="{{ route('telefone.store') }}" method="post">
        <input type="hidden" name="pessoa_id" value="{{ $pessoa->id }}" />
        <div class="form-group">
            <label for="descricao" class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-10">
                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição do Telefone">
            </div>
        </div>
        <div class="form-group">
            <label for="ddd" class="col-sm-2 control-label">DDD</label>
            <div class="col-sm-4">
                <input type="text" name="ddd" class="form-control" id="ddd" placeholder="DDD">
            </div>
            <label for="codpais" class="col-sm-2 control-label">Cod País</label>
            <div class="col-sm-4">
                <input type="text" name="codpais" class="form-control" id="codpais" placeholder="Códico do País">
            </div>
        </div>
        <div class="form-group">
            <label for="prefixo" class="col-sm-2 control-label">Prefixo</label>
            <div class="col-sm-4">
                <input type="text" name="prefixo" class="form-control" id="prefixo" placeholder="Prefixo">
            </div>
            <label for="sufixo" class="col-sm-2 control-label">Sufixo</label>
            <div class="col-sm-4">
                <input type="text" name="sufixo" class="form-control" id="sufixo" placeholder="Sufixo">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
@endsection