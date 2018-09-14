<?php
// se implementa en nombre
//namespace App\Models;

 //class Project extends BaseElement {
   
 //}

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{

	protected $table = 'projects';

	public function getDurationAsString(){
		return'';
	}
}
 