@extends('layouts.admin')

@section('content')
    <div class="wrapper">
        <h1 class="text_center">Create a podcast</h1>

        {!! Form::open(['route' => 'podcasts.store', 'files' => true]) !!}
            @include('podcasts/_form', ['submitButtonText' => 'Save'])
        {!! Form::close() !!}
    </div>
@stop