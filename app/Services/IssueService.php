<?php

namespace App\Services;

use App\Models\Issue;

class IssueService
{
    public function getHighPriorityOpenIssues(int $projectId)
    {
        $issues = Issue::whereRelation('project', 'id', $projectId)
                        ->open()
                        ->highPriority()
                        ->get();
        return $issues;
    }

    
    public function  getIssuesWithCommentsCount()
    {
        $issues = Issue::with(['comments'])->withCount('comments')->get();
        return $issues;
    }


}
?>
