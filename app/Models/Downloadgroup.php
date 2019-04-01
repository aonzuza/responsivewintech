<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 01 Apr 2019 03:19:43 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Downloadgroup
 * 
 * @property int $groupID
 * @property string $name_EN
 * @property string $name_TH
 * @property int $grouporder
 *
 * @package App\Models
 */
class Downloadgroup extends Eloquent
{
	protected $table = 'downloadgroup';
	protected $primaryKey = 'groupID';
	public $timestamps = false;

	protected $casts = [
		'grouporder' => 'int'
	];

	protected $fillable = [
		'name_EN',
		'name_TH',
		'grouporder'
	];
}
