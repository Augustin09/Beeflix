<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <title>BeeFlix</title>


</head>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">BeeFlix</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" onclick="linkback()">Back</a>
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ url('/category/1')}}">Drama</a>
                <a class="nav-link" href="{{ url('/category/2')}}">Kids</a>
                <a class="nav-link" href="{{ url('/category/3')}}">Tv Show</a>
              </div>
            </div>
          </nav>

        </div>
    </div>

@yield('app')
</html>

<script>
    function linkback(){
window.history.back();
    }
</script>

