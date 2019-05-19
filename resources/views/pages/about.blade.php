@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        @if(count($wis)>0)
            <ul class="list-group">
            @foreach($wis as $array)
                <li class="list-group-item">{{$array}}</li>
            @endforeach
            </ul>
        @endif
@endsection