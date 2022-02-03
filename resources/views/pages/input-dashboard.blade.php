@extends('master')

@section('title', 'Input Biodata')

@section('content')
    <div class="card-header flex justify-content-between">
        <h4>Masukkan Data</h4>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card-body">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" id="nama" name="nama" class="form-control form-control-sm">
            </div>
            <div class="form-group">
                <label>NIS</label>
                <input type="number" id="nis" name="nis" class="form-control form-control-sm">
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select class="form-control">
                    <option>Pilih Jurusan</option>
                    <option>TKJ</option>
                    <option>RPL</option>
                    <option>MM</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select class="form-control">
                    <option>Pilih Kelas</option>
                    <option>12</option>
                    <option>11</option>
                    <option>10</option>
                </select>
            </div>
            <div class="form-group">
                <label>Wali Kelas</label>
                <select class="form-control">
                    <option>Pilih Wali Kelas</option>
                    <option>Bu Pratiwi</option>
                    <option>Pak Asur</option>
                    <option>Pak Ahen</option>
                </select>
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
