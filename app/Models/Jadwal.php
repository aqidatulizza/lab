<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jadwal
 * 
 * @property int $id_ruangan
 * @property string $hari
 * @property string $jam
 * @property string $kelas
 * @property int $id_user
 * 
 * @property Ruangan $ruangan
 * @property User $user
 *
 * @package App\Models
 */
class Jadwal extends Model
{
	protected $table = 'jadwal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_ruangan' => 'int',
		'id_user' => 'int'
	];

	protected $fillable = [
		'id_ruangan',
		'kelas',
		'id_user'
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
