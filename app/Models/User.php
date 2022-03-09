<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $level
 * 
 * @property Collection|BahanKeluar[] $bahan_keluars
 * @property Collection|BahanMasuk[] $bahan_masuks
 * @property Collection|Jadwal[] $jadwals
 * @property Collection|Peminjaman[] $peminjamen
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'id_user';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'level'
	];

	public function bahan_keluars()
	{
		return $this->hasMany(BahanKeluar::class, 'id_user');
	}

	public function bahan_masuks()
	{
		return $this->hasMany(BahanMasuk::class, 'id_user');
	}

	public function jadwals()
	{
		return $this->hasMany(Jadwal::class, 'id_user');
	}

	public function peminjamen()
	{
		return $this->hasMany(Peminjaman::class, 'id_user');
	}
}
