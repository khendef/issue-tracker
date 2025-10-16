<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Issue;
use App\Services\IssueService;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function __construct(private IssueService $issueService) {}

    public function issuesWithComments()
    {
        return response()->json($this->issueService->getIssuesWithCommentsCount());
    }

    public function highPriority($projectId)
    {
        return response()->json($this->issueService->getHighPriorityOpenIssues($projectId));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue)
    {
        //
    }
}
