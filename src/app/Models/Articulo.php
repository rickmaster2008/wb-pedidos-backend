<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 09 Jun 2019 23:02:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Articulo
 * 
 * @property int $id
 * @property string $MCODART
 * @property string $MDESCRIP
 * @property string $MABREVI
 * @property string $MCODTPT
 * @property string $MCODFAM
 * @property string $MCODCLA
 * @property string $MCODEQUI
 * @property string $MUNIDAD
 * @property string $MINDCTO
 * @property string $MINDDEC
 * @property string $MINDPRD
 * @property string $MINDSPRD
 * @property string $MINDCADU
 * @property string $MINDSERIE
 * @property string $MINDLOTE
 * @property string $MCTAARANC
 * @property \Carbon\Carbon $MFECULSA
 * @property \Carbon\Carbon $MFECULIN
 * @property \Carbon\Carbon $MFECULCO
 * @property \Carbon\Carbon $MFECUVEN
 * @property float $MPENDING
 * @property float $MPENDSAL
 * @property string $MCODACA
 * @property string $MCODLAD
 * @property string $MCODNOR
 * @property string $MCODFOR
 * @property string $MCOMI
 * @property string $MINSUMO
 * @property float $MPESO
 * @property float $MFACRUM
 * @property string $MESTADO
 * @property float $MSTOCKINI
 * @property string $MGRUPO
 * @property float $MCOSTOINI
 * @property float $MCOSTO
 * @property float $MCOSULCO
 * @property string $MCODALT
 * @property string $MCODCOL
 * @property float $MSTOCK
 * @property float $MSTOCKSAL
 * @property float $MSTOCKENT
 * @property string $MCTAVEN
 * @property string $MCTADCTO
 * @property float $MSTOCKMIN
 * @property float $MSTOCKMAX
 * @property float $MSTCOMPR
 * @property float $MPVENTA
 * @property string $MPROCEDE
 * @property string $MCTACTB
 * @property float $MFACUTIL
 * @property float $MFACUT1
 * @property float $MFACUTSG
 * @property \Carbon\Carbon $MFECREGI
 * @property string $MMDAULCO
 * @property float $MVALREPOS
 * @property string $MLINSER
 * @property float $MPORDCTO
 * @property string $MOFERTA
 * @property \Carbon\Carbon $MFCHVALOF
 * @property float $MPVENTA1
 * @property float $MPVTAS01
 * @property float $MPVTAS02
 * @property float $MPVTAS03
 * @property float $MPVTAS04
 * @property float $MPVTAS05
 * @property float $MFACUT01
 * @property float $MFACUT02
 * @property float $MFACUT03
 * @property float $MTIEMPO
 * @property string $MCODFMP
 * @property string $MCODPST
 * @property string $MCODBOC
 * @property string $MCAVI
 * @property string $MCODPRO
 * @property string $MCODCLI
 * @property float $MTIEACA
 * @property string $MCODANT
 * @property string $MOBSERV
 * @property string $MCODGNR
 * @property string $MCODCLD
 * @property string $MCODTEN
 * @property string $MCODDESP
 * @property string $MCODUMED
 * @property float $MPNETO
 * @property float $MPBRUTO
 * @property string $MCODUSER
 * @property \Carbon\Carbon $MFECUACT
 * @property string $MHORUACT
 * @property float $MPVTAS06
 * @property float $MPVTAS07
 * @property float $MPVTAS08
 * @property float $MPVTAS09
 * @property float $MPVTAS10
 * @property float $MPVTAS11
 * @property float $MPVTAS12
 * @property float $MPVTAS13
 * @property float $MPVTAS14
 * @property float $MPVTAS15
 * @property float $MPVTAS16
 * @property float $MPVTAS17
 * @property float $MPVTAS18
 * @property float $MPVTAS19
 * @property float $MPVTAS20
 * @property string $MAFE_IGV
 * @property float $MPOR_ISC
 * @property float $MPOR_COMI
 * @property string $MIND_ENS
 * @property float $MROTA_EST
 * @property float $MDIM_INT1
 * @property float $MDIM_EXT1
 * @property float $MDIM_ALT1
 * @property float $MDIM_INT2
 * @property float $MDIM_INT3
 * @property float $MDIM_EXT2
 * @property float $MDIM_EXT3
 * @property float $MDIM_ALT2
 * @property float $MDIM_ALT3
 * @property string $MNRO_FAB
 * @property string $MGI_STRIA
 * @property string $MINDPROMO
 * @property string $MCOD_ORI
 * @property string $MDISENO
 * @property float $MPLNCH_ESP
 * @property float $MPLNCH_CAN
 * @property float $MPASOSMTRZ
 * @property float $MCASCO_PES
 * @property float $MCASCO_ESP
 * @property float $MTAPA_PES
 * @property float $MTAPA_ESP
 * @property float $MRESOR_PES
 * @property float $MRESOR_ESP
 * @property float $MRESOR_LON
 * @property float $MRESOR_DIA
 * @property float $MCAUCHCR_W
 * @property float $MCAUCHSR_W
 * @property string $MN_CORECTI
 * @property \Carbon\Carbon $MF_CORECTI
 * @property string $MNRO_MEMO
 * @property \Carbon\Carbon $MFCH_MEMO
 * @property string $MNOMB_PLIS
 * @property string $MENVASE1
 * @property float $MUNDENV1
 * @property string $MENVASE2
 * @property float $MUNDENV2
 * @property \Carbon\Carbon $MFECCADU
 * @property float $MPNETESC
 * @property float $MNIVEXPM
 * @property string $MBOLIND
 * @property string $MBOLDES
 * @property string $MBOLUME
 * @property float $MBOLPESO
 * @property float $MBOLFCB
 * @property string $MCODUME1
 * @property string $MCODUME2
 * @property string $MCODUME3
 * @property string $MENVASE3
 * @property float $MUNDENV3
 * @property string $MCODUME4
 * @property string $MENVASE4
 * @property float $MUNDENV4
 * @property string $MINDOBSQ
 * @property string $MCODTIES
 * @property string $MRTACION
 * @property string $MAFEPERC
 * @property string $MCODSCLA
 * @property string $MCODVAR01
 * @property string $MCODVAR02
 * @property string $MDES_ADI
 * @property string $MCODDCTOP
 * @property string $MCODDCTOE
 *
 * @package App\Models
 */
