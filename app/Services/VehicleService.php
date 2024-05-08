<?php
// app/Services/VehicleService.php
//Uses car.api to retrieve vehicle attributes for use in form fields
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class VehicleService
{
    protected $client;
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('RAPIDAPI_BASE_URL');
        $this->apiKey = env('RAPIDAPI_API_KEY');
    }

    public function getYears()
    {
        try {
            $response = $this->client->get("{$this->baseUrl}/years", [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'car-api2.p.rapidapi.com', 
                ],
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception('Error fetching years: ' . $e->getMessage());
        }
    }

    public function getMakes()
    {
        try {
            $response = $this->client->get("{$this->baseUrl}/makes", [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'car-api2.p.rapidapi.com', 
                ],
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception('Error fetching years: ' . $e->getMessage());
        }
    }
    public function getModels()
    {
        try {
            $response = $this->client->get("{$this->baseUrl}/models", [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'car-api2.p.rapidapi.com', 
                ],
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception('Error fetching years: ' . $e->getMessage());
        }
    }

    public function getTrims()
    {
        try {
            $response = $this->client->get("{$this->baseUrl}/trims", [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'car-api2.p.rapidapi.com', 
                ],
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception('Error fetching years: ' . $e->getMessage());
        }
    }

    public function getEngines()
    {
        try {
            $response = $this->client->get("{$this->baseUrl}/engines", [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'car-api2.p.rapidapi.com', 
                ],
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception('Error fetching years: ' . $e->getMessage());
        }
    }

    public function getVehicleAttributes()
    {
        try {
            $response = $this->client->get("{$this->baseUrl}/vehicle-attributes/bodies.type", [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'car-api2.p.rapidapi.com', 
                ],
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception('Error fetching years: ' . $e->getMessage());
        }
    }
}
