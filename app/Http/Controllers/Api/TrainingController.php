<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TrainingResource;
use App\Models\Training;

class TrainingController extends Controller
{
    public function index()
    {
        return TrainingResource::collection(Training::all());
    }

    public function show(Training $training)
    {
        return new TrainingResource($training);
    }

}
