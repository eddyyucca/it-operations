@extends('layouts.master')

@section('content')
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Data Asset</h2>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Kode Asset</th>
                        <th scope="col" class="px-6 py-3">Category</th>
                        <th scope="col" class="px-6 py-3">Device Model</th>
                        <th scope="col" class="px-6 py-3">Serial Number</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Last Login</th>
                        <th scope="col" class="px-6 py-3">Warranty Expiry</th>
                        <th scope="col" class="px-6 py-3">Tag</th>
                        <th scope="col" class="px-6 py-3">Service Pack</th>
                        <th scope="col" class="px-6 py-3">Memory</th>
                        <th scope="col" class="px-6 py-3">Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assets as $asset)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $asset->kode_asset }}</td>
                            <td class="px-6 py-4">{{ $asset->category }}</td>
                            <td class="px-6 py-4">{{ $asset->devicemodel }}</td>
                            <td class="px-6 py-4">{{ $asset->sn }}</td>
                            <td class="px-6 py-4">{{ $asset->description }}</td>
                            <td class="px-6 py-4">{{ $asset->last_login }}</td>
                            <td class="px-6 py-4">{{ $asset->warranty_expiry_date }}</td>
                            <td class="px-6 py-4">{{ $asset->tag }}</td>
                            <td class="px-6 py-4">{{ $asset->service_pack }}</td>
                            <td class="px-6 py-4">{{ $asset->memory }}</td>
                            <td class="px-6 py-4">{{ $asset->location }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
