<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Mar 2019 07:03:17 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Marker
 * 
 * @property int $id
 * @property string $name_TH
 * @property string $name_EN
 * @property string $address_TH
 * @property string $address_EN
 * @property string $TEL
 * @property float $Lat
 * @property float $Lng
 *
 * @package App\Models
 */
class Marker extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'Lat' => 'float',
		'Lng' => 'float'
	];

	protected $fillable = [
		'name_TH',
		'name_EN',
		'address_TH',
		'address_EN',
		'TEL',
		'Lat',
		'Lng'
	];
}
