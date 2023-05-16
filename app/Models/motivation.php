<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motivation extends Model
{
    use HasFactory;
	protected $table = 'motivation';
	public $timestamps = false;

	

	protected $fillable = [
        'Intitule',
		
	];

	public function abonne()
	{
		return $this->belongsTo(abonne::class, 'id_abonne');
	}

}
