<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Drone;

class DroneController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('AIRDATA_BASE_URL'),
            'auth' => [env('AIRDATA_API_KEY'), '']
        ]);
    }

    // Mengambil data drone dari Airdata API
    public function index()
    {
        $response = $this->client->get('');
        $drones = json_decode($response->getBody()->getContents(), true);
        return view('drones.index', compact('drones'));
    }

    // Menyimpan data drone ke dalam database (opsional)
    public function store(Request $request)
    {
        $drone = Drone::create($request->all());
        return response()->json($drone, 201);
    }

    // Mendapatkan data spesifik drone
    public function show($id)
    {
        $response = $this->client->get('/'.$id);
        $drone = json_decode($response->getBody()->getContents(), true);
        return response()->json($drone);
    }

    // Mengupdate data drone
    public function update(Request $request, $id)
    {
        $drone = Drone::find($id);
        $drone->update($request->all());
        return response()->json($drone);
    }

    // Menghapus data drone
    public function destroy($id)
    {
        $drone = Drone::find($id);
        $drone->delete();
        return response()->json(null, 204);
    }
}
