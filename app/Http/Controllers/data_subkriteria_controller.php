<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Subkriteria;

class data_subkriteria_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasubkriteria = Subkriteria::orderBy('id', 'asc')->paginate(5);
        return view('datasubkriteria.index',compact('datasubkriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasubkriteria.create');
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
            'kd_subkriteria' => 'required|min:1|max:6|unique:subkriteria',
            'nama' => 'required|min:1|max:25|unique:subkriteria'
        ]);

        $datasubkriteria = Subkriteria::create($request->all());
        return redirect()->route('subkriteria.index')->with('message','Data Subkriteria berhasil ditambah');
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
        $datasubkriteria = Subkriteria::findOrFail($id);
        return view('datasubkriteria.edit',compact('datasubkriteria'));
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
            'kd_subkriteria' => 'required|min:1|max:6',
            'nama' => 'required|min:1|max:25'
        ]);
        $subdatakriteria = Subkriteria::findOrFail($id)->update($request->all());
        return redirect()->route('subkriteria.index')->with('message', 'Data Subkriteria berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datasubkriteria = Subkriteria::findOrFail($id)->delete();
        return redirect()->route('subkriteria.index')->with('message', 'Data Subkriteria berhasil dihapus');
    }
}
