<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cabpe
 * 
 * @property int $id
 * @property string $MTIPODOC
 * @property string $MNSERIE
 * @property string $MNROPED
 * @property string $MCODTPED
 * @property \Carbon\Carbon $MFECEMI
 * @property string $MPERIODO
 * @property string $MCODCLI
 * @property string $MCODCPA
 * @property string $MCODVEN
 * @property string $MCODZON
 * @property string $MCODTIEN
 * @property string $MCODMON
 * @property string $MDOLINT
 * @property \Carbon\Carbon $MFECENT
 * @property string $MLUGENT
 * @property string $MLOCALID
 * @property string $MDETALLE
 * @property string $MCODEMI
 * @property string $MEMITIDO
 * @property float $MTOPVENTA
 * @property float $MVALVEN
 * @property float $MDCTO
 * @property float $MIGV
 * @property float $MNETO
 * @property float $MSALDO
 * @property float $MPORIGV
 * @property \Carbon\Carbon $MFECVEN
 * @property \Carbon\Carbon $MFECCAN
 * @property string $MCODCRES
 * @property string $MSTATUS
 * @property string $MINDORIG
 * @property string $MIND_N_I
 * @property string $MINDAPROB
 * @property string $MINDIMP
 * @property string $MTIPITEM
 * @property string $MINC_IGV
 * @property string $MANO_E
 * @property string $MMES_E
 * @property string $MDIA_E
 * @property \Carbon\Carbon $MFECATT
 * @property \Carbon\Carbon $MFECANU
 * @property string $MATEND
 * @property string $MNORDCLI
 * @property string $MAMD
 * @property string $MINDFACT
 * @property string $MCODLPRE
 * @property string $MNOMCLI
 * @property string $MLUGFAC
 * @property \Carbon\Carbon $MFECLIB
 * @property string $MCODSITD
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MCODUSER
 * @property string $MHORUACT
 * @property string $MOBSERV
 * @property string $MINDCOM
 * @property string $MOBRA
 * @property float $MPESOKG
 * @property string $MCODDFA
 * @property string $MDPSUNAT
 * @property string $MDOCCLTE
 * @property string $MCODRUV
 * @property float $MVV_NAFE
 * @property string $MCODCADI
 * @property string $MCODSCADI
 * @property string $MCTOUTIL
 * @property string $MLIMAPROV
 *
 * @package App\Models
 */
class Cabpe extends Eloquent
{
	protected $table = 'cabpe';
	public $timestamps = false;

	protected $casts = [
		'MTOPVENTA' => 'float',
		'MVALVEN' => 'float',
		'MDCTO' => 'float',
		'MIGV' => 'float',
		'MNETO' => 'float',
		'MSALDO' => 'float',
		'MPORIGV' => 'float',
		'MPESOKG' => 'float',
		'MVV_NAFE' => 'float'
	];

	protected $dates = [
		'MFECEMI',
		'MFECENT',
		'MFECVEN',
		'MFECCAN',
		'MFECATT',
		'MFECANU',
		'MFECLIB',
		'MFECUACT'
	];

	protected $fillable = [
		'MTIPODOC',
		'MNSERIE',
		'MNROPED',
		'MCODTPED',
		'MFECEMI',
		'MPERIODO',
		'MCODCLI',
		'MCODCPA',
		'MCODVEN',
		'MCODZON',
		'MCODTIEN',
		'MCODMON',
		'MDOLINT',
		'MFECENT',
		'MLUGENT',
		'MLOCALID',
		'MDETALLE',
		'MCODEMI',
		'MEMITIDO',
		'MTOPVENTA',
		'MVALVEN',
		'MDCTO',
		'MIGV',
		'MNETO',
		'MSALDO',
		'MPORIGV',
		'MFECVEN',
		'MFECCAN',
		'MCODCRES',
		'MSTATUS',
		'MINDORIG',
		'MIND_N_I',
		'MINDAPROB',
		'MINDIMP',
		'MTIPITEM',
		'MINC_IGV',
		'MANO_E',
		'MMES_E',
		'MDIA_E',
		'MFECATT',
		'MFECANU',
		'MATEND',
		'MNORDCLI',
		'MAMD',
		'MINDFACT',
		'MCODLPRE',
		'MNOMCLI',
		'MLUGFAC',
		'MFECLIB',
		'MCODSITD',
		'MFECUACT',
		'MCODUSER',
		'MHORUACT',
		'MOBSERV',
		'MINDCOM',
		'MOBRA',
		'MPESOKG',
		'MCODDFA',
		'MDPSUNAT',
		'MDOCCLTE',
		'MCODRUV',
		'MVV_NAFE',
		'MCODCADI',
		'MCODSCADI',
		'MCTOUTIL',
		'MLIMAPROV',
		'estado',
	];
}
