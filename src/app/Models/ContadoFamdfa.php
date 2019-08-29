<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 27 Jul 2019 03:33:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContadoFamdfa
 * 
 * @property int $id
 * @property string $mcoddfa
 *
 * @package App\Models
 */
class ContadoFamdfa extends Eloquent
{
	protected $table = 'contado_famdfa';
	public $timestamps = false;

	protected $fillable = [
		'mcoddfa'
	];
}
