@extends('layouts.admin')

@section('content')
    <div class="wrapper">
        <h1 class="text_center">Edit podcast #{{ $podcast->id }}</h1>

        {!! Form::model($podcast, ['route' => ['podcasts.update', $podcast->id], 'method' => 'PUT', 'files' => true]) !!}
            @include('podcasts/_form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
    </div>
@stop