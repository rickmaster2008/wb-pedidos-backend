<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Detpe
 * 
 * @property int $id
 * @property string $MTIPODOC
 * @property string $MNSERIE
 * @property string $MNROPED
 * @property string $MITEM
 * @property string $MCODART
 * @property string $MTDOCR
 * @property string $MNSERIER
 * @property string $MNROREQ
 * @property float $MCANTIDAD
 * @property float $MCANTPEN
 * @property string $MUNIDAD
 * @property string $MCODUMED
 * @property float $MFACTOR
 * @property string $MDESCRI01
 * @property float $MIGV
 * @property float $MPORDCT1
 * @property float $MPORDCT2
 * @property float $MDCTOPRD
 * @property float $MDCTO
 * @property float $MPRECIO
 * @property float $MVALVEN
 * @property float $MCOSULCO
 * @property string $MCODSER
 * @property string $MINDSER
 * @property string $MSTATUS
 * @property string $MINDORIG
 * @property string $MAMD
 * @property string $MAFE_IGV
 * @property string $MOBSERV
 * @property string $MINDOBSQ
 * @property string $MITE_REL
 * @property string $MART_REL
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 * @property string $MINDCOM
 * @property string $MCODDFA
 * @property float $MPENFAC
 * @property string $MTDCTZ
 * @property string $MNSCTZ
 * @property string $MNROCTZ
 * @property string $MITEMCTZ
 * @property float $MCANUND
 * @property float $MPESOKG
 * @property float $MPORDCT3
 * @property float $MPORDCT4
 * @property float $MPORDCT5
 *
 * @package App\Models
 */
class Detpe extends Eloquent
{
	protected $table = 'detpe';
	public $timestamps = false;

	protected $casts = [
		'MCANTIDAD' => 'float',
		'MCANTPEN' => 'float',
		'MFACTOR' => 'float',
		'MIGV' => 'float',
		'MPORDCT1' => 'float',
		'MPORDCT2' => 'float',
		'MDCTOPRD' => 'float',
		'MDCTO' => 'float',
		'MPRECIO' => 'float',
		'MVALVEN' => 'float',
		'MCOSULCO' => 'float',
		'MPENFAC' => 'float',
		'MCANUND' => 'float',
		'MPESOKG' => 'float',
		'MPORDCT3' => 'float',
		'MPORDCT4' => 'float',
		'MPORDCT5' => 'float'
	];

	protected $dates = [
		'MFECUACT'
	];

	protected $fillable = [
		'MTIPODOC',
		'MNSERIE',
		'MNROPED',
		'MITEM',
		'MCODART',
		'MTDOCR',
		'MNSERIER',
		'MNROREQ',
		'MCANTIDAD',
		'MCANTPEN',
		'MUNIDAD',
		'MCODUMED',
		'MFACTOR',
		'MDESCRI01',
		'MIGV',
		'MPORDCT1',
		'MPORDCT2',
		'MDCTOPRD',
		'MDCTO',
		'MPRECIO',
		'MVALVEN',
		'MCOSULCO',
		'MCODSER',
		'MINDSER',
		'MSTATUS',
		'MINDORIG',
		'MAMD',
		'MAFE_IGV',
		'MOBSERV',
		'MINDOBSQ',
		'MITE_REL',
		'MART_REL',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT',
		'MINDCOM',
		'MCODDFA',
		'MPENFAC',
		'MTDCTZ',
		'MNSCTZ',
		'MNROCTZ',
		'MITEMCTZ',
		'MCANUND',
		'MPESOKG',
		'MPORDCT3',
		'MPORDCT4',
		'MPORDCT5'
	];
}
