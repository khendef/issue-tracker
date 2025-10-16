<?php

namespace App\Services;

use App\Models\Employee;
use App\Models\User;


class EmployeeService
{

    public function getCompletedIssuesCount($projectId)  
    {
        $EmployeesIssues = Employee::whereRelation('issues','status','completed')
                            ->withCount(['issues'=>function($query){
                            $query->where('status', 'completed');
                            }])
                            ->get();

        return $EmployeesIssues;
    }



}
?>
