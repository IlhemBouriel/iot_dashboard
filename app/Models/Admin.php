<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 27 Feb 2017 11:45:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string $login
 * @property string $password
 *
 * @package App\Models
 */
class Admin extends Eloquent
{
	protected $table = 'admin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'login',
		'password'
	];
}
