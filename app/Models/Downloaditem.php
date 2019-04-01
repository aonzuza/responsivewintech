<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 01 Apr 2019 03:19:50 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Downloaditem
 * 
 * @property int $downloadID
 * @property int $groupID
 * @property string $name_TH
 * @property string $name_EN
 * @property string $image
 * @property string $pdf
 *
 * @package App\Models
 */
class Downloaditem extends Eloquent
{
	protected $primaryKey = 'downloadID';
	public $timestamps = false;

	protected $casts = [
		'groupID' => 'int'
	];

	protected $fillable = [
		'groupID',
		'name_TH',
		'name_EN',
		'image',
		'pdf'
	];
}
