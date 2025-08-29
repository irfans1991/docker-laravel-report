<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Report;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index(Request $request)
    {

        $reports = Report::when($request->month, function($query) use ($request) {
             // parse "2025-05-01"
                $date = Carbon::parse($request->month);
                $month = $date->format('m'); // "05"
                $year  = $date->format('Y'); // "2025"

                $query->whereMonth('date_report', $month)
                    ->whereYear('date_report', $year);
        })
        ->whereNull('deleted_at')
        ->latest()
        ->get();


        return Inertia::render('summary/Summary',[
            'reports' => $reports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
