@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{!! route('answer.store') !!}">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pregunta N°1</div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <p>
                                ¿Qué te gustaría que agregáramos al informe?
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control" rows="3" name="question_1"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pregunta N°2</div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <p>
                                ¿La información es correcta?
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input id="optionsRadios1" name="question_2" type="radio" value="1"/>
                                </span>
                                <label class="form-control" for="optionsRadios1">
                                    Si
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input id="optionsRadios2" name="question_2" type="radio" value="2"/>
                                </span>
                                <label class="form-control" for="optionsRadios2">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input id="optionsRadios3" name="question2" type="radio" value="3"/>
                                </span>
                                <label class="form-control" for="optionsRadios_3">
                                    Más o menos
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pregunta N°3</div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <p>
                                ¿Del 1 al 5, es rápido el sitio?
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-group">
                                <label class="radio-inline">
                                    <input type="radio" name="question_3" id="inlineRadio1" value="1"> 1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="question_3" id="inlineRadio2" value="2"> 2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="question_3" id="inlineRadio3" value="3"> 3
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="question_3" id="inlineRadio4" value="4"> 4
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="question_3" id="inlineRadio5" value="5"> 5
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8 col-md-offset-2">
                <button type="submit" class="btn btn-primary">Enviar encuesta</button>
            </div>
        </div>
    </form>
</div>
@endsection
