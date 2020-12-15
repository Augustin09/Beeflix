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
     <link rel="stylesheet" href="{{asset('css/moviesdetail.css')}}">


    <title>Movie Detail</title>

</head>

<body class="bg-light">
    <div class="container bg-white">
        <div class="row">
            <div class="col-4">
             <img class="card-img-top" src="/{{$movie->photo}}" alt="" srcset="">
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="card-title">
                           <h3>{{$movie->title}}</h3>
                           @if ($movie->rating)
                            @for ($i = 0; $i < $movie->rating; $i++)
                            <i class="fas fa-star fa-1x" style="color: gold" ></i>
                            @endfor
                           @endif
                           <p>{{$movie->description}}</p>

                           <p>Category : <a href="{{ url('/category/'.$movie->genres->id)}}">{{$movie->genres->name}}</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="card-title">
                        <h3>Episode</h3>
                        </div>
                        @foreach ($episode as $epi)


                        <div class="row">
                            <div class="col">
                                <p>{{$epi->episodes}}</p>
                            </div>
                            <div class="col">
                                <p>{{$epi->titles}}</p>
                                <div class="hv-100"></div>
                            </div>

                        </div>
                        @endforeach

                        {{$episode->links()}}

                    </div>
                    </div>
                </div>
            </div>

</body>
@endsection('app')
</html>
<script src="https://kit.fontawesome.com/0a890c8bb1.js" crossorigin="anonymous"></script>
