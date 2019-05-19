@extends('layouts.app')

@section('content')
    <h1>baju</h1>
    @if(count($baju)>0)
    <div class="jumbotron">
        <h1>Show Costume</h1>
        @foreach($baju as $bajm)
                <div class="row justify-content-center">
                  <div class="column">
                    <div class="card" style="width: 16rem;">
                      <header>
                        <a target="_blank" href="#"><img src="img\bali.jpg"></a>
                        <div class="card-body">
                          <h1>{{$bajm->nama_baju}}</h1>
                          <h2>{{$bajm->jenis_baju}}</h2>
                        </div>
                      </header>
                      <div class="card-body">
                        <p>Rp.{{$bajm->harga_baju}}/stel</p>
                        <button class="cart"><a href="/shirts/{{$bajm->id}}">Rent This!</a></button>
                      </div>
                    </div>    
                  </div>
        @endforeach
        @else
        <p>no post found</p>
    @endif
@endsection