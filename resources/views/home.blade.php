@extends('layouts.base')

@section('page-content')
    <section>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <img src="{{$movie['thumb']}}" alt="">
                </li>
            @endforeach
        </ul>
    </section>
@endsection