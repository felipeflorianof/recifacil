<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donator;
use App\Models\People;
use Illuminate\Database\Eloquent\Model;

class DonatorController extends Controller
{
    public function index()
    {
        try {
            $donator = Donator::with('person', 'contact', 'address')->first();

            if ($donator) {
                $data = [
                    'cpf' => $donator->cpf,
                    'date_birth' => $donator->date_birth,
                    'name' => $donator->person->name,
                    'contact' => $donator->contact->makeHidden('uuid'),
                    'address' => $donator->address->makeHidden('uuid'),
                ];

                $response = [
                    'data' => [$data],
                    'message' => 'it works!'
                ];
            } else {
                $response = [
                    'data' => [],
                    'message' => 'No donator found.'
                ];
            }

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error retrieving donator data'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'cpf' => 'required',
                'date_birth' => 'required|date',
                'person_uuid' => 'required|exists:_people,uuid'
            ]);

            $donator = Donator::create([
                'cpf' => $validatedData['cpf'],
                'date_birth' => $validatedData['date_birth'],
                'person_uuid' => $validatedData['person_uuid'],
            ]);

            $donator->name = $donator->person->name;
            unset($donator->uuid, $donator->person);

            return response()->json(['data' => $donator, 'message' => 'Donator created successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating donator: ' . $e->getMessage()], 500);
        }
    }
}
