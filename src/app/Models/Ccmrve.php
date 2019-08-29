<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 24 Jul 2019 17:15:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ccmrve
 * 
 * @property int $id
 * @property string $MCODRVE
 * @property string $MDESCRIP
 *
 * @package App\Models
 */
class Ccmrve extends Eloquent
{
	protected $table = 'ccmrve';
	public $timestamps = false;

	protected $fillable = [
		'MCODRVE',
		'MDESCRIP'
	];
}
