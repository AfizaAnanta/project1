@extends('template')

@section('konten')

<button id="tombolku" class="btn btn-primary"> Input Biodata</button>
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">Nama </th>
<th scope="col">Tempat/Tanggal Lahir</th>
<th scope="col">Jurusan</th>
<th scope="col">Kelas</th>
<th scope="col"></th>
<th scope="col">AKSI</th>
</tr>
</thead>
<tbody>
@forelse ($biodatas as $biodata)
<tr>
<td class="text-center">
{{ $biodata->nama }}
</td>
<td>{{ $biodata->ttl }}</td>
<td>{{ $biodata->jurusan }}</td>
<td>{{ $biodata->kelas }}</td>
<td></td>
<td class="text-center">
<form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('biodata.destroy', $biodata->id) }}" method="POST">
<a href="{{ route('biodata.edit', $biodata->id) }}"
class="btn btn-sm btn-warning">EDIT</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-sm btn-secondary  bg-danger">HAPUS</button>
</form>
</td>
</tr>
@empty
<div class="alert alert-danger">
Data Blog belum Tersedia.
</div>
@endforelse
</tbody>
</table>
    <div id="myModal" class="penghalang">
        <div class="modal-content">
            <span id="tutup">&times;</span>
            <p>Form input biodata</p>
            <form action="{{ route('biodata.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama">
                </div>
                <div class="form-group">
                    <label>Tempat/Tanggal Lahir</label>
                    <input type="text" name="ttl">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="kelas">
                </div>
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <input type="reset" value="BATAL" class="btn btn-danger">
            </form>

    </div>


@endsection