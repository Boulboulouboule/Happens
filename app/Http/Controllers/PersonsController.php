<?php
namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;

class PersonsController extends Controller{
  public function index(){
    $trends = $this->Event->findTrends();
    return view('trends', $trends);
  }
}
