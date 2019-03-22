<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Mar 2019 07:03:17 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property int $ID
 * @property string $ProductName_TH
 * @property string $ProductName_EN
 * @property string $Image
 * @property string $Image_Big
 * @property int $groupID
 *
 * @package App\Models
 */
class Product extends Eloquent
{
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'groupID' => 'int'
	];

	protected $fillable = [
		'ProductName_TH',
		'ProductName_EN',
		'Image',
		'Image_Big',
		'groupID'
	];
}
