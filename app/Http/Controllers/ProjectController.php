<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{

    public function show() {
      $data = [];
      $data['projectList'] = Project::all();
      $data['currrentProject'] = session('currrentProject');
      $data['project'] = Project::find(session('currrentProject'))->load('oldDatabase', 'oldDatabase.tables','oldDatabase.tables.fields', 'newDatabase', 'newDatabase.tables', 'newDatabase.tables.fields');
      $data['project_id'] = Project::find(session('currrentProject'))->id;



      return view('app.project.show', compact('data'));
    }




    public function relatedTable(Request $request, Project $project)
    {
      dd('$request->all()',$request->all() , 'project', $project);
      foreach ($request->all() as $key => $value) {
        # code...
      }
    }
}
