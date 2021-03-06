<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Code Agenda</title>

    <!-- Bootstrap -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 page-header">
            <h1>
                Code.Education<br>
                <small><i class="glyphicon glyphicon-phone-alt"></i> Agenda Telefônica</small>
                <span class="pull-right">
                    <form id="form-busca" class="form-inline" action="{{ route('agenda.busca') }}" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="busca" placeholder="Pesquisar Contato..." value="@if(isset($busca)) {{ $busca }} @endif">
                            <span class="input-group-btn">
                                <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i> </button>
                             </span>
                        </div>
                    </form>
                </span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @foreach($letras as $letra)
                <a href="{{ route('agenda.letra', ['letra' => $letra]) }}" class="btn btn-primary btn-xs">{{ $letra }}</a>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 btn-row">
            <a href="#" class="btn btn-primary">Novo Contato</a>
        </div>
    </div>
    <div class="row">
        @yield('content')
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <h4 class="modal-title" id="exampleModalLabel">Apagar</h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ url('js/scripts.js') }}"></script>
</body>
</html>