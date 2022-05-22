<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kampus = Kampus::all();

        return view('kampus.index', [
            'kampus' => $kampus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kampus.create');
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
            'nama'     => 'required',
            'alamat'   => 'required',
            'no_hp'    => 'required',
            'email'    => 'required|email',
            'website'  => 'required',
        ]);

        $kampus = Kampus::create([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat,
            'no_hp'    => $request->no_hp,
            'email'    => $request->email,
            'website'  => $request->website,
            'facebook' => $request->facebook,
            'twitter'  => $request->twitter,
        ]);

        if($kampus){
            //redirect dengan pesan sukses
            return redirect()->route('kampuses.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kampuses.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
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
    public function edit(Kampus $kampus)
    {
        return view('kampus.edit', [
            'kampus' => $kampus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kampus $kampus)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'alamat'   => 'required',
            'no_hp'    => 'required|numeric',
            'email'    => 'required|email',
            'website'  => 'required',
        ]);

        //get data by ID
        $kampus = Kampus::findOrFail($kampus->id);

        $kampus->update([
                'nama'     => $request->nama,
                'alamat'   => $request->alamat,
                'no_hp'    => $request->no_hp,
                'email'    => $request->email,
                'website'  => $request->website,
                'facebook' => $request->facebook,
                'twitter'  => $request->twitter,
        ]);

        if($kampus){
            //redirect dengan pesan sukses
            return redirect()->route('kampuses.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kampuses.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kampus = Kampus::findOrFail($id);

        $kampus->delete();

        if($kampus){
            //redirect dengan pesan sukses
            session()->flash("success", "Data Berhasil dihapus.");
            return redirect()->route("kampuses.index");
        }else{
            //redirect dengan pesan error
            return redirect()->route('kampuses.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
