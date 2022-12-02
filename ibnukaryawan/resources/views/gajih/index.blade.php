@extends('layouts.dashboard')
@section('title', 'Karyawan')
@section('active2', 'active')
@section('isi')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="text-danger mx-auto">Data Gajih Karyawan </h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Gajih Pokok</th>
                    <th scope="col">Gajih Lembur</th>
                    <th scope="col">Tunjangan</th>
                    <th scope="col">Potongan</th>
                    <th scope="col">Total Gajih</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gajihs as $gajih)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gajih->karyawan->nama ?? "n/a" }}</td>
                        <td>{{ $gajih->gajih_pokok }}</td>
                        <td>{{ $gajih->gajih_lembur }}</td>
                        <td>{{ $gajih->tunjangan }}</td>
                        <td>{{ $gajih->potongan }}</td>
                        <td>{{ $gajih->total_gajih }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
