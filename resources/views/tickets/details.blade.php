<!-- Stored in resources/views/ticketdetails.blade.php -->
@extends('layouts.master')

@section('title', 'Ticket Details')

@section('content')
    <h3>Ticket # {{ $ticket[0]->ticket_id }}</h3>
    
    <ul>
        <li>Status: {{ $ticket[0]->name }}</li>
        <li>Registed by: {{$ticket[0]->e_first_name}} {{$ticket[0]->e_last_name}} @ {{$ticket[0]->location}}</li>
        <li>Registered on: {{$ticket[0]->date_received}}</li>
        <li>Customer: <a href="#">{{$ticket[0]->c_first_name}} {{$ticket[0]->c_last_name}}</a></li>
        <li>Description: {{$ticket[0]->description}}</li>
    </ul>

    @if (isset($ticket[0]->other_notes))
        <h6>Other Notes</h6>
        <p>{{$ticket[0]->other_notes}}</p>
    @endif

    <ul>
        @if (isset($ticket[0]->date_completed))
            <li>Completed on: {{$ticket[0]->date_completed}}</li>
            <li>Price: &#163;{{$ticket[0]->price}}</li>
        @endif
        @if (isset($ticket[0]->paid_date))
            <li>Paid on: {{$ticket[0]->paid_date}}</li>
        @endif
    </ul>

@endsection