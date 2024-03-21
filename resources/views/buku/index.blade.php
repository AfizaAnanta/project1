@extends('template')

@section('konten')

<button id="tombolku" class="btn btn-primary"> Input buku</button>
<h2>Daftar buku</h2>

<table class="table table-bordered">
<thead>
<tr>
<th scope="col">kode buku </th>
<th scope="col">Judul buku</th>
<th scope="col">penerbit</th>
<th scope="col">pengarang</th>
<th scope="col">jumlah</th>
<th scope="col"></th>
<th scope="col">AKSI</th>
</tr>
</thead>
<tbody>
@forelse ($bukus as $buku)
<tr>
<td class="text-center">{{ $buku->kodebuku }}</td>
<td class="text-center">{{ $buku->judulbuku }}</td>
<td class="text-center">{{ $buku->penerbit }}</td>
<td class="text-center">{{ $buku->pengarang }}</td>
<td class="text-center">{{ $buku->jumlah }}</td>

<td class="text-center">
<form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('buku.destroy', $buku->id) }}" method="POST">
<a href="{{ route('buku.edit', $buku->id) }}"
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
       
    <script>
        scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            scr-"https://stackpath.bootstrapcdn,com/bootstrap/4.5.2/js/bootstrap.min.js">
        </script>

    <div id="myModal" class="penghalang">
        <div class="modal-content">
            <span id="tutup">&times;</span>
            <p>Form input buku</p>
            <form action="{{ route('buku.store') }}" method="POST"
            enctype="multipart/form-data" name="form1">
            @csrf
                <div class="form-group">
                    <label>kode buku</label>
                    <input type="text" name="kodebuku">
                    
                </div>
                <div class="form-group">
                    <label>judul buku</label>
                    <input type="text" name="judulbuku">
                </div>
                <div class="form-group">
                    <label>penerbit</label>
                    <input type="text" name="penerbit">
                </div>
                <div class="form-group">
                    <label>pengarang</label>
                    <input type="text" name="pengarang">
                </div>
                <div class="form-group">
                    <label>jumlah</label>
                    <input type="text" name="jumlah">
                </div>
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <input type="reset" value="BATAL" class="btn btn-danger">
            </form>

    </div>
    @endsection