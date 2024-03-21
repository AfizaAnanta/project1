@extends('template')
@section('judul_halaman','')
@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}"method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label class="font-weight-bold">JUDUL BUKU</label>
                        <input type="text" class="form-control @error('judulbuku') is-invalid @enderror" 
                        name="judulbuku" value="{{ old('judulbuku', $buku->judulbuku) }}" placeholder="Masukkan Judul Buku">
                         @error('judulbuku')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                         </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">PENERBIT</label>
                        <input type="text" class="form-control @error('penerbit')
                        is-invalid @enderror" name="penerbit" value="{{ old('penerbit', $buku->penerbit )
                        }}" placeholder="Masukkan Penerbit">
                        @error('penerbit')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">penerbit</label>
                        <input type="text" class="form-control @error('penerbit')
                        is-invalid @enderror" name="penerbit" value="{{ old('penerbit', $buku->penerbit )
                        }}" placeholder="Masukkan penerbit">
                        @error('penerbit')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">pengarang</label>
                        <input type="text" class="form-control @error('pengarang')
                        is-invalid @enderror" name="pengarang" value="{{ old('pengarang', $buku->pengarang )
                        }}" placeholder="Masukkan pengarang">
                        @error('pengarang')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">JUMLAH</label>
                        <input type="text" class="form-control @error('jumlah')
                        is-invalid @enderror" name="jumlah" value="{{ old('jumlah', $buku->jumlah )
                        }}" placeholder="Masukkan Jumlah">
                        @error('jumlah')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
