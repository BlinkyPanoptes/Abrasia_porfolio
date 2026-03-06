@extends('layout')

@section('content')

<div class="container section projects-section">

<h2 class="text-center mb-4">Projects</h2>

<div class="row justify-content-center">

@foreach($projects as $project)

<div class="col-md-6 text-center mb-4">

<div class="project-card">

<h5 class="mt-3">{{ $project->title }}</h5>

<p>{{ $project->description }}</p>

</div>

</div>

@endforeach

</div>

</div>

@endsection