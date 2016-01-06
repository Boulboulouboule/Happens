<?php
namespace App\Http\Controllers;

use App\Event;
use App\EventsTracker;
use App\Http\Controllers\Controller;

class EventsController extends Controller{

  public function index(){
    $trends = EventsTracker::tracker();

    return view('events.index', compact('trends'));
  }

}
