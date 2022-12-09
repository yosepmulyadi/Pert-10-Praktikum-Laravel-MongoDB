<?php

namespace App\Http\Controllers;

use App\Models\laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = laptop::all();

        return view('laptops.index',compact('laptops'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laptops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'merk'  => 'required',
            'prosesor'  => 'required',
            'penyimpanan'  => 'required',
            'ram'  => 'required',
        ]);

        Laptop::create($request->all());
        return redirect()->route('laptop.index')
                        ->with('success','Laptop berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        return view('laptops.show',compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        return view('laptops.edit',compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        request()->validate([
            'merk'  => 'required',
            'prosesor'  => 'required',
            'penyimpanan'  => 'required',
            'ram'  => 'required',
        ]);

        $laptop->update($request->all());

        return redirect()->route('laptop.index')
                        ->with('success','Laptop berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();

        return redirect()->route('laptop.index')
                        ->with('success','Laptop berhasil dihapus');
    }
}