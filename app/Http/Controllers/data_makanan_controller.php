<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Makanan;

class data_makanan_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamakanan = Makanan::orderBy('id', 'asc')->paginate(5);
        return view('datamakanan.index',compact('datamakanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datamakanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_makanan' => 'required|min:1|max:6|unique:makanan',
            'nama' => 'required|min:1|max:25|unique:makanan'
        ]);

        $datamakanan = Makanan::create($request->all());
        return redirect()->route('makanan.index')->with('message','Data Makanan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datamakanan = Makanan::findOrFail($id);
        return view('datamakanan.edit',compact('datamakanan'));
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
        $this->validate($request, [
            'kd_makanan' => 'required|min:1|max:6',
            'nama' => 'required|min:1|max:25'
        ]);
        $datamakanan = Makanan::findOrFail($id)->update($request->all());
        return redirect()->route('makanan.index')->with('message', 'Data Makanan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datamakanan = Makanan::findOrFail($id)->delete();
        return redirect()->route('makanan.index')->with('message', 'Data Makanan berhasil dihapus');
    }
}
