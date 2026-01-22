@extends('layout')
@section('title','Hobbies')
@section('content')
<h1>My Hobbies</h1>
<div style="margin-top: 2rem;"></div>
@foreach($hobo as $image)
<div style="background: #DDD; padding: 1.5rem; margin-bottom: 1rem; border-radius: 5px;">
    <h3 style="color: #2c3e50;">{{ $image['title'] }}</h3>
    <p style="margin-top: 0.5rem; color: #555;">{{ $image['description'] }}</p>

    @if(isset($image['images']) && !empty($image['images']))
        <div style="margin-top: 1rem;">
            @foreach($image['images'] as $img)
                <img src="/images/{{ $img }}"
                <img src="/images/{{ $img }}"
                     alt="Painting"
                     style="margin-top: 1rem; max-width: 100%; height: auto; border-radius: 5px;">
            @endforeach
        </div>
    @endif
</div>
@endforeach
@endsection
