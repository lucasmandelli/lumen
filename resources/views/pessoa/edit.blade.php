@extends('layout')

@section('content')
    <h3><i class="fa fa-edit"></i> Editar Contato </h3>
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" id="formContato" action="{{ route('pessoa.update', ['id' => $pessoa->id]) }}" method="post">
                <input type="hidden" name="_method" value="PUT" />
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" value="{{ $pessoa->nome }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="apelido" class="col-sm-2 control-label">Apelido</label>
                    <div class="col-sm-10">
                        <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido" value="{{ $pessoa->apelido }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="radio radio-inline">
                            <input type="radio" name="sexo" id="feminino" value="F" @if($pessoa->sexo == 'F') checked @endif >
                            <label for="feminino"><i class="fa fa-female text-danger"></i> </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" name="sexo" id="masculino" value="M" @if($pessoa->sexo == 'M') checked @endif>
                            <label for="masculino"><i class="fa fa-male text-info"></i> </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            @include('partials.telefones')
        </div>
    </div>
@endsection