@extends('layouts.app')

@section('content')
    <h1>Create Pemesanan</h1>
    {!! Form::open(['action'=>['PemesananController@update',$pemesanan->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('tanggalpenyewaan','Tanggal Penyewaan')}}
            {{Form::text('tanggalpenyewaan',$pemesanan->tanggalpenyewaan,['class'=>'form-control','placeholder'=>'Tanggal Penyewaan'])}}
        </div>

        <div class="form-group">
            {{Form::label('tanggalpengembalian','Tanggal Pengembalian')}}
            {{Form::text('tanggalpengembalian',$pemesanan->tanggalpengembalian,['class'=>'form-control','placeholder'=>'Tanggal Terakhir Pelunasan'])}}
        </div>

        <div class="form-group">
            {{Form::label('tanggalterakhirpelunasan','Tanggal Terakhir Pelunasan')}}
            {{Form::text('tanggalterakhirpeluanasan',$pemesanan->tanggalterakhirpelunasan,['class'=>'form-control','placeholder'=>'Tanggal Terakhir Pelunasan'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn  btn-primary'])}}
    {!! Form::close() !!}
@endsection