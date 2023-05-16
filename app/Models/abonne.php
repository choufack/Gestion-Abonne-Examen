<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonne extends Model
{
    use HasFactory;
    protected $table = 'abonne';
	public $timestamps = false;

    protected $casts = [
		'Age' => 'int',
		'id_motivation' => 'int',
	];

	protected $fillable = [
		'Nom',
		'Prenom',
		'Age',
		'Sexe',
		'Profession',
		'Rue',
		'Code_Postal',
		'Ville',
		'Pays',
        'Telephone',
		'Email',
	];
	

	public function motivation()
	{
		return $this->hasMany(motivation::class, 'id_abonne');
	}
}
