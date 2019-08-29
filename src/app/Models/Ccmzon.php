<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 24 Jul 2019 17:15:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ccmzon
 * 
 * @property int $id
 * @property string $MCODZON
 * @property string $MCODRVE
 *
 * @package App\Models
 */
class Ccmzon extends Eloquent
{
	protected $table = 'ccmzon';
	public $timestamps = false;

	protected $fillable = [
		'MCODZON',
		'MCODRVE'
	];
}