class Articulo extends Eloquent
{
	protected $table = 'articulo';
	public $timestamps = false;

	protected $casts = [
		'MPENDING' => 'float',
		'MPENDSAL' => 'float',
		'MPESO' => 'float',
		'MFACRUM' => 'float',
		'MSTOCKINI' => 'float',
		'MCOSTOINI' => 'float',
		'MCOSTO' => 'float',
		'MCOSULCO' => 'float',
		'MSTOCK' => 'float',
		'MSTOCKSAL' => 'float',
		'MSTOCKENT' => 'float',
		'MSTOCKMIN' => 'float',
		'MSTOCKMAX' => 'float',
		'MSTCOMPR' => 'float',
		'MPVENTA' => 'float',
		'MFACUTIL' => 'float',
		'MFACUT1' => 'float',
		'MFACUTSG' => 'float',
		'MVALREPOS' => 'float',
		'MPORDCTO' => 'float',
		'MPVENTA1' => 'float',
		'MPVTAS01' => 'float',
		'MPVTAS02' => 'float',
		'MPVTAS03' => 'float',
		'MPVTAS04' => 'float',
		'MPVTAS05' => 'float',
		'MFACUT01' => 'float',
		'MFACUT02' => 'float',
		'MFACUT03' => 'float',
		'MTIEMPO' => 'float',
		'MTIEACA' => 'float',
		'MPNETO' => 'float',
		'MPBRUTO' => 'float',
		'MPVTAS06' => 'float',
		'MPVTAS07' => 'float',
		'MPVTAS08' => 'float',
		'MPVTAS09' => 'float',
		'MPVTAS10' => 'float',
		'MPVTAS11' => 'float',
		'MPVTAS12' => 'float',
		'MPVTAS13' => 'float',
		'MPVTAS14' => 'float',
		'MPVTAS15' => 'float',
		'MPVTAS16' => 'float',
		'MPVTAS17' => 'float',
		'MPVTAS18' => 'float',
		'MPVTAS19' => 'float',
		'MPVTAS20' => 'float',
		'MPOR_ISC' => 'float',
		'MPOR_COMI' => 'float',
		'MROTA_EST' => 'float',
		'MDIM_INT1' => 'float',
		'MDIM_EXT1' => 'float',
		'MDIM_ALT1' => 'float',
		'MDIM_INT2' => 'float',
		'MDIM_INT3' => 'float',
		'MDIM_EXT2' => 'float',
		'MDIM_EXT3' => 'float',
		'MDIM_ALT2' => 'float',
		'MDIM_ALT3' => 'float',
		'MPLNCH_ESP' => 'float',
		'MPLNCH_CAN' => 'float',
		'MPASOSMTRZ' => 'float',
		'MCASCO_PES' => 'float',
		'MCASCO_ESP' => 'float',
		'MTAPA_PES' => 'float',
		'MTAPA_ESP' => 'float',
		'MRESOR_PES' => 'float',
		'MRESOR_ESP' => 'float',
		'MRESOR_LON' => 'float',
		'MRESOR_DIA' => 'float',
		'MCAUCHCR_W' => 'float',
		'MCAUCHSR_W' => 'float',
		'MUNDENV1' => 'float',
		'MUNDENV2' => 'float',
		'MPNETESC' => 'float',
		'MNIVEXPM' => 'float',
		'MBOLPESO' => 'float',
		'MBOLFCB' => 'float',
		'MUNDENV3' => 'float',
		'MUNDENV4' => 'float'
	];

