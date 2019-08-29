<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ccmcli
 * 
 * @property int $id
 * @property string $MCODCLI
 * @property string $MNOMBRE
 * @property string $MABREVI
 * @property string $MDIRECC
 * @property string $MLOCALID
 * @property string $MCODPAI
 * @property string $MCASPOS
 * @property string $MUBIGEO
 * @property string $MTELEF1
 * @property string $MTELEF2
 * @property string $MTELEX
 * @property string $MFAX
 * @property string $MPERSONA
 * @property string $MCARGO
 * @property string $MCODVEN
 * @property string $MRUCCLTE
 * @property string $MDOCIDEN
 * @property string $MCODZON
 * @property string $MCODRCLI
 * @property \Carbon\Carbon $MFCHREGIS
 * @property string $MDIRDESP
 * @property string $MINDCRED
 * @property string $MMNDA_CR
 * @property float $MVCAM_CR
 * @property float $MLIM_CR
 * @property \Carbon\Carbon $MFCH_CR
 * @property string $MIND_MOR
 * @property string $MCONDPAGO
 * @property string $MTIPOCLI
 * @property string $MCTACTB
 * @property string $MTIPANA
 * @property string $MCTAANA
 * @property string $MCALIFI
 * @property \Carbon\Carbon $MFECUVTA
 * @property \Carbon\Carbon $MFECULCRE
 * @property float $MPORDCTO
 * @property float $MPORCOMI
 * @property string $MCODGRP
 * @property string $MCORREO
 * @property string $MINDVAR
 * @property string $MOBSERV
 * @property string $MCODLPRE
 * @property string $MPATERNO
 * @property string $MMATERNO
 * @property string $MNOMBRE1
 * @property string $MNOMBRE2
 * @property string $MTPSUNAT
 * @property string $MDPSUNAT
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 * @property string $MINDCOM
 * @property string $MCERUS
 * @property string $MAREAPER
 * @property string $MNOMAVAL
 * @property string $MDIRAVAL
 * @property string $MLOCAVAL
 * @property string $MTELAVAL
 * @property string $MDOIAVAL
 * @property string $MAGEPERC
 * @property string $MAGERETE
 * @property string $MDIRREF
 * @property string $MCODRUV
 * @property string $MDIAVIS
 * @property string $MORDVIS
 * @property string $MINDACT
 * @property string $MINDPERC
 * @property float $MPORPERC
 * @property \Carbon\Carbon $MFECALTA
 * @property \Carbon\Carbon $MFECBAJA
 * @property float $MPORVCAO
 * @property float $MPORVNAOH
 * @property string $MCODCADI
 * @property string $MCODSCADI
 * @property string $MOBSERVA01
 *
 * @package App\Models
 */
class Ccmcli extends Eloquent
{
	protected $table = 'ccmcli';
	public $timestamps = false;

	protected $casts = [
		'MVCAM_CR' => 'float',
		'MLIM_CR' => 'float',
		'MPORDCTO' => 'float',
		'MPORCOMI' => 'float',
		'MPORPERC' => 'float',
		'MPORVCAO' => 'float',
		'MPORVNAOH' => 'float'
	];

	protected $dates = [
		'MFCHREGIS',
		'MFCH_CR',
		'MFECUVTA',
		'MFECULCRE',
		'MFECUACT',
		'MFECALTA',
		'MFECBAJA'
	];

	protected $fillable = [
		'MCODCLI',
		'MNOMBRE',
		'MABREVI',
		'MDIRECC',
		'MLOCALID',
		'MCODPAI',
		'MCASPOS',
		'MUBIGEO',
		'MTELEF1',
		'MTELEF2',
		'MTELEX',
		'MFAX',
		'MPERSONA',
		'MCARGO',
		'MCODVEN',
		'MRUCCLTE',
		'MDOCIDEN',
		'MCODZON',
		'MCODRCLI',
		'MFCHREGIS',
		'MDIRDESP',
		'MINDCRED',
		'MMNDA_CR',
		'MVCAM_CR',
		'MLIM_CR',
		'MFCH_CR',
		'MIND_MOR',
		'MCONDPAGO',
		'MTIPOCLI',
		'MCTACTB',
		'MTIPANA',
		'MCTAANA',
		'MCALIFI',
		'MFECUVTA',
		'MFECULCRE',
		'MPORDCTO',
		'MPORCOMI',
		'MCODGRP',
		'MCORREO',
		'MINDVAR',
		'MOBSERV',
		'MCODLPRE',
		'MPATERNO',
		'MMATERNO',
		'MNOMBRE1',
		'MNOMBRE2',
		'MTPSUNAT',
		'MDPSUNAT',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT',
		'MINDCOM',
		'MCERUS',
		'MAREAPER',
		'MNOMAVAL',
		'MDIRAVAL',
		'MLOCAVAL',
		'MTELAVAL',
		'MDOIAVAL',
		'MAGEPERC',
		'MAGERETE',
		'MDIRREF',
		'MCODRUV',
		'MDIAVIS',
		'MORDVIS',
		'MINDACT',
		'MINDPERC',
		'MPORPERC',
		'MFECALTA',
		'MFECBAJA',
		'MPORVCAO',
		'MPORVNAOH',
		'MCODCADI',
		'MCODSCADI',
		'MOBSERVA01'
	];
}
