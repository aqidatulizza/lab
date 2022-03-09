<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BahanKeluar
 * 
 * @property int $id_keluar
 * @property int $id_user
 * @property int $id_barang
 * @property Carbon $tanggal
 * @property int $jumlah
 * @property string $keterangan
 * 
 * @property Inventari $inventari
 * @property User $user
 *
 * @package App\Models
 */
class BahanKeluar extends Model
{
	protected $table = 'bahan_keluar';
	protected $primaryKey = 'id_keluar';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_barang' => 'int',
		'jumlah' => 'int'
	];

	protected $dates = [
		'tanggal'
	];

	protected $fillable = [
		'id_user',
		'id_barang',
		'tanggal',
		'jumlah',
		'keterangan'
	];

	public function inventari()
	{
		return $this->belongsTo(Inventari::class, 'id_barang');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
