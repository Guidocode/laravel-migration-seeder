@extends('layouts.main')

@section('title', 'Trains')

@section('content')

    <h1>Trains</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">agency</th>
            <th scope="col">departude_station</th>
            <th scope="col">arrival_station</th>
            <th scope="col">departure_time</th>
            <th scope="col">arrival_time</th>
            <th scope="col">train_code</th>
            <th scope="col">carriages_number</th>
            <th scope="col">train_on_time</th>
            <th scope="col">cancelled</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train )
                <tr>
                    <th scope="row">{{$train->id}}</th>
                    <td>{{$train->agency}}</td>
                    <td>{{$train->departude_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->carriages_number}}</td>
                    <td>{{$train->train_on_time}}</td>
                    <td>{{$train->cancelled}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($trains as $train )

    @endforeach

@endsection
