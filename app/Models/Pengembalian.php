<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pengembalian
 * 
 * @property int $id_pengembalian
 * @property int $id_peminjaman
 * @property Carbon $tanggal_pengembalian
 * @property int $jumlah
 * @property string $status
 * 
 * @property Peminjaman $peminjaman
 *
 * @package App\Models
 */
class Pengembalian extends Model
{
	protected $table = 'pengembalian';
	protected $primaryKey = 'id_pengembalian';
	public $timestamps = false;

	protected $casts = [
		'id_peminjaman' => 'int',
		'jumlah' => 'int'
	];

	protected $dates = [
		'tanggal_pengembalian'
	];

	protected $fillable = [
		'id_peminjaman',
		'tanggal_pengembalian',
		'jumlah',
		'status'
	];

	public function peminjaman()
	{
		return $this->belongsTo(Peminjaman::class, 'id_peminjaman');
	}
}
