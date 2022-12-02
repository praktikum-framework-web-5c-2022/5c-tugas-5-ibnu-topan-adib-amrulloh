@extends('layouts.dashboard')
@section('title', 'Karyawan')
@section('active1', 'active')
@section('isi')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="text-danger mx-auto">Data Karyawan</h1>
    </div>
    <div class="table-responsive">
        <a href="/karyawans/create" class="btn btn-primary my-3"><span data-feather="plus" class="mx-3"></span>Tambah</a>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Gajih</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawans as $karyawan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->nik }}</td>
                        <td>{{ $karyawan->jenis_kelamin }}</td>
                        <td>{{ $karyawan->alamat }}</td>
                        <td>{{ $karyawan->tempat_lahir }}</td>
                        <td>{{ $karyawan->tanggal_lahir }}</td>
                        <td>{{ $karyawan->gajih->total_gajih ?? 'n/a' }}</td>

                        <td>
                            <a href="{{ route('karyawans.edit', ['karyawan' => $karyawan->id]) }}"
                                class="d-inline btn btn-warning btn-sm">Update</a>
                            <form action="{{ route('karyawans.destroy', ['karyawan' => $karyawan->id]) }}" method="POST"
                                class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="d-inline btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
