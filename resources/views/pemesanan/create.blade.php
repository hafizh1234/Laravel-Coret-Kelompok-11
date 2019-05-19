@extends('layouts.app')

@section('content')
    <h1>Create Pemesanan</h1>
    {!! Form::open(['action'=>'PemesananController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('tanggalpenyewaan','Tanggal Penyewaan')}}
            {{Form::text('tanggalpenyewaan','',['class'=>'form-control','placeholder'=>'Tanggal Penyewaan'])}}
        </div>

        <div class="form-group">
            {{Form::label('tanggalpengembalian','Tanggal Pengembalian')}}
            {{Form::text('tanggalpengembalian','',['class'=>'form-control','placeholder'=>'Tanggal Terakhir Pelunasan'])}}
        </div>

        <div class="form-group">
            {{Form::label('tanggalterakhirpelunasan','Tanggal Terakhir Pelunasan')}}
            {{Form::text('tanggalterakhirpeluanasan','',['class'=>'form-control','placeholder'=>'Tanggal Terakhir Pelunasan'])}}
        </div>
        
        <div class="form-group">
                {{Form::label('nama_baju','Nama Baju')}}
                {{Form::text('nama_baju','',['class'=>'form-control','placeholder'=>'Nama baju'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('harga_baju','Harga Baju')}}
                {{Form::text('harga_baju','',['class'=>'form-control','placeholder'=>'Harga baju'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('jenis_baju','Nama Baju')}}
                {{Form::text('jenis_baju','',['class'=>'form-control','placeholder'=>'Jenis baju'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('jumlah_bajuXL','Jumlah Baju XL')}}
                {{Form::text('jumlah_bajuXL','',['class'=>'form-control','placeholder'=>'Jumlah baju XL'])}}
             </div>
    
            <div class="form-group">
                {{Form::label('jumlah_bajuL','Jumlah Baju L')}}
                {{Form::text('jumlah_bajuL','',['class'=>'form-control','placeholder'=>'Jumlah baju L'])}}
            </div>
    
             <div class="form-group">
                {{Form::label('jumlah_bajuM','Jumlah Baju M')}}
                {{Form::text('jumlah_bajuM','',['class'=>'form-control','placeholder'=>'Jumlah baju M'])}}
             </div>
    
             <div class="form-group">
                {{Form::label('jumlah_bajuS','Jumlah Baju S')}}
                {{Form::text('jumlah_bajuS','',['class'=>'form-control','placeholder'=>'Jumlah baju S'])}}
            </div>

        {{Form::submit('Submit',['class'=>'btn  btn-primary'])}}
    {!! Form::close() !!}
@endsection