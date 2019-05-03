<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;

class ProjectAdminController extends Controller
{
    function __construct(Request $request)
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /**Returns the 'admin projects' view when the route is activitated.
      Makes available all of the projects from the database
      */

        $projects = Project::all();

        return view('admin/projects/index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /**Sets up the ability to store data from the form on the Admin
      Project page into the project database which allows an admin to
      edit current projects*/
        $input = $request->all();

        Project::create($input);

        return redirect('/project');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /**This allows the admin to edit current projects by finding the
      details of the project by identifying the id and returning the edit
      view*/
      $project = Project::findOrFail($id);

      return view('admin/projects/edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      /*Allows the updating of data from the edit view and then
      returns the updated data in the admin projects view*/

      $project = Project::findOrFail($id);

      $project->update($request->all());

      return redirect('admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      /*Allows the deletion of a project record*/

      $project = Project::find($id);

      $project->delete();

      return redirect('admin/projects');
    }
}
