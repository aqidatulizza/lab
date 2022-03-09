<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventari
 * 
 * @property int $id_barang
 * @property int $id_ruang
 * @property string $nama_barang
 * @property string $merk
 * @property string $keterangan
 * @property int $tahun
 * @property int $harga
 * @property string $keadaan
 * @property int $jumlah
 * @property int $stock_sekarang
 * 
 * @property Ruangan $ruangan
 * @property Collection|BahanKeluar[] $bahan_keluars
 * @property Collection|Peminjaman[] $peminjamen
 *
 * @package App\Models
 */
class Inventari extends Model
{
	protected $table = 'inventaris';
	protected $primaryKey = 'id_barang';
	public $timestamps = false;

	protected $casts = [
		'id_ruang' => 'int',
		'tahun' => 'int',
		'harga' => 'int',
		'jumlah' => 'int',
		'stock_sekarang' => 'int'
	];

	protected $fillable = [
		'id_ruang',
		'nama_barang',
		'merk',
		'keterangan',
		'tahun',
		'harga',
		'keadaan',
		'jumlah',
		'stock_sekarang'
	];

	public function ruangan()
	{
		return $this->belongsTo(Ruangan::class, 'id_ruang');
	}

	public function bahan_keluars()
	{
		return $this->hasMany(BahanKeluar::class, 'id_barang');
	}

	public function peminjamen()
	{
		return $this->hasMany(Peminjaman::class, 'id_barang');
	}
}
