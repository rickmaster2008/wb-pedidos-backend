<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 20 Jun 2019 19:21:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ArticuloFamdfa
 * 
 * @property int $id
 * @property string $mcodart
 * @property string $mcoddfa
 *
 * @package App\Models
 */
class ArticuloFamdfa extends Eloquent
{
	protected $table = 'articulo_famdfa';
	public $timestamps = false;

	protected $fillable = [
		'mcodart',
		'mcoddfa'
	];
}
