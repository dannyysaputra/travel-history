@extends('master')

@section('title', 'General Dashboard')

@section('content')
    <div class="card-header flex justify-content-between">
        <h4>Biodata</h4>
        <a href="/input-dashboard" class="btn btn-primary mt-3">Insert</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Wali Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Danny Suggi S</td>
                    <td>876283672</td>
                    <td>RPL</td>
                    <td>12</td>
                    <td>Bu Pratiwi</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bastam Novalyana</td>
                    <td>877265171</td>
                    <td>RPL</td>
                    <td>12</td>
                    <td>Bu Pratiwi</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Adi Lukman</td>
                    <td>886192655</td>
                    <td>RPL</td>
                    <td>12</td>
                    <td>Bu Pratiwi</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
