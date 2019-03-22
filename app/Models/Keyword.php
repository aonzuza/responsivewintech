<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Mar 2019 07:03:17 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Keyword
 * 
 * @property int $ID
 * @property string $Keyword
 * @property int $ProducutID
 *
 * @package App\Models
 */
class Keyword extends Eloquent
{
	protected $table = 'keyword';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ProducutID' => 'int'
	];

	protected $fillable = [
		'Keyword',
		'ProducutID'
	];
}
