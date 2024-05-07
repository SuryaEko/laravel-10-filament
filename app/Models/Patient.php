<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 * 
 * @property int $id
 * @property Carbon $date_of_birth
 * @property string $name
 * @property int $owner_id
 * @property string $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Owner $owner
 * @property Collection|Treatment[] $treatments
 *
 * @package App\Models
 */
class Patient extends Model
{
	protected $table = 'patients';

	protected $casts = [
		'date_of_birth' => 'datetime',
		'owner_id' => 'int'
	];

	protected $fillable = [
		'date_of_birth',
		'name',
		'owner_id',
		'type'
	];

	public function owner()
	{
		return $this->belongsTo(Owner::class);
	}

	public function treatments()
	{
		return $this->hasMany(Treatment::class);
	}
}
