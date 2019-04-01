<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 27 Mar 2019 06:27:05 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Project
 * 
 * @property int $ID
 * @property string $Name_TH
 * @property string $Name_EN
 * @property string $IMG_Color
 * @property string $IMG_BW
 * @property string $Version
 *
 * @package App\Models
 */
class Project extends Eloquent
{
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'Name_TH',
		'Name_EN',
		'IMG_Color',
		'IMG_BW',
		'Version'
	];
}
