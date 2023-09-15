<?php
use App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{


public function index (Request $request){

    $users = User::get();
    return view ('puen.users.index',compact('users'));
}

}
