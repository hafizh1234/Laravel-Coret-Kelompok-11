@extends('layouts.app')

@section('content')
    <h1>{{$pemesanan->pelunasaan}}</h1>
    <hr>
    <a href="/pemesanans/{{$pemesanan->id}}/edit" class="btn btn-primary">Edit</a>
    <hr>
    <small>tanggal deadline {{$pemesanan->tanggalterakhirpelunasan}} by {{$pemesanan->user->nama}}</small>

    {!!Form::open(['action' => ['PemesananController@destroy',$pemesanan->id], 'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','Delete')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection