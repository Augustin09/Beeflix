@extends('layouts.app')


@section('app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <title>BeeFlix</title>
</head>

<body class="bg-light">
        <div class="container bg-white">
        <h2>{{$genre->name}}</h2>
                <div class="row">
                    @foreach ($movie as $m)
                    @if ($m->genres_id == $genre->id)
                    <div class="col">
                    <div class="card deck">
                        <div class="card">
                            <img class="card-img-top" src="/{{$m->photo}}" alt="gadaa" srcset="">
                        <div class="card-body">
                            <p class="card-title">{{$m->title}}</p>
                        </div>
                        <div class="card-footer text-center bg-dark">
                            <a href="{{ url('/detail/'.$m->id) }}">LIHAT FILM</a>
                        </div>
                    </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
</div>
</body>

@endsection('app')
</html>
