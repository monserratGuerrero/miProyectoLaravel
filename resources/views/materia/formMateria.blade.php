@extends('layouts.app')

@section('content')

    <div class="row">
        @include('partials.formErrores')
        <div class="col-sm-6">
            @if(isset($materia))
                {!!Form::model($materia, array('action'=>array('MateriaController@update',$materia->id),'method'=>'patch',
                'class'=> 'form-horizontal'))!!}
            @else
                 {!! Form::open(['route' => 'materia.store', 'class'=>'form-horizontal']) !!}
            @endif
            <div class="form-group">
                
                {!! Form::label('nombre', 'Nombre',array('class'=>'col-sm-2 control-label')) !!}
                <div class="col-sm-10">
                    {!! Form::text('nombre',null,['class'=>'form-control']) !!}
                </div>
                
            </div>
            <div class="form-group">
                {!! Form::label('seccion', 'Seccion',array('class'=>'col-sm-2 control-label'))!!}
                <div class="col-sm-10">
                    {!! Form::text('seccion', null,['class'=>'form-control']) !!}
                </div>
            </div>

           <div class="form-group">
               {!! Form::label('horario', 'Horario',array('class'=>'col-sm-2 control-label'))!!}
               <div class="col-sm-10">
                    {!! Form::text('horario', null,['class'=>'form-control']) !!}
               </div>
           </div>
            <div class="col-sm-10">
           {!! Form::submit('Guardar', ['class'=>'btn btn-lg btn-success']) !!}
            </div>

        {!! Form::close() !!}
        </div>

    </div>


@stop
