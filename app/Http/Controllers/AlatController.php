<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAlatRequest;
use App\Http\Requests\StoreAlatRequest;
use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $alat = Alat::orderBy('kode')->paginate(10);
    return view('alat.index', compact('alat'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('alat.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlatRequest $request)
{
    Alat::create($request->validated());

    return redirect()->route('alat.index')
        ->with('sukses', 'Data alat berhasil ditambahkan.');
}

    /**
     * Display the specified resource.
     */
    public function show(Alat $alat)
{
    return view('alat.show', compact('alat'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alat $alat)
{
    return view('alat.edit', compact('alat'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlatRequest $request, Alat $alat)
{
    $alat->update($request->validated());

    return redirect()->route('alat.index')
        ->with('sukses', 'Data alat berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alat $alat)
{
    $alat->delete();

    return redirect()->route('alat.index')
        ->with('sukses', 'Data alat berhasil dihapus.');
}
}
