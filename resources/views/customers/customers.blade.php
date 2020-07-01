<!-- Stored in resources/views/customers.blade.php -->

@extends('layouts.master')

<!-- Title for 'layouts/master.blade.php' -->
@section('title', 'Customers')

<!-- Content section for 'layouts/master.blade.php' -->
@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <!-- Creates a table row for each object within array $customers -->
            @foreach ($customers as $customer)
                <tr>
                    <!-- Creates table cells for values in $customer
                    Uses <th> when the key is 'customer_id' -->
                    @foreach ($customer as $key => $value)
                        @if ($key === 'customer_id')
                            <th scope="row"> {{ $value }} </th>
                        @else
                            <td> {{ $value }} </td>
                        @endif
                    @endforeach
                    <!-- Creates a hyperlink to edit customer details at the end of every row -->
                    <td><a href="/customers/id/{{$customer->customer_id}}"> Edit </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
