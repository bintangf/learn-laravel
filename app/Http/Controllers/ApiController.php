<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class ApiController extends Controller
{
  public function index(){
    return Ticket::all();
  }
}
