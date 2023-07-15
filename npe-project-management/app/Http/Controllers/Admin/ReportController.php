<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class ReportController extends Controller
{
    public function index() {
        $reports = Project::where('isReviewed', 0)->where('tgl_selesai', '!=', NULL)->get();
        $reports_count = Project::where('isReviewed', 0)->where('tgl_selesai', '!=', NULL)->count();
        if($reports_count == 0){
            return view('Admin.report.empty-report');
        } else {
            return view('Admin.report.report')
                ->with(compact('reports'));
        }
    }

    public function detail($id) {
        $report_detail = Project::find($id);
        return view('Admin.report.detail-report')
            ->with(compact('report_detail'));
    }

    public function update(Request $request){
        $data = $request->all();

        $pm = User::find($request->pm_ids);
        $pm->credit = $request->creditPM;
        $pm->update();

        $project = Project::find($request->ids_project);
        $project->isReviewed = 1;
        $project->update();

        foreach ($data['row_ids'] as $key => $rowId) {
            $credit = $data['credit'][$key];
            User::where('id', $rowId)->update([
                'credit' => $credit,
            ]);
        }

        return redirect()->route('report.admin');
    }
}
