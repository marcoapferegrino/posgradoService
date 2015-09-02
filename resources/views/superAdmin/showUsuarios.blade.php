


@extends('app')

@section('content')
    <div class="container">
        <div class="row">

            @include('partials.messages')

            <div class="col-md-12 ">
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>Usuarios</h4></div>
                    <div class="text-center">
                        <a class="btn btn-info btn-lg" href="{{url('getAddAlumno')}}" role="button">Alumno <i class="fa fa-plus fa-lg"></i></a>
                        <a class="btn btn-primary btn-lg" href="{{url('getAddDocente')}}" role="button">Docente<i class="fa fa-plus fa-lg"></i></a>

                    </div>


                    <div class="panel-body">
                        {!! Form::model(Request::all(),['route' => 'usuarios.findUsuario','method' => 'GET','class'=>'form-inline navbar-form navbar-left pull-right','role'=>'search']) !!}

                                <div class="form-group">
                                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del usuario...']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::select('rol',config('roles.roles'),null,array('class'=>'form-control')) !!}
                                </div>

                                <button type="submit" class="btn btn-info"> <i class="fa fa-search"></i> </button>
                        {!! Form::close() !!}

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Teléfono</th>
                                            <th>CURP</th>
                                            <th>Rol</th>

                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $index=1; ?>
                                        @foreach($usuarios as $usuario)

                                            <tr>
                                                <td>{{$index++}}</td>
                                                <td>{{$usuario->name." ".$usuario->apellidoP." ".$usuario->apellidoM}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>{{$usuario->telefono}}</td>
                                                <td>{{$usuario->curp}}</td>
                                                <td>
                                                    @if($usuario->rol == "alumno")
                                                        Alumno
                                                    @elseif($usuario->rol == "docente")
                                                        Docente
                                                    @elseif($usuario->rol == "superAdmin")
                                                        Super Admin
                                                    @elseif($usuario->rol == "admin")
                                                        Admin
                                                    @else
                                                        No reconocido
                                                    @endif
                                                </td>

                                                <td>
                                                    @if($usuario->rol == "alumno")
                                                        <a href="{{route('alumnos.showExpediente',$usuario->id)}}">Ver</a>
                                                        <a href="{{route('alumnos.showExpediente',$usuario->id)}}">Editar Pendiente</a>
                                                    @elseif($usuario->rol == "docente")
                                                        <a href="{{route('docentes.showExpediente',$usuario->id)}}">Ver</a>
                                                        <a href="{{route('alumnos.showExpediente',$usuario->id)}}">Editar Pendiente</a>
                                                    @else
                                                        Sin expediente
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            {!! $usuarios->appends(Request::only(['name','rol'])) ->render() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection