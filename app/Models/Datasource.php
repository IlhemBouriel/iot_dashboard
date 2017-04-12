<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 27 Feb 2017 11:45:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Datasource
 * 
 * @property int $id
 * @property string $url
 * @property string $user
 * @property string $password
 * 
 * @property \Illuminate\Database\Eloquent\Collection $iot_devices
 *
 * @package App\Models
 */
class Datasource extends Eloquent
{
	protected $table = 'datasource';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'url',
		'user',
		'password'
	];

	public function iot_devices()
	{
		return $this->hasMany(\App\Models\IotDevice::class, 'datasource');
	}
}
