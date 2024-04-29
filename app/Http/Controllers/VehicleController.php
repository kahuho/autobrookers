<?php 

// app/Http/Controllers/VehicleController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VehicleService;

class VehicleController extends Controller
{
    protected $vehicleService;

    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    public function testApi()
    {
        try {
            $years = $this->vehicleService->getYears();
            $makes = $this->vehicleService->getMakes();
            $models = $this->vehicleService->getModels();
            $trims = $this->vehicleService->getTrims();
            $engines = $this->vehicleService->getEngines();
            //$attributes = $this->vehicleService->getVehicleAttributes();

            return response()->json([
                'years' => $years,
                'makes' => $makes,
                'models' => $models,
                'trims' => $trims,
                'engines' => $engines,
              //  'attributes' => $attributes,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
