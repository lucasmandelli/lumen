@extends('layout')

@section('content')
    <h3><i class="fa fa-user"></i> Criar Contato </h3>
    <form class="form-horizontal" id="formContato" action="{{ route('pessoa.store') }}" method="post">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo">
            </div>
        </div>
        <div class="form-group">
            <label for="apelido" class="col-sm-2 control-label">Apelido</label>
            <div class="col-sm-10">
                <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio radio-inline">
                    <input type="radio" name="sexo" id="feminino" value="F" >
                    <label for="feminino"><i class="fa fa-female text-danger"></i> </label>
                </div>
                <div class="radio radio-inline">
                    <input type="radio" name="sexo" id="masculino" value="M">
                    <label for="masculino"><i class="fa fa-male text-info"></i> </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
@endsection