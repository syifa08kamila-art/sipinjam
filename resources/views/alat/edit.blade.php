
@extends('layouts.app')

@section('judul', 'Edit Alat')

@section('konten')

    <h2>Edit Data Alat</h2>

    <form method="POST" action="{{ route('alat.update', $alat) }}">
        @csrf
        @method('PUT')

        <p>
            <label>Kode Alat</label><br>
            <input type="text" name="kode" value="{{ old('kode', $alat->kode) }}">
            @error('kode')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Nama Alat</label><br>
            <input type="text" name="nama" value="{{ old('nama', $alat->nama) }}">
            @error('nama')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Stok</label><br>
            <input type="number" name="stok" value="{{ old('stok', $alat->stok) }}">
            @error('stok')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Kondisi</label><br>
            <select name="kondisi">
                <option value="baik" {{ old('kondisi', $alat->kondisi) == 'baik' ? 'selected' : '' }}>Baik</option>
                <option value="rusak ringan" {{ old('kondisi', $alat->kondisi) == 'rusak ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                <option value="rusak berat" {{ old('kondisi', $alat->kondisi) == 'rusak berat' ? 'selected' : '' }}>Rusak Berat</option>
            </select>
            @error('kondisi')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Lokasi</label><br>
            <input type="text" name="lokasi" value="{{ old('lokasi', $alat->lokasi) }}">
            @error('lokasi')
                <br><span style="color:red">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Perbarui</button>
        <a href="{{ route('alat.index') }}">Kembali</a>

    </form>

@endsection
