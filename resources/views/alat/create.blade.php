@extends('layouts.app')
@section('judul', 'Tambah Alat')

@section('konten')
    <h2>Tambah Data Alat</h2>

    <form action="{{ route('alat.store') }}" method="POST">
        @csrf

        <p>
            <label>Kode Alat</label><br>
            <input type="text" name="kode" value="{{ old('kode') }}">
            @error('kode')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Nama Alat</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
    <label>Lokasi</label><br>
    <input type="text" name="lokasi" value="{{ old('lokasi') }}">
    @error('lokasi')
        <br><span style="color:red">{{ $message }}</span>
    @enderror
</p>

        <p>
            <label>Stok</label><br>
            <input type="number" name="stok" value="{{ old('stok') }}">
            @error('stok')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Kondisi</label><br>
            <select name="kondisi">
                <option value="baik">Baik</option>
                <option value="rusak ringan">Rusak Ringan</option>
                <option value="rusak berat">Rusak Berat</option>
            </select>
            @error('kondisi')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('alat.index') }}">Kembali</a>
    </form>
@endsection