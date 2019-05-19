<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baju;

class BajuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baju=Baju::all();
        return view('baju.index')->with('baju',$baju);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('baju.create');
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
            'nama_baju'=>'required',
            'harga_baju'=>'required',
            'jenis_baju'=>'required',
            'jumlah_bajuXL'=>'required',
            'jumlah_bajuL'=>'required',
            'jumlah_bajuM'=>'required',
            'jumlah_bajuS'=>'required',
            
        ]);
        $c=new Baju;
        $c->nama_baju= $request->input('nama_baju');
        $c->harga_baju= $request->input('harga_baju');
        $c->jenis_baju= $request->input('jenis_baju');
        $c->jumlah_bajuXL= $request->input('jumlah_bajuXL');
        $c->jumlah_bajuL= $request->input('jumlah_bajuL');
        $c->jumlah_bajuM= $request->input('jumlah_bajuM');
        $c->jumlah_bajuS= $request->input('jumlah_bajuS');
        $c->save();

        return redirect('/shirts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $baju= Baju::find($id);
        return view('baju.show')->with('baju',$baju);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baju= Baju::find($id);
        return view('baju.edit')->with('baju',$baju);
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
            'nama_baju'=>'required',
            'harga_baju'=>'required',
            'jenis_baju'=>'required',
            'jumlah_bajuXL'=>'required',
            'jumlah_bajuL'=>'required',
            'jumlah_bajuM'=>'required',
            'jumlah_bajuS'=>'required',
            
        ]);
        $baju=Baju::find($id);
        $baju->nama_baju= $request->input('nama_baju');
        $baju->harga_baju= $request->input('harga_baju');
        $baju->jenis_baju= $request->input('jenis_baju');
        $baju->jumlah_bajuXL= $request->input('jumlah_bajuXL');
        $baju->jumlah_bajuL= $request->input('jumlah_bajuL');
        $baju->jumlah_bajuM= $request->input('jumlah_bajuM');
        $baju->jumlah_bajuS= $request->input('jumlah_bajuS');
        $baju->save();

        return redirect('/shirts')->with('success','Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $baju= Baju::find($id);
        $baju->delete();
        return redirect('/shirts')->with('success','Post Deleted');
    }
}
