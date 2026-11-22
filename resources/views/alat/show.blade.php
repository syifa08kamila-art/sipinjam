
@extends('layouts.app')

@section('judul', 'Detail Alat')

@section('konten')

    <h2>Detail Data Alat</h2>

    <p><strong>Kode Alat:</strong> {{ $alat->kode }}</p>
    <p><strong>Nama Alat:</strong> {{ $alat->nama }}</p>
    <p><strong>Stok:</strong> {{ $alat->stok }}</p>
    <p><strong>Kondisi:</strong> {{ $alat->kondisi }}</p>
    <p><strong>Lokasi:</strong> {{ $alat->lokasi }}</p>

    <a href="{{ route('alat.index') }}">Kembali</a>

@endsection
