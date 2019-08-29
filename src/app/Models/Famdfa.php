<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Famdfa
 * 
 * @property int $id
 * @property string $MCODDFA
 * @property string $MDESCRIP
 * @property string $MABREVI
 * @property string $MFOR_DFA
 * @property float $MPOR_DFA
 * @property float $MIMP_DFA
 * @property string $MDESACT
 * @property \Carbon\Carbon $MFECREG
 * @property string $MHORREG
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 *
 * @package App\Models
 */
class Famdfa extends Eloquent
{
	protected $table = 'famdfa';
	public $timestamps = false;

	protected $casts = [
		'MPOR_DFA' => 'float',
		'MIMP_DFA' => 'float'
	];

	protected $dates = [
		'MFECREG',
		'MFECUACT'
	];

	protected $fillable = [
		'MCODDFA',
		'MDESCRIP',
		'MABREVI',
		'MFOR_DFA',
		'MPOR_DFA',
		'MIMP_DFA',
		'MDESACT',
		'MFECREG',
		'MHORREG',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT'
	];
}
