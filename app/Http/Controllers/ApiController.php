<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class ApiController extends Controller
{

  public function form(Request $request) {
    return [
      'status' => 'success'
    ];
  }

}
