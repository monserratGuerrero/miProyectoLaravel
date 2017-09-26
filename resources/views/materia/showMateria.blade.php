@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <tr>
            <td>
                {{$materia->nombre}}
            </td>
            <td>
                {{$materia->seccion}}
            </td>
            <td>
                {{$materia->horario}}
            </td>
            <td>
                <a class='btn btn-warning btn-group-sm' href="{{route('materia.edit',$materia->id)}}">Modificar</a>
            </td>
            <td>
                {!!Form::model($materia, array('action'=>array('MateriaController@destroy',$materia->id),'method'=>'delete',
                'class'=> 'form-horizontal'))!!}
               
                       {!! Form::submit('Eliminar', ['class'=>'btn btn-danger btn-group-sm']) !!}
                 {!! Form::close() !!}
            </td>
    </tr>
</table>
@stop

