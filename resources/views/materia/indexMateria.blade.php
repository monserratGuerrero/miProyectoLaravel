@extends('layouts.app')

@section('content')
<table>
    <th>Nombre</th>
    <th>Seccion</th>
    <th>Horario</th>
    <th>Modificar</th>
    
    @foreach($materias as $materia)
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
            <a class='btn btn-success btn-group-sm' href="{{route('materia.show',$materia->id)}}">Mostrar</a>
        </td>
        
    </tr>
    
    
    @endforeach
    
</table>
<a class='btn btn-info btn-lg' href="{{route('materia.create')}}">Crear</a>
@stop

