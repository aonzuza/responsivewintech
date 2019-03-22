<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Mar 2019 07:03:17 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Newsandevent
 * 
 * @property int $ID
 * @property string $Image
 * @property string $Header
 * @property string $Header_EN
 * @property \Carbon\Carbon $Date
 * @property string $Details
 *
 * @package App\Models
 */
class Newsandevent extends Eloquent
{
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $dates = [
		'Date'
	];

	protected $fillable = [
		'Image',
		'Header',
		'Header_EN',
		'Date',
		'Details'
	];
}
