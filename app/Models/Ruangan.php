<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruangan
 * 
 * @property int $id_ruangan
 * @property string $nama_ruangan
 * 
 * @property Collection|BahanMasuk[] $bahan_masuks
 * @property Collection|Inventari[] $inventaris
 * @property Jadwal $jadwal
 *
 * @package App\Models
 */
class Ruangan extends Model
{
	protected $table = 'ruangan';
	protected $primaryKey = 'id_ruangan';
	public $timestamps = false;

	protected $fillable = [
		'nama_ruangan'
	];

	public function bahan_masuks()
	{
		return $this->hasMany(BahanMasuk::class, 'id_ruangan');
	}

	public function inventaris()
	{
		return $this->hasMany(Inventari::class, 'id_ruang');
	}

	public function jadwal()
	{
		return $this->hasOne(Jadwal::class, 'id_ruangan');
	}
}
