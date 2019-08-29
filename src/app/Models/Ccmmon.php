<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ccmmon
 * 
 * @property int $id
 * @property string $MCODMON
 * @property string $MDESCRIP
 * @property string $MABREVI
 * @property string $MCODPAI
 * @property string $MSIMBOLO
 * @property string $MDOLINT
 * @property string $MCODTMS
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 * @property string $MSNT_TDM
 * @property string $MLCODMON
 *
 * @package App\Models
 */
class Ccmmon extends Eloquent
{
	protected $table = 'ccmmon';
	public $timestamps = false;

	protected $dates = [
		'MFECUACT'
	];

	protected $fillable = [
		'MCODMON',
		'MDESCRIP',
		'MABREVI',
		'MCODPAI',
		'MSIMBOLO',
		'MDOLINT',
		'MCODTMS',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT',
		'MSNT_TDM',
		'MLCODMON'
	];
}
