@extends('welcome')

@section('content')
<h1 class="h1">Total de Musicas: {{$total}}</h1>

    @foreach ($audios as $audio)
    <audio controls>
        <source src="/audio/{{$audio->filename}}" type="audio/mp3">
      Your browser does not support the audio element.
      </audio>
    @endforeach
@endsection