<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Peminjaman
 * 
 * @property int $id_peminjaman
 * @property int $id_user
 * @property int $id_barang
 * @property Carbon $tanggal_peminjaman
 * @property int $jumlah
 * @property string $status
 * 
 * @property Inventari $inventari
 * @property User $user
 * @property Collection|Pengembalian[] $pengembalians
 *
 * @package App\Models
 */
class Peminjaman extends Model
{
	protected $table = 'peminjaman';
	protected $primaryKey = 'id_peminjaman';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_barang' => 'int',
		'jumlah' => 'int'
	];

	protected $dates = [
		'tanggal_peminjaman'
	];

	protected $fillable = [
		'id_user',
		'id_barang',
		'tanggal_peminjaman',
		'jumlah',
		'status'
	];

	public function inventari()
	{
		return $this->belongsTo(Inventari::class, 'id_barang');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function pengembalians()
	{
		return $this->hasMany(Pengembalian::class, 'id_peminjaman');
	}
}
