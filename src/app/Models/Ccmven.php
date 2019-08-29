<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ccmven
 * 
 * @property int $id
 * @property string $MCODVEN
 * @property string $MNOMBRE
 * @property string $MDIRECC
 * @property string $MDOCIDEN
 * @property float $MPORCEN
 * @property string $MTIPVEN
 * @property string $MCODGVE
 * @property string $MCODJVE
 * @property string $MFCACOMI
 * @property string $MINDCOM
 * @property string $MINDVEND
 * @property string $MSITUAC
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 * @property string $MCLAVE
 *
 * @package App\Models
 */
class Ccmven extends Eloquent
{
	protected $table = 'ccmven';
	public $timestamps = false;

	protected $casts = [
		'MPORCEN' => 'float'
	];

	protected $dates = [
		'MFECUACT'
	];

	protected $fillable = [
		'MCODVEN',
		'MNOMBRE',
		'MDIRECC',
		'MDOCIDEN',
		'MPORCEN',
		'MTIPVEN',
		'MCODGVE',
		'MCODJVE',
		'MFCACOMI',
		'MINDCOM',
		'MINDVEND',
		'MSITUAC',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT',
		'MCLAVE'
	];
}
