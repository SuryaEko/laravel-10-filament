<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Treatment
 * 
 * @property int $id
 * @property string $description
 * @property string|null $notes
 * @property int $patient_id
 * @property int|null $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Patient $patient
 *
 * @package App\Models
 */
class Treatment extends Model
{
	protected $table = 'treatments';

	protected $casts = [
		'patient_id' => 'int',
		'price' => 'int'
	];

	protected $fillable = [
		'description',
		'notes',
		'patient_id',
		'price'
	];

	public function patient()
	{
		return $this->belongsTo(Patient::class);
	}
}
