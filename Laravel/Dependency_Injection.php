<?php

/*
The Laravel service container is a powerful tool for managing class dependencies and performing dependency injection. 
Dependency injection is a fancy phrase that essentially means this: 
class dependencies are "injected" into the class via the constructor or, in some cases, "setter" methods.

*/

namespace App\Http\Controllers;

use App\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->users->find($id);

        return view('user.profile', ['user' => $user]);
    }
}

/*
In this example, the UserController needs to retrieve users from a data source. 
So, we will inject a service that is able to retrieve users. 
In this context, our UserRepository most likely uses Eloquent to retrieve user information from the database. 
However, since the repository is injected, we are able to easily swap it out with another implementation. 
We are also able to easily "mock", or create a dummy implementation of the UserRepository when testing our application.*/