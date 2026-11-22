
@extends('layouts.app')

@section('judul', 'Daftar Alat')

@section('konten')

    <h2>Daftar Alat</h2>

    @if (session('sukses'))
        <p style="color:green">{{ session('sukses') }}</p>
    @endif

    <a href="{{ route('alat.create') }}">Tambah Alat</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Alat</th>
                <th>Stok</th>
                <th>Kondisi</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($alat as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->kode }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>
    @if ($a->stok == 0)
        <span style="color:red">{{ $a->stok }}</span>
    @else
        {{ $a->stok }}
    @endif
</td>
                    <td>{{ $a->kondisi }}</td>
                    <td>{{ $a->lokasi }}</td>
                    <td>
    <a href="{{ route('alat.show', $a) }}">Detail</a> |

    <a href="{{ route('alat.edit', $a) }}">Edit</a> |

    <form method="POST"
        action="{{ route('alat.destroy', $a) }}"
        style="display:inline"
        onsubmit="return confirm('Hapus alat ini?')">

        @csrf
        @method('DELETE')

        <button type="submit">Hapus</button>
    </form>
</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    {{ $alat->links() }}

@endsection
