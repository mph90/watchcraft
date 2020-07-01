<!-- Stored in resources/views/tickets/edit.blade.php -->
@extends('layouts.master')

@section('title', 'Ticket Details - Edit')

@section('content')

    <h3>Ticket # {{ $ticket[0]->ticket_id }} - Edit</h3>
    <br>

    <form method="post" action="..\update\{{ $ticket[0]->ticket_id }}">
        @csrf

        <div class="form-group">
            <label for="ticketStatus">Order Status</label>
            <select class="form-control" name="ticketStatus">

                <!-- Loop through ticket categories and add them as options -->
                @foreach ($categories as $category)

                    <!-- Set the current ticket category as selected by default -->
                    @if ($category->name === $ticket[0]->name)
                        <option value="{{ $category->ticket_category_code }}" selected="selected">{{ $category->name }}</option>
                    @else

                        <!-- Disable options with ticket_category_code greater than 3 so that they cannot be set manually -->
                        @if ($category->ticket_category_code < 4)
                            <option value="{{ $category->ticket_category_code }}">{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->ticket_category_code }}" disabled>{{ $category->name }}</option>
                        @endif

                    @endif
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="ticketDescription">Description</label>
            <input class="form-control" name="ticketDescription" minlength="4" value="{{ $ticket[0]->description }}">
        </div>

        <div class="form-group">
            <label for="ticketNotes">Other Notes</label>
            <textarea class="form-control" name="ticketNotes" rows="3">{{ $ticket[0]->other_notes }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection