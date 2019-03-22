<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Mar 2019 07:03:17 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Productgroup
 * 
 * @property int $ID
 * @property int $groupID
 * @property int $subgroupID
 * @property string $groupName_TH
 * @property string $groupName_EN
 *
 * @package App\Models
 */
class Productgroup extends Eloquent
{
	protected $table = 'productgroup';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'groupID' => 'int',
		'subgroupID' => 'int'
	];

	protected $fillable = [
		'groupID',
		'subgroupID',
		'groupName_TH',
		'groupName_EN'
	];
}
