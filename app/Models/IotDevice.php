<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 27 Feb 2017 11:45:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class IotDevice
 * 
 * @property int $id
 * @property string $designation
 * @property string $adresse_ip
 * @property int $datasource
 * 
 *
 * @package App\Models
 */
class IotDevice extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'datasource' => 'int'
	];

	protected $fillable = [
		'designation',
		'adresse_ip',
		'datasource'
	];

	public function datasource()
	{
		return $this->belongsTo(\App\Models\Datasource::class, 'datasource');
	}
}
