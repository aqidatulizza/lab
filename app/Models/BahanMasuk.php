<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BahanMasuk
 * 
 * @property int $id_masuk
 * @property int $id_user
 * @property string $nama_barang
 * @property int $id_ruangan
 * @property Carbon $tanggal
 * @property int $jumlah
 * @property string $keterangan
 * 
 * @property Ruangan $ruangan
 * @property User $user
 *
 * @package App\Models
 */
class BahanMasuk extends Model
{
	protected $table = 'bahan_masuk';
	protected $primaryKey = 'id_masuk';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_ruangan' => 'int',
		'jumlah' => 'int'
	];

	protected $dates = [
		'tanggal'
	];

	protected $fillable = [
		'id_user',
		'nama_barang',
		'id_ruangan',
		'tanggal',
		'jumlah',
		'keterangan'
	];

	public function ruangan()
	{
		return $this->belongsTo(Ruangan::class, 'id_ruangan');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
