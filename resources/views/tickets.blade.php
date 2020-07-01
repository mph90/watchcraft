<!-- Stored in resources/views/tickets.blade.php -->
@extends('layouts.master')

@section('title', 'Reports')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Status</th>
                <th scope="col">Branch</th>
                <th scope="col">Description</th>
                <th scope="col">Other Notes</th>
                <th scope="col">Date Received</th>
                <th scope="col">Date Completed</th>
                <th scope="col">Date Paid</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <!-- Creates a table row for each object within array $tickets -->
            @foreach ($tickets as $ticket)
                <tr>
                    <!-- Creates table cells for values in $ticket
                    Uses <th> when the key is 'ticket_id' -->
                    @foreach ($ticket as $key => $value)
                        @if ($key === 'ticket_id')
                            <th scope="row"> {{ $value }} </th>
                        @else
                            <td> {{ $value }} </td>
                        @endif
                    @endforeach
                    <!-- Creates a hyperlink to edit ticket details at the end of every row -->
                    <td><a href="/tickets/id/{{$ticket->ticket_id}}"> Details </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
