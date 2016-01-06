<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Keywords;
use Twitter;

class EventsTracker extends Model
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    static public function tracker()
    {
      $keywords = Keywords::all();
      $referents = TwitterReferent::all();
      $match = Self::referentTracker($keywords, $referents);
      return $match;
    }

    static private function referentTracker($keywords, $referents){
      $match = [];
      foreach ($referents as $key => $referent) {
        $lastTweets = Twitter::getUserTimeline(['screen_name' => $referent->account, 'count' => 100, 'format' => 'json']);
        $keyfound = Self::keywordFinder($lastTweets, $keywords);
        array_push($match, $keyfound);
      }
        return $match;
  }

    static private function keywordFinder($lastTweets, $keywords){
      $tweets = json_decode($lastTweets);
      foreach ($tweets as $key => $tweet) {
        foreach ($keywords as $key => $keyword) {
          if(mb_stristr($tweet->text, $keyword->keyname) != FALSE){
            return $tweet;
          };
        }
      }
    }

}
