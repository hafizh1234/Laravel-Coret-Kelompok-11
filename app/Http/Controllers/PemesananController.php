<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\Baju;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan=Pemesanan::all();
        return view('pemesanan.index')->with('pemesanan',$pemesanan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemesanan.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tanggalpenyewaan'=>'required',
            'tanggalpengembalian'=>'required',
            'uangmuka'=>'required',
            'pelunasaan'=>'required',
            'tanggalterakhirpelunasan'=>'required',
            
        ]);

        //buat data pemesanan baru dan masukin semua nilai inputan
        $c=new Pemesanan;
        $c->baju_id= $request->input('baju_id');
        // $c->uangmuka= ;
        $c->pelunasaan  = 'tidaklunas';
        $c->tanggalpenyewaan= $request->input('tanggalpenyewaan');
        $c->tanggalpengembalian= $request->input('tanggalpengembalian');
        $c->tanggalterakhirpelunasan= $request->input('tanggalterakhirpelunasan');
        $c->user_id =auth()->user()->id;

        $input_jumlah_bajuXL= $request->input('jumlah_bajuXL');
        $input_jumlah_bajuL= $request->input('jumlah_bajuL');
        $input_jumlah_bajuM= $request->input('jumlah_bajuM');
        $input_jumlah_bajuS= $request->input('jumlah_bajuS');

        //cari data baju di database
        $cr= $request->input('baju_id');
        $data_baju = Baju::where('baju_id','=',$id) ->get();
        
        //kalo datanya ada
        if($data_baju){
            //save data pemesanan ke database
            $c->save();
            //kurangi jumlah baju di database
            $data_baju->jumlah_bajuXL -= $input_jumlah_bajuXL;
            $data_baju->jumlah_bajuL -= $input_jumlah_bajuL;
            $data_baju->jumlah_bajuM -= $input_jumlah_bajuM;
            $data_baju->jumlah_bajuS -= $input_jumlah_bajuS;
            //

            //simpan data jumlah baju yang baru
            $data_baju->save();
        } else {
            //hafiz urus sendiri
        }
        return view('baju.index')->with('success','Pemesanan Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemesanan= Pemesanan::find($id);
        return view('pemesanan.show')->with('pemesanan',$pemesanan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baju= Pemesanan::find($id);
        return view('pemesanan.edit')->with('pemesanan',$baju);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
        $this->validate($request,[
            'tanggalpenyewaan'=>'required',
            'tanggalpengembalian'=>'required',
            'uangmuka'=>'required',
            'pelunasaan'=>'required',
            'tanggalterakhirpelunasan'=>'required',
            
        ]);
        $c=Pemesanan::find($id);
        $c->tanggalpenyewaan= $request->input('tanggalpenyewaan');
        $c->tanggalpengembalian= $request->input('tanggalpengembalian');
        $c->uangmuka= $request->input('uangmuka');
        $c->pelunasaan= $request->input('pelunasaan');
        $c->tanggalterakhirpelunasan= $request->input('tanggalterakhirpelunasan');
        $c->save();

        return redirect('/pemesanans')->with('success','Pemesanan Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $pemesanan= Pemesanan::find($id);
        $pemesanan->delete();
        return redirect('/pemesanans')->with('success','Post Deleted');
    }
}
