@extends('layout')

@section('content')

<div class="hero">

<h1>{{ $profile->name }}</h1>

<p class="lead">
{{ $profile->bio }}
</p>

</div>

<div class="container section">

<h2>about me.</h2>

<div class="about-text">

<p>
I am a UI/UX-focused Web Developer who believes that a website should perform as beautifully as it looks.
</p>

<p>
With a background in graphic design and a passion for clean code, I specialize in building digital products that are both visually stunning and technically sound.
</p>

<p>
I don't just "hand off" designs—I build the bridge between the initial wireframe and the final, responsive launch, ensuring every pixel serves a purpose and every interaction feels intuitive.
</p>

</div>

<p>
email <br>

<a class="email" href="mailto:{{ $profile->email }}">
{{ $profile->email }}
</a>

</p>

</div>

@endsection