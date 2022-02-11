@extends('master')

@section('title', 'Table User')

@section('content')
    <div class="card-header flex justify-content-between">
        <h4>User</h4>
        <a href="/input-dashboard" class="btn btn-primary mt-3">Insert</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">NIK</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $id = 1;
                @endphp
                @foreach ($data as $d)
                    <tr>
                        <th scope="row">{{ $id++ }}</th>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->password }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
