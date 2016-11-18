<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use View;

class AppController extends Controller
{
    public function dashboard()
    {
      session(['currrentProject'=>'']);
      $data = [];
      $data['projectList'] = Project::all();
      $data['project'] = session('currrentProject') ? Project::find(session('currrentProject'))->load('oldDatabase', 'oldDatabase.tables','oldDatabase.tables.fields', 'newDatabase', 'newDatabase.tables', 'newDatabase.tables.fields') : '';
      $data['project_id'] = session('currrentProject') ? Project::find(session('currrentProject'))->id : '';


      // dd('$data',$data );

      return View::make('app.dashboard', compact('data'));
    }


    public function selectProject(Request $request)
    {

      // dd('failed');
      $validator = \Validator::make($request->all(), [
        'project_id' => 'required|not_in:placeholder',
      ]);

      if ($validator->fails() ) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
      }
      session(['currrentProject'=>$request->project_id]);



      $data = [];
      $data['projectList'] = Project::all();
      $data['currrentProject'] = session('currrentProject');
      $data['project'] = Project::find($request->project_id)->load('oldDatabase', 'oldDatabase.tables','oldDatabase.tables.fields', 'newDatabase', 'newDatabase.tables', 'newDatabase.tables.fields');
      $data['project_id'] = Project::find($request->project_id)->id;
      // $data['project_id'] = Project::find($request->project_id)->load('oldDatabase', 'oldDatabase.tables','oldDatabase.tables.fields', 'newDatabase', 'newDatabase.tables', 'newDatabase.tables.fields');

      // return View::make('app.project.show', compact('data'));
      return redirect('/project/'.$data['project_id']);
    }
}
