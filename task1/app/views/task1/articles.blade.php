@extends('task1.layout')

@section('content')
    <ul>
        @foreach($articles as $article)
            <li><p><a href="{{$article['articleHref']}}">{{$article['articleText']}} </a> </p></li>
        @endforeach
    </ul>
@stop
