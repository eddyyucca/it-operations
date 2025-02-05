<?php

namespace App\Http\Controllers;

// Model
use Illuminate\Http\Request;
use App\Models\AssetModel;
use MongoDB\Client;
class AssetController extends Controller
{
    public function index()
    {
        // Ambil semua data dari koleksi data_asset di MongoDB
      $collection = (new Client)->asset_operations->data_asset;
       $assets = $collection->find()->toArray();
        // Mengirim data ke view
        return view('data_asset.data_asset', compact('assets'));
    }
}
