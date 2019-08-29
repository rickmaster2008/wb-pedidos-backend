<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ccmcpa
 * 
 * @property int $id
 * @property string $MCONDPAGO
 * @property string $MDESCRIP
 * @property string $MABREVI
 * @property string $MINDCRED
 * @property float $MNCUOTAS
 * @property float $MDIAS
 * @property string $MTIPCRE
 * @property string $MMF
 * @property string $MCAN_AUT
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 *
 * @package App\Models
 */
class Ccmcpa extends Eloquent
{
	protected $table = 'ccmcpa';
	public $timestamps = false;

	protected $casts = [
		'MNCUOTAS' => 'float',
		'MDIAS' => 'float'
	];

	protected $dates = [
		'MFECUACT'
	];

	protected $fillable = [
		'MCONDPAGO',
		'MDESCRIP',
		'MABREVI',
		'MINDCRED',
		'MNCUOTAS',
		'MDIAS',
		'MTIPCRE',
		'MMF',
		'MCAN_AUT',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT'
	];
}
