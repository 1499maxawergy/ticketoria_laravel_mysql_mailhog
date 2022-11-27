@extends('layouts.admin')
@section('content')
    <h2>Билеты/Tickets</h2>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Place</th>
            <th>Cost</th>
            <th>Quantity</th>
            <th>When</th>
        </tr>
        @foreach($tickets as $ticket)
        <tr>
            <td>{{$ticket->id}}</td>
            <td>{{$ticket->title}}</td>
            <td>{{$ticket->description}}</td>
            <td>{{$ticket->place}}</td>
            <td>{{$ticket->cost}}</td>
            <td>{{$ticket->quantity}}</td>
            <td>{{$ticket->when}}</td>
        </tr>
        @endforeach
    </table>
@endsection
