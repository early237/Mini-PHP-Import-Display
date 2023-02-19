<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterFormRequest;
use Crypt;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function registerIndex()
    {
        return view('register');
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

     /* public function store(Request $request)
    {
        // POST

        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);


        $newUser = new User();

        //assign data based on columns
        $newUser->name = strip_tags($request->input('name'));
        $newUser->password = Crypt::encrypt($request->input('password'));
        $newUser->email = strip_tags($request->input('email'));

        $newUser->save();

        return redirect()->route('login.index');

    } */

      public function store(RegisterFormRequest $request)
    {
        $data = $request->validated();
 
         User::create($data);
 
        return redirect()->route('login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required', 
        ]);

        
        $user= User::where('name', $request->input('name'))->get();

        
        if(count($user) > 0)
        {
            
            if($user[0]->name==$request->input('name') && Crypt::decrypt($user[0]->password)==$request->input('password'))
            {
                $request->session()->put('user', $user[0]->name);
                return redirect()->route('home.index');
            }
            else
        {
            return view('login', [
                'errorMessageDuration' => 'Username or password is incorrect',
                'route' => 'createPr',
                'type' => 'new',
           ]);
        }
        }
        else
        {
            return view('login', [
                'errorMessageDuration' => 'No account found',
                'route' => 'createPr',
                'type' => 'new',
           ]);
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
