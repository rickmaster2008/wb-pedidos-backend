<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ccmdoc
 * 
 * @property int $id
 * @property string $MTIPODOC
 * @property string $MDESCRIP
 * @property string $MABREVI
 * @property string $MIND_S_R
 * @property string $MINDDOC
 * @property string $MDESTINO
 * @property string $MCODSUNAT
 * @property string $MINDAPRO
 * @property string $MCODSID
 * @property string $MCODSPA
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 * @property float $MNCOPIAS
 *
 * @package App\Models
 */
class Ccmdoc extends Eloquent
{
	protected $table = 'ccmdoc';
	public $timestamps = false;

	protected $casts = [
		'MNCOPIAS' => 'float'
	];

	protected $dates = [
		'MFECUACT'
	];

	protected $fillable = [
		'MTIPODOC',
		'MDESCRIP',
		'MABREVI',
		'MIND_S_R',
		'MINDDOC',
		'MDESTINO',
		'MCODSUNAT',
		'MINDAPRO',
		'MCODSID',
		'MCODSPA',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT',
		'MNCOPIAS'
	];
}
