@extends('layouts.app')

@section('content')
    <h1>Pemesanan</h1>
    @if(count($pemesanan)>0)
        @foreach($pemesanan as $pesanr)
            <div class="well">
                <h3><a href="/pemesanans/{{$pesanr->id}}">{{$pesanr->pelunasaan}}</a></h3>
                <small>Made on{{$pesanr->tanggalpenyewaan}} by {{$pesanr->user->nama}}</small>
            </div>
        @endforeach
        @else
        <p>no post found</p>
    @endif
@endsection