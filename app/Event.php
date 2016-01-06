<?php namespace App;

 use Illuminate\Database\Eloquent\Model;


 class Event extends Model
 {

   protected $fillable = ['name', 'content'];
   protected $table = 'events';

	 public function Person(){
		 return $this->HasMany('App\Person');
	 }

   public function findTrends(){
     $trends = App\Events::orderBy('created_at', 'DESC')->limit(20);
     $trends = App\Events::find('all');
   }

 }
