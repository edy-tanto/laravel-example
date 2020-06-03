<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectReportController extends Controller
{
    public function index()
    {
        $projects = Project::with([
                'customer' => function($query) {
                    $query->select('id', 'name');
                },
                'workType' => function($query) {
                    $query->select('id', 'name');
                }
            ])
            ->get();

        return view('project-report.index')
            ->withProjects($projects);
    }
}
