<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Report;
use App\Models\logHistory;
use App\Models\noDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ReportResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = Report::query()->whereNull('deleted_at'); // Exclude deleted records

        if ($request->has('verified') && $request->verified === 'true') {
            $query->where('verified_by', '=', null);
        }

        if ($request->filled('search')) {
            $searchTerm = trim($request->search);
            $query->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchTerm) . '%']);
        }

        if ($request->filled(['start_date', 'end_date'])) {
            $query->whereBetween('date_report', [$request->start_date, $request->end_date]);
        }

        $reports = $query->get();
        return Inertia::render('report/Report', [
            'reports' => $reports,
            'filters' => $request->only(['start_date', 'end_date', 'search', 'verified']),
        ]);
            }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doc = noDocument::latest()->get();
        // dd($doc);
        return Inertia::render('report/ReportCreate',[
            'doc' => $doc
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = Validator::make($request->all(),[
                'title' => 'required|max:255',
                'no_document' => 'required|max:255',
                'deskripsi' => 'required|max:255',
                'department' => 'sometimes',
                'uri' => 'required|max:255',
                'date_report' => 'required'
            ]);

        if (!$report->passes()) {
            return back()->withErrors($report)->withInput();
        }else{
            try {
                $inputReport = $request->all();
                $inputReport['name'] = Auth::user()->firstname;
                Report::create($inputReport);
                $check = noDocument::where('no_document',$request['no_document'])->exists();
                if (!$check) {
                    noDocument::create([
                        'no_document' => $request['no_document'],
                    ]);
                }
                return redirect()
                ->route('report.index')
                ->with('success', 'report created succesfully');
            } catch (Exception $e) {
                return 'error' . $e->getMessage();
            }
        }


        // noDocument::create([
        //     'no_document' => $request->no_document
        // ]);
        // return redirect()
        // ->route('report.index')
        // ->with('success', 'report created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = Report::findOrFail($id);
        //hasMany
        $comment = logHistory::where('report_id', $id)->get();
        // $comment = logHistory::findOrFail($id);
        return Inertia::render('report/ReportEdit',[
            'report' => $report,
            'comment' => $comment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Report::findOrFail($id);
        // Validate the request
            $validated = $request->validate([
                'title' => 'required|max:255',
                'no_document' => 'required|max:255',
                'deskripsi' => 'required|max:255',
                'department' => 'sometimes',
                'uri' => 'required|max:255',
                'report_date' => 'required'
            ]);

            // Update the report
            $report->update($validated);

            // Redirect back with success message
            return to_route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Report::find($id);
        $report->deleted_at = Carbon::now();
        $report->deleted_by = Auth::user()->firstname;
        $report->update();

        return redirect()->back()->with('success', 'Record deleted successfully.');
    }

    public function comment(Request $request){
        
        $validated = $request->validate([
            'comment' => 'required',
        ]);

        logHistory::create([
            'report_id' => $request->report_id,
            'name' => Auth::user()->firstname,
            'comment' => $request->comment,
        ]);

        return redirect()->back();
    }

    public function checked(string $id){
        $report = Report::findOrFail($id);
        

            // Update the report
            $report->update([
                'checked_by' => Auth::user()->firstname,
                'date_checked' => Carbon::now(),
            ]);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Record checked successfully.');
        }
    public function verified(string $id){
        $report = Report::findOrFail($id);
            // Update the report
            $report->update([
                'verified_by' => Auth::user()->firstname,
                'date_verified' => Carbon::now(),
            ]);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Record verified successfully.');
        }
}
