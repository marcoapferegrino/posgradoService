
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        Bienvenido admin!!
                        <div class="panel panel-info">
                            <div class="panel-heading">Listas</div>

                            <div class="panel-body">

                                <i class="fa fa-list-ol fa-lg"></i>
                                <a href="{{url('getGrupos')}}">Lista de grupos</a>
                                <br>
                                <i class="fa fa-list-ol fa-lg"></i>
                                <a href="{{url('getInscritos')}}">Lista de alumnos inscritos</a>
                                <br>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
