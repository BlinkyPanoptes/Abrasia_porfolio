@extends('layout')

@section('content')

<div class="container section skills-section">

<h2 class="text-center mb-5">Skills</h2>

<div class="row justify-content-center">

@foreach($skills as $skill)

<div class="col-md-6 text-center mb-5">

<div class="skill-circle"
style="background:conic-gradient(#11999E {{ $skill->percentage }}%, #333 0);">

<span>{{ $skill->percentage }}%</span>

</div>

<h5 class="mt-3">{{ $skill->name }}</h5>

</div>

@endforeach

</div>

</div>

@endsection