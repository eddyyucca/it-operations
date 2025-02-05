<?php
// Controller
use App\Http\Controllers\AssetController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/data_asset', [AssetController::class, 'index']);

Route::get('/ping', function() {
   try {
       DB::connection('mongodb')->command(['ping' => 1]);
       return ['status' => 'success'];
   } catch (\Exception $e) {
       return ['status' => 'error', 'message' => $e->getMessage()];
   }
});

Route::get('/test', function() {
   $collection = (new MongoDB\Client)->asset_operations->data_asset;
   $data = $collection->find()->toArray();
   return response()->json(array_map(function($doc) {
       return [
           'id' => (string)$doc->_id,
           'kode_asset' => $doc->kode_asset,
           'category' => $doc->category,
           'devicemodel' => $doc->devicemodel
       ];
   }, $data));
});