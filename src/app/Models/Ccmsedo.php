<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ccmsedo
 * 
 * @property int $id
 * @property string $MTIPODOC
 * @property string $MNSERIE
 * @property string $MINDAUT
 * @property float $MNUMDOC
 * @property float $MNLINEAS
 * @property string $MCODCOLA
 * @property string $MTIPFOR
 * @property string $MOFI_INT
 *
 * @package App\Models
 */
class Ccmsedo extends Eloquent
{
	protected $table = 'ccmsedo';
	public $timestamps = false;

	protected $casts = [
		'MNUMDOC' => 'float',
		'MNLINEAS' => 'float'
	];

	protected $fillable = [
		'MTIPODOC',
		'MNSERIE',
		'MINDAUT',
		'MNUMDOC',
		'MNLINEAS',
		'MCODCOLA',
		'MTIPFOR',
		'MOFI_INT'
	];
}
