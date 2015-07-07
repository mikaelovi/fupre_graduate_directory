<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model {

	protected $fillable = ['first_name','last_name','home_address','phone_no','email','mat_no','department','college','set','graduation_session','photo'];

}
