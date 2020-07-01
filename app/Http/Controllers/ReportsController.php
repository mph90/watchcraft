<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    // Retrieves data for instore tickets and sends it to the tickets view as $tickets
    public function instore()
    {
        $tickets = DB::select("
            SELECT
                tickets.ticket_id,
                ticket_categories.name,
                branches.location,
                tickets.description,
                tickets.other_notes,
                tickets.date_received,
                completed_tickets.date_completed,
                payments.paid_date
            FROM
                tickets
            INNER JOIN ticket_categories ON tickets.ticket_category_code = ticket_categories.ticket_category_code
            INNER JOIN branches ON tickets.branch_id = branches.branch_id
            LEFT JOIN completed_tickets ON tickets.ticket_id = completed_tickets.ticket_id
            LEFT JOIN payments ON completed_tickets.ticket_id = payments.ticket_id
            WHERE tickets.ticket_category_code = 1
            ORDER BY tickets.ticket_category_code;
        ");

        return view('tickets')->with('tickets', $tickets);
    }

    // Retrieves data for tickets to be sent to the workshop and sends it to the tickets view as $tickets
    public function send()
    {
        $tickets = DB::select("
            SELECT
                tickets.ticket_id,
                ticket_categories.name,
                branches.location,
                tickets.description,
                tickets.other_notes,
                tickets.date_received,
                completed_tickets.date_completed,
                payments.paid_date
            FROM
                tickets
            INNER JOIN ticket_categories ON tickets.ticket_category_code = ticket_categories.ticket_category_code
            INNER JOIN branches ON tickets.branch_id = branches.branch_id
            LEFT JOIN completed_tickets ON tickets.ticket_id = completed_tickets.ticket_id
            LEFT JOIN payments ON completed_tickets.ticket_id = payments.ticket_id
            WHERE tickets.ticket_category_code = 2
            ORDER BY tickets.ticket_category_code;
        ");

        return view('tickets')->with('tickets', $tickets);
    }

    // Retrieves data for workshop tickets and sends it to the tickets view as $tickets
    public function workshop()
    {
        $tickets = DB::select("
            SELECT
                tickets.ticket_id,
                ticket_categories.name,
                branches.location,
                tickets.description,
                tickets.other_notes,
                tickets.date_received,
                completed_tickets.date_completed,
                payments.paid_date
            FROM
                tickets
            INNER JOIN ticket_categories ON tickets.ticket_category_code = ticket_categories.ticket_category_code
            INNER JOIN branches ON tickets.branch_id = branches.branch_id
            LEFT JOIN completed_tickets ON tickets.ticket_id = completed_tickets.ticket_id
            LEFT JOIN payments ON completed_tickets.ticket_id = payments.ticket_id
            WHERE tickets.ticket_category_code = 3
            ORDER BY tickets.ticket_category_code;
        ");

        return view('tickets')->with('tickets', $tickets);
    }

    // Retrieves data for tickets to be returned to store and sends it to the tickets view as $tickets
    public function return()
    {
        $tickets = DB::select("
            SELECT
                tickets.ticket_id,
                ticket_categories.name,
                branches.location,
                tickets.description,
                tickets.other_notes,
                tickets.date_received,
                completed_tickets.date_completed,
                payments.paid_date
            FROM
                tickets
            INNER JOIN ticket_categories ON tickets.ticket_category_code = ticket_categories.ticket_category_code
            INNER JOIN branches ON tickets.branch_id = branches.branch_id
            LEFT JOIN completed_tickets ON tickets.ticket_id = completed_tickets.ticket_id
            LEFT JOIN payments ON completed_tickets.ticket_id = payments.ticket_id
            WHERE tickets.ticket_category_code = 4
            ORDER BY tickets.ticket_category_code;
        ");

        return view('tickets')->with('tickets', $tickets);
    }

    // Retrieves data for tickets ready for payment and sends it to the tickets view as $tickets
    public function complete()
    {
        $tickets = DB::select("
            SELECT
                tickets.ticket_id,
                ticket_categories.name,
                branches.location,
                tickets.description,
                tickets.other_notes,
                tickets.date_received,
                completed_tickets.date_completed,
                payments.paid_date
            FROM
                tickets
            INNER JOIN ticket_categories ON tickets.ticket_category_code = ticket_categories.ticket_category_code
            INNER JOIN branches ON tickets.branch_id = branches.branch_id
            LEFT JOIN completed_tickets ON tickets.ticket_id = completed_tickets.ticket_id
            LEFT JOIN payments ON completed_tickets.ticket_id = payments.ticket_id
            WHERE tickets.ticket_category_code = 5
            ORDER BY tickets.ticket_category_code;
        ");

        return view('tickets')->with('tickets', $tickets);
    }

    // Retrieves data for paid tickets and sends it to the tickets view as $tickets
    public function paid()
    {
        $tickets = DB::select("
            SELECT
                tickets.ticket_id,
                ticket_categories.name,
                branches.location,
                tickets.description,
                tickets.other_notes,
                tickets.date_received,
                completed_tickets.date_completed,
                payments.paid_date
            FROM
                tickets
            INNER JOIN ticket_categories ON tickets.ticket_category_code = ticket_categories.ticket_category_code
            INNER JOIN branches ON tickets.branch_id = branches.branch_id
            LEFT JOIN completed_tickets ON tickets.ticket_id = completed_tickets.ticket_id
            LEFT JOIN payments ON completed_tickets.ticket_id = payments.ticket_id
            WHERE tickets.ticket_category_code = 6
            ORDER BY tickets.ticket_category_code;
        ");

        return view('tickets')->with('tickets', $tickets);
    }

    // Retrieves data for all tickets and sends it to the tickets view as $tickets
    public function all()
    {
        $tickets = DB::select("
            SELECT
                tickets.ticket_id,
                ticket_categories.name,
                branches.location,
                tickets.description,
                tickets.other_notes,
                tickets.date_received,
                completed_tickets.date_completed,
                payments.paid_date
            FROM
                tickets
            INNER JOIN ticket_categories ON tickets.ticket_category_code = ticket_categories.ticket_category_code
            INNER JOIN branches ON tickets.branch_id = branches.branch_id
            LEFT JOIN completed_tickets ON tickets.ticket_id = completed_tickets.ticket_id
            LEFT JOIN payments ON completed_tickets.ticket_id = payments.ticket_id
            ORDER BY tickets.ticket_category_code;
        ");

        return view('tickets')->with('tickets', $tickets);
    }

    // Retrieves data for all customers and sends it to the customers view as $customers
    public function customers()
    {
        $customers = DB::select("
            SELECT * FROM customers;
        ");

        return view('customers/customers')->with('customers', $customers);
    }
}
