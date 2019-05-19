@extends('layouts.app')

@section('content')
    <h1>{{$baju->nama_baju}}</h1>
    <hr>
    <a href="/shirts/{{$baju->id}}/edit" class="btn btn-primary">Edit</a>

    {!!Form::open(['action' => ['BajuController@destroy',$baju->id], 'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','Delete')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection