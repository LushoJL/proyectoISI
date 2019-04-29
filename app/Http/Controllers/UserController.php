<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('permission:users.create')->only('create', 'store');
        $this->middleware('permission:listaU')->only('lista');
        $this->middleware('permission:users.edit')->only('edit','update');
        $this->middleware('permission:users.show')->only('show');
        $this->middleware('permission:users.destroy')->only('destroy');

    }


    public function lista()
    {
        //muestra la vista de lista de usuarios
        return view('users.index');

    }
    public function index(Request $request)
    {
        //manda datos del modelo user
        $users=User::orderBy('id','DESC')->paginate(10);
        return [
            'pagination'=>[
                'total'         =>$users->total(),
                'current_page'  =>$users->currentPage(),
                'per_page'      =>$users->perPage(),
                'last_page'     =>$users->lastPage(),
                'from'          =>$users->firstItem(),
                'to'            =>$users->lastPage(),
            ],
            'users'=>$users
        ];

    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $model)
    {
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('users.edit', compact('users'));
    }
    public function show($id)
    {
        $users = User::findOrFail($id);
        return view('profile.show');
    }
    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User  $user)
    {
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$request->get('password') ? '' : 'password']
        ));

        return;
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User  $user)
    {
        $user->delete();

        return;
    }
}
