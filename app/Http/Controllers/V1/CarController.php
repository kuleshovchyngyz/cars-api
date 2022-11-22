<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarResource;
use App\Models\CarGeneration;
use App\Models\CarMark;
use App\Models\CarModel;
use App\Models\CarModification;
use App\Models\CarSerie;
use App\Models\CarType;

class CarController extends Controller
{
    public function carTypes(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return CarResource::collection(CarType::all());
    }

    public function carType(CarType $carType)
    {
        return $carType;
        return new CarResource($carType);
    }

    public function carMarks(CarType $carType)
    {
        return CarResource::collection($carType->carMarks);
    }

    public function carMark(CarMark $carMark)
    {
        return new CarResource($carMark);
    }

    public function carModels(CarMark $carMark)
    {
        return CarResource::collection($carMark->carModels);
    }

    public function carModel(CarModel $carModel)
    {
        return new CarResource($carModel);
    }

    public function years(CarModel $carModel)
    {
        return $carModel->years();
    }

    public function generations(CarModel $carModel, $year)
    {
        return $carModel->getCarGenerationList($year);
    }

    public function generation(CarGeneration $carGeneration)
    {
        return $carGeneration;
    }

    public function series(CarGeneration $carGeneration)
    {
        return CarResource::collection($carGeneration->carSeries);
    }

    public function serie(CarSerie $carSeries)
    {
        return new CarResource($carSeries);
    }

    public function modifications($model, CarSerie $carSeries, $year)
    {
        return CarResource::collection($carSeries->getCarModificationList($model, $year));
    }
    public function modification(CarModification $carModification)
    {
        return CarResource::collection($carModification);
    }
    public function engines(CarModification $carModification)
    {
        return $carModification->getCarEngineList();
    }
    public function transmissions(CarModification $carModification)
    {
        return $carModification->getCarTransmissionList();
    }
    public function gears(CarModification $carModification)
    {
        return $carModification->getCarGearList();
    }

}
