@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h3>Baju yang telah anda pesan</h3>
                    @if(count($pemesanan)>0)

                        <table class="table table-stripped">
                            <tr>
                                <th>Pelunasan</th>
                                <th></th>
                            </tr>
                            @foreach($pemesanan as $psn)
                            <tr>
                                <td>{{$psn->pelunasaan}}</td>
                                <td><a href="/pemesanans/{{$psn->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>                                
                                    {!!Form::open(['action' => ['PemesananController@destroy',$psn->id], 'method'=>'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','Delete')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                            <p>  anda belum melakukan pemesanan</p>
                    @endif
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
