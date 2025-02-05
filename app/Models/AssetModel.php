<?php
namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class AssetModel extends Model
{
   protected $connection = 'mongodb';
   protected $collection = 'data_asset';
   protected $fillable = ['kode_asset', 'category', 'devicemodel', 'sn', 'description', 'last_login', 'warranty_expiry_date', 'tag', 'service_pack', 'memory', 'location'];
}