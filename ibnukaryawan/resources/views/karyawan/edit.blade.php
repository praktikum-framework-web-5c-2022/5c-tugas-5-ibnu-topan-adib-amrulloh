@extends('layouts.dashboard')
@section('title', 'Karyawan')
@section('active1', 'active')
@section('isi')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="text-danger mx-auto">Isi Data Karyawan</h1>
    </div>
    <div class="card">
        <div class="card-body">

            <h2>Masukkan data Karyawan</h2>


            <form action="{{ route('karyawans.update', ['karyawan' => $karyawan->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap"
                        class="form-control" value="{{ old('nama') ?? $karyawan->nama}}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="nik">nik</label>
                    <input type="text" name="nik" id="nik" placeholder="Masukkan nik" class="form-control"
                        value="{{ old('nik') ?? $karyawan->nik}}">
                    @error('nik')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                        <option value="Laki-laki"
                            {{ old('jenis_kelamin') ?? $karyawan->jenis_kelamin == 'laki-laki' ? 'selected' : ' ' }}>Laki-laki
                        </option>
                        <option value="Perempuan"
                            {{ old('jenis_kelamin') ?? $karyawan->jenis_kelamin == 'perempuan' ? 'selected' : ' ' }}>Perempuan
                        </option>
                    </select>
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" placeholder="Masukkan Alamat" class="form-control">{{ old('alamat') ?? $karyawan->alamat }}</textarea>
                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="Masukkan Tempat Lahir" placeholder="Masukkan tempat_lahir"
                        class="form-control" value="{{ old('tempat_lahir') ?? $karyawan->tempat_lahir }}">
                    @error('tempat_lahir')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                        value="{{ old('tanggal_lahir') ?? $karyawan->tanggal_lahir }}">
                    @error('tanggal_lahir')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
             

                <h4>Masukkan Gajih Karyawan</h4>
                <div class=" mb-3">
                    <label for="gajih_pokok">Gajih Pokok</label>
                    <input type="text" name="gajih_pokok" id="gajih_pokok" placeholder="Masukkan gajih_pokok"
                        class="form-control" value="{{ old('gajih_pokok') ?? $karyawan->gajih->gajih_pokok }}">
                    @error('gajih_pokok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="gajih_lembur">gajih_lembur</label>
                    <input type="text" name="gajih_lembur" id="gajih_lembur" placeholder="Masukkan gajih_lembur"
                        class="form-control" value="{{ old('gajih_lembur') ?? $karyawan->gajih->gajih_lembur}}">
                    @error('gajih_lembur')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="tunjangan">tunjangan</label>
                    <input type="text" name="tunjangan" id="tunjangan" placeholder="Masukkan tunjangan"
                        class="form-control" value="{{ old('tunjangan') ?? $karyawan->gajih->tunjangan}}">
                    @error('tunjangan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="potongan">potongan</label>
                    <input type="text" name="potongan" id="potongan" placeholder="Masukkan potongan"
                        class="form-control" value="{{ old('potongan') ?? $karyawan->gajih->potongan}}">
                    @error('potongan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="total_gajih">total_gajih</label>
                    <input type="text" name="total_gajih" id="total_gajih" placeholder="Masukkan total_gajih"
                        class="form-control" value="{{ old('total_gajih') ?? $karyawan->gajih->total_gajih}}">
                    @error('total_gajih')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>



@endsection
