@extends('master')

@section('title', 'General Dashboard')

@section('content')
    <div class="card-header flex justify-content-between">
        <h4>Perjalanan</h4>
        <a href="/input-dashboard" class="btn btn-primary mt-3">Insert</a>
    </div>
    
    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">
                        Tanggal
                        <a href="/sorter?field=tanggal&mode=asc">asc</a>
                        <a href="/sorter?field=tanggal&mode=desc"><i class="fa-solid fa-arrow-down"></i></a>
                    </th>
                    <th scope="col">
                        Lokasi
                        <a href="/sorter?field=lokasi&mode=asc">asc</a>
                        <a href="/sorter?field=lokasi&mode=desc">desc</a>
                    </th>
                    <th scope="col">
                        Suhu
                        <a href="/sorter?field=suhu&mode=asc">asc</a>
                        <a href="/sorter?field=suhu&mode=desc">desc</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($data->count() == 0)
                    <tr>
                        <td colspan="5">Tidak ada data yang ditampilkan.</td>
                    </tr>
                @endif
                @php
                    $id = 1;
                @endphp
                @foreach ($data as $d)
                    <tr>
                        <th scope="row">{{ $id++ }}</th>
                        <td>{{ $d->tanggal }}</td>
                        <td>{{ $d->lokasi }}</td>
                        <td>{{ $d->suhu }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links('pagination::bootstrap-4') }}
    </div>
@endsection
