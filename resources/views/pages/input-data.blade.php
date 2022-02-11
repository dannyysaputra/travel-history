@extends('master')

@section('title', 'Input Dashboard')

@section('content')
    <div class="card-header flex justify-content-between">
        <h4>Masukkan Data</h4>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card-body">
            <form action="/simpanTravel" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal dan jam</label>
                    <input type="datetime-local" id="exampleInputTanggal" name="tanggal"
                        class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="exampleInputLokasi">Lokasi yang dikunjungi</label>
                    <input type="text" id="exampleInputLokasi" name="lokasi" placeholder="Lokasi yang dikunjungi"
                        class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="exampleInputSuhuTubuh">Suhu tubuh</label>
                    <input type="number" id="exampleInputSuhuTubuh" name="suhu" placeholder="Suhu tubuh"
                        class="form-control form-control-sm">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
