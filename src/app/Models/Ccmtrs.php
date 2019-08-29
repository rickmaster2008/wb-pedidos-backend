<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jul 2019 00:00:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CCMTR
 * 
 * @property string $MCODTRSP
 * @property string $MNOMBRE
 * @property string $MDIRECC
 * @property string $MTELEF1
 * @property string $MTELEF2
 * @property string $MFAX
 * @property string $MCODPAI
 * @property string $MPERSONA
 * @property string $MRUCTRSP
 * @property \Carbon\Carbon $MFCHREGIS
 * @property string $MPLACA
 * @property string $MCAPACI
 * @property string $MCHOFER
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 * @property string $MCODCVE
 * @property string $MCODUTR
 * @property string $MLOCALID
 * @property string $MINDACT
 *
 * @package App\Models
 */
class Ccmtrs extends Eloquent
{
	protected $table = 'CCMTRS';
	protected $primaryKey = 'MCODTRSP';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'MFCHREGIS',
		'MFECUACT'
	];

	protected $fillable = [
		'MNOMBRE',
		'MDIRECC',
		'MTELEF1',
		'MTELEF2',
		'MFAX',
		'MCODPAI',
		'MPERSONA',
		'MRUCTRSP',
		'MFCHREGIS',
		'MPLACA',
		'MCAPACI',
		'MCHOFER',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT',
		'MCODCVE',
		'MCODUTR',
		'MLOCALID',
		'MINDACT'
	];
}
