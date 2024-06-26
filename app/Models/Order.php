<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ="orders";
    protected $fillable = [
        'username',
        'fullname',
        'thoigiandathang',
        'total',
        'soluongdonhang',
        'address',
        'contact',
        'status',
        'note',
        'completed_by'
    ];
    public $timestamps = false;
    public function saveOrder($data){
	$order = new self();
	$order->username = $data['username'];
	$order->fullname = $data['fullname'];
	$order->thoigiandathang = $data['time'];
	$order->total = $data['total'];
	$order->amount = $data['amount'];
	$order->address = $data['address'];
	$order->contact = $data['phone'];
	$order->note = $data['note'];
	$order->status = $data['method'];
	//$order->completed_by=$data['completed_by'];
	
	return $order->save();
    }
}
