<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    // Retrieves data for the ticket_id in the URL route and sends it to the details view.
    public function details($id)
    {
        $ticket = DB::select("
            SELECT
                tickets.ticket_id,
                ticket_categories.name,
                employees.first_name AS e_first_name,
                employees.last_name AS e_last_name,
                branches.location,
                customers.first_name AS c_first_name,
                customers.last_name AS c_last_name,
                tickets.description,
                tickets.other_notes,
                tickets.date_received,
                completed_tickets.price,
                completed_tickets.date_completed,
                payments.paid_date
            FROM
                tickets
            INNER JOIN ticket_categories ON tickets.ticket_category_code = ticket_categories.ticket_category_code
            INNER JOIN employees ON tickets.user_account_id = employees.user_account_id
            INNER JOIN branches ON tickets.branch_id = branches.branch_id
            INNER JOIN customers ON tickets.customer_id = customers.customer_id
            LEFT JOIN completed_tickets ON tickets.ticket_id = completed_tickets.ticket_id
            LEFT JOIN payments ON completed_tickets.ticket_id = payments.ticket_id
            WHERE tickets.ticket_id = '$id'
            ORDER BY tickets.ticket_category_code;
        ");

        return view('tickets/details')->with('ticket', $ticket);
    }
}
