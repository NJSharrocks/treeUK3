<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Role;

class UserController extends Controller
{

    function __construct(Request $request)
    {
      /**This means that the users controller is protected by the auth
      meaning a login is required for any views in this controller*/
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      /*This makes all the items in the user database table available in the
      view
      */
        $users = User::all();

        return view('admin/users/index', ['users' => $users]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
      /*This if statement returns the admin user page if the user isn't found
      or shows the details of the specific user if the user that is being accessed
      is found*/
        if(!$user) {
          return redirect('/admin/users');
        }
        return view('/admin/users/show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      /*This makes the roles table from the database available to the edit
      view and allows the editing of a user's role.*/
      $user = User::where('id',$id)->first();
          $roles = Role::all();

          // if user does not exist return to list
          if(!$user)
          {
              return redirect('/admin/users');

          }
          //if user does exist then the edit view is loaded with the user's current
          //details
          return view('admin/users/edit')->with('user', $user)->with('roles', $roles);
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
      /*Allows the updating of user's details including the roles
      which will update in each respective table in the database*/
        $user = User::findOrFail($id);
        $roles = $request->get('role');

        $user->roles()->sync($roles);
        $user->update($request->all());
      //then returns the admin users view
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*allows the deletion of a record from the users table in the database*/
        $user = User::find($id);

        $user->delete();

        return redirect('admin/users');
    }
}
