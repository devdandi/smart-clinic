<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UsersController extends Controller
{
    protected $user;
    function __construct(User $user)
    {
        $this->user = $user;
    }
    protected function getLogin()
    {
        if(!Auth::check())
        {
            return false;
        }else{
            return Auth::id();
        }
    }
    public function getData()
    {
        return User::find($this->getLogin());
    }
    public function getEmail()
    {
        return $this->getData()->email;
    }
    public function getFirstName()
    {
        $explode = explode(" ", $this->getData()->name);
        return $explode[0];
    }
    public function getFullName()
    {
        return $this->getData()->name;
    }
    public function getLevel()
    {
        return $this->getData()->level;
    }
    public function getAll()
    {
        return User::find(Auth::id());
    }
}
