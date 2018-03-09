<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Kriteria;

class data_kriteria_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakriteria = Kriteria::orderBy('id')->paginate(5);
        return view('datakriteria.index',compact('datakriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datakriteria.create');
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
            'kd_kriteria' => 'required|min:1|max:6|unique:kriteria',
            'nama' => 'required|min:1|max:25|unique:kriteria'
        ]);

        $datakriteria = Kriteria::create($request->all());
        return redirect()->route('kriteria.index')->with('message','Data Kriteria berhasil ditambah');
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
        $datakriteria = Kriteria::findOrFail($id);
        return view('datakriteria.edit',compact('datakriteria'));
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
            'kd_kriteria' => 'required|min:1|max:6',
            'nama' => 'required|min:1|max:25'
        ]);
        $datakriteria = Kriteria::findOrFail($id)->update($request->all());
        return redirect()->route('kriteria.index')->with('message', 'Data Kriteria berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datakriteria = Kriteria::findOrFail($id)->delete();
        return redirect()->route('kriteria.index')->with('message', 'Data Kriteria berhasil dihapus');
    }
}
