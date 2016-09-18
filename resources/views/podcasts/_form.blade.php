@include('errors.list')

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('podcast', 'Podcast', ['class' => 'control-label']) }}
    {{ Form::file('podcast') }}
</div>

<div class="form-group">
    {{ Form::label('published_at', 'Publication date', ['class' => 'control-label']) }}
    {{ Form::date('published_at', isset($podcast) ? $podcast->published_at : \Carbon\Carbon::now(), ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::submit($submitButtonText, ['class' => 'btn btn-success btn-lg btn-block']) }}
</div>