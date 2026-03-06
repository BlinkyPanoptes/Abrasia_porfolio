@extends('layout')

@section('content')

<div class="container section contact-section">

<h2 class="text-center mb-4">Contact</h2>

<div class="contact-box">

<p class="contact-info">
<strong>Email:</strong>

<a href="mailto:{{ $contact->email }}" class="email">
{{ $contact->email }}
</a>

</p>

<p class="contact-info">
<strong>Phone:</strong> {{ $contact->phone }}
</p>

</div>

</div>

@endsection