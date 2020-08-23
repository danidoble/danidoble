<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $users = User::paginate(50);
        return response()->json([
            'error'=>false,
            'errors'=>null,
            'response'=>[
                $users
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:8'],
            'name'=>['required','min:3'],
            'display_name'=>['required','min:3'],
            'type'=>['required','integer'],
        ]);
        $user = new User();
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->name = $request->input('name');
        $user->display_name = $request->input('display_name');
        $user->type = $request->input('type');
        $user->save();

        // Creating a token without scopes...
        $token=$user->createToken('Auth Token')->accessToken;


// Creating a token with scopes...
        //$token = $user->createToken('My Token', ['place-orders'])->accessToken;


        return response()->json([
            'error'=>false,
            'errors'=>null,
            'response'=>[
                'user'=>$user,
                'auth_token'=>$token,
            ],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $user = User::find($id);
        if(empty($user)){
            return response()->json([
                'error'=>true,
                'errors'=>[
                    'user' => 'The user doesn\'t exist',
                ],
            ]);
        }
        return response()->json([
            'error'=>false,
            'errors'=>null,
            'response'=>[
                $user
            ],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'email'=>['sometimes','unique:users,email,'.$id.',id'],
            'password'=>['sometimes','min:8'],
            'name'=>['sometimes','min:3'],
            'display_name'=>['sometimes','min:3'],
            'type'=>['sometimes','integer'],
        ]);
        $user = User::find($id);
        if(empty($user)){
            return response()->json([
                'error'=>true,
                'errors'=>[
                    'user' => 'The user doesn\'t exist',
                ],
            ]);
        }
        if($request->has('email')){
            $user->email = $request->input('email');
        }
        if($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        if($request->has('name')) {
            $user->name = $request->input('name');
        }
        if($request->has('name')) {
            $user->display_name = $request->input('display_name');
        }
        if($request->has('type')) {
            $user->type = $request->input('type');
        }

        $user->save();
        return response()->json([
            'error'=>false,
            'errors'=>null,
            'response'=>[
                $user
            ],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if(empty($user)){
            return response()->json([
                'error'=>true,
                'errors'=>[
                    'user' => 'The user doesn\'t exist',
                ],
            ]);
        }
        $user->delete();
        return response()->json([
            'error'=>false,
            'errors'=>null,
            'response'=>[
                $user
            ],
        ]);
    }


}