	protected $dates = [
		'MFECULSA',
		'MFECULIN',
		'MFECULCO',
		'MFECUVEN',
		'MFECREGI',
		'MFCHVALOF',
		'MFECUACT',
		'MF_CORECTI',
		'MFCH_MEMO',
		'MFECCADU'
	];

	protected $fillable = [
		'MCODART',
		'MDESCRIP',
		'MABREVI',
		'MCODTPT',
		'MCODFAM',
		'MCODCLA',
		'MCODEQUI',
		'MUNIDAD',
		'MINDCTO',
		'MINDDEC',
		'MINDPRD',
		'MINDSPRD',
		'MINDCADU',
		'MINDSERIE',
		'MINDLOTE',
		'MCTAARANC',
		'MFECULSA',
		'MFECULIN',
		'MFECULCO',
		'MFECUVEN',
		'MPENDING',
		'MPENDSAL',
		'MCODACA',
		'MCODLAD',
		'MCODNOR',
		'MCODFOR',
		'MCOMI',
		'MINSUMO',
		'MPESO',
		'MFACRUM',
		'MESTADO',
		'MSTOCKINI',
		'MGRUPO',
		'MCOSTOINI',
		'MCOSTO',
		'MCOSULCO',
		'MCODALT',
		'MCODCOL',
		'MSTOCK',
		'MSTOCKSAL',
		'MSTOCKENT',
		'MCTAVEN',
		'MCTADCTO',
		'MSTOCKMIN',
		'MSTOCKMAX',
		'MSTCOMPR',
		'MPVENTA',
		'MPROCEDE',
		'MCTACTB',
		'MFACUTIL',
		'MFACUT1',
		'MFACUTSG',
		'MFECREGI',
		'MMDAULCO',
		'MVALREPOS',
		'MLINSER',
		'MPORDCTO',
		'MOFERTA',
		'MFCHVALOF',
		'MPVENTA1',
		'MPVTAS01',
		'MPVTAS02',
		'MPVTAS03',
		'MPVTAS04',
		'MPVTAS05',
		'MFACUT01',
		'MFACUT02',
		'MFACUT03',
		'MTIEMPO',
		'MCODFMP',
		'MCODPST',
		'MCODBOC',
		'MCAVI',
		'MCODPRO',
		'MCODCLI',
		'MTIEACA',
		'MCODANT',
		'MOBSERV',
		'MCODGNR',
		'MCODCLD',
		'MCODTEN',
		'MCODDESP',
		'MCODUMED',
		'MPNETO',
		'MPBRUTO',
		'MCODUSER',
		'MFECUACT',
		'MHORUACT',
		'MPVTAS06',
		'MPVTAS07',
		'MPVTAS08',
		'MPVTAS09',
		'MPVTAS10',
		'MPVTAS11',
		'MPVTAS12',
		'MPVTAS13',
		'MPVTAS14',
		'MPVTAS15',
		'MPVTAS16',
		'MPVTAS17',
		'MPVTAS18',
		'MPVTAS19',
		'MPVTAS20',
		'MAFE_IGV',
		'MPOR_ISC',
		'MPOR_COMI',
		'MIND_ENS',
		'MROTA_EST',
		'MDIM_INT1',
		'MDIM_EXT1',
		'MDIM_ALT1',
		'MDIM_INT2',
		'MDIM_INT3',
		'MDIM_EXT2',
		'MDIM_EXT3',
		'MDIM_ALT2',
		'MDIM_ALT3',
		'MNRO_FAB',
		'MGI_STRIA',
		'MINDPROMO',
		'MCOD_ORI',
		'MDISENO',
		'MPLNCH_ESP',
		'MPLNCH_CAN',
		'MPASOSMTRZ',
		'MCASCO_PES',
		'MCASCO_ESP',
		'MTAPA_PES',
		'MTAPA_ESP',
		'MRESOR_PES',
		'MRESOR_ESP',
		'MRESOR_LON',
		'MRESOR_DIA',
		'MCAUCHCR_W',
		'MCAUCHSR_W',
		'MN_CORECTI',
		'MF_CORECTI',
		'MNRO_MEMO',
		'MFCH_MEMO',
		'MNOMB_PLIS',
		'MENVASE1',
		'MUNDENV1',
		'MENVASE2',
		'MUNDENV2',
		'MFECCADU',
		'MPNETESC',
		'MNIVEXPM',
		'MBOLIND',
		'MBOLDES',
		'MBOLUME',
		'MBOLPESO',
		'MBOLFCB',
		'MCODUME1',
		'MCODUME2',
		'MCODUME3',
		'MENVASE3',
		'MUNDENV3',
		'MCODUME4',
		'MENVASE4',
		'MUNDENV4',
		'MINDOBSQ',
		'MCODTIES',
		'MRTACION',
		'MAFEPERC',
		'MCODSCLA',
		'MCODVAR01',
		'MCODVAR02',
		'MDES_ADI',
		'MCODDCTOP',
		'MCODDCTOE'
	];
}
