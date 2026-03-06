@extends('layout')

@section('content')

<div class="container section experience-section">

<h2 class="text-center mb-5">Experience</h2>

<div class="timeline">

@foreach($experiences as $experience)

<div class="timeline-item">

<h5>{{ $experience->title }}</h5>

<span class="timeline-duration">
{{ $experience->duration }}
</span>

<p>
{{ $experience->description }}
</p>

</div>

@endforeach

</div>

</div>

@endsection