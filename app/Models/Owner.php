<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Owner
 * 
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $phone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Patient[] $patients
 *
 * @package App\Models
 */
class Owner extends Model
{
	protected $table = 'owners';

	protected $fillable = [
		'email',
		'name',
		'phone'
	];

	public function patients()
	{
		return $this->hasMany(Patient::class);
	}
}
