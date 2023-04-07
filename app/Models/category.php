<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;



class category extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','status'];
    public static function getAll()
{
$data = [
['id' => 1, 'name' => 'Áo nam', 'status' => 1],
['id' => 2, 'name' => 'Áo nữ', 'status' => 0],
['id' => 3, 'name' => 'Quần bò', 'status' => 0],
['id' => 4, 'name' => 'Túi xách', 'status' => 1],
['id' => 5, 'name' => 'Ví da','status' => 1],
['id' => 6, 'name' => 'Giày dép', 'status' => 1],
['id' => 7, 'name' => 'Dây lưng','status' => 1],
['id' => 8, 'name' => 'Đồng hồ','status' => 1]
];
$resault = [];
foreach($data as $item) {
$resault[] = (new static)->fill($item);
}
return collect($resault);
}
public static function paginate($perPage = 5, $page = null, $options = [])
{

$items = (new static)->getAll();
$page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
$items = $items instanceof Collection ? $items : Collection::make($items);
return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}
}



