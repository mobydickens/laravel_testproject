@extends('layout')

@section('content')
  <h1>Edit Project</h1>

  <form method='POST' action="/projects/{{ $project->id }}">

    <!-- SHORCUTS -->
    <!-- @method('DELETE') 
    @csrf -->
    <!-- SHORTCUTS ABOVE -->

    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div>
      <label for="title">Title</label><br/>
      <input type="text" name='title' value="{{ $project->title }}">
    </div>

    <div>
      <label for="description">Description</label><br/>
      <textarea name="description" cols="30" rows="10">{{ $project->description }}</textarea>
    </div>
    <button type='submit'>Submit Change!</button>
  </form>
  <form method='POST' action='/projects/{{ $project->id }}'>

    {{ method_field('DELETE') }}
    {{ csrf_field() }}

    <button type='submit'>Delete Project</button>
  </form>
@endsection