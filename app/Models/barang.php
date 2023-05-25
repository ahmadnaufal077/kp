<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    // protected $primaryKey='kd_barang';
    protected $table='barang';
	public $timestamps = false;
	protected $fillable = [
		'kd_barang',
		'nm_barang',
		'harga_jual',
		'diskon',
		'stok',
	];

    public const CODE = 'DICK';
    public static function generateCode()
	{
		$dateCode = self::CODE . '/'. date('Ymd').'/';

		$lastItem = self::select('kd_barang')->where('kd_barang', 'like', $dateCode . '%')
			->first();
		// dd($lastItem->kd_barang);
		if(isset($lastItem)) {
			// dd($dateCode, $lastItem['kd_barang']);
			$lastItemNumber = str_replace($dateCode, '', $lastItem->kd_barang);
			$lastItemNumber = sprintf('%05d', (int)$lastItemNumber + 1);
			$itemCode = $dateCode . $lastItemNumber;
		}else{
			$itemCode = $dateCode . '00001';
		}
		
		if ($itemCode == $lastItem || $itemCode == null) {
			return self::generateCode();
		}
		return $itemCode;
	}
}
