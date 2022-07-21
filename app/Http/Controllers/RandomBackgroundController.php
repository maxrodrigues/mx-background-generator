<?php

namespace App\Http\Controllers;

use App\Services\FirstStep\Contracts\DwarfFirstStepServiceContract;
use App\Tables\CircumstanceOfBirthTable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RandomBackgroundController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $response['circumsntaceOfBirth'] = CircumstanceOfBirthTable::getCircumstanceOfBirths();
        // $response = [];
        // $ununsual = false;
        // if ($request->race === 'dwarf') {
        //     // Homeland
        //     $ununsual = false;
        //     $homeland = rand(1, 100);
        //     if ($homeland > 1 && $homeland <= 40) {
        //         $response['homeland'] = 'Hills or Mountains';
        //     }

        //     if ($homeland > 40 && $homeland <= 80) {
        //         $response['homeland'] = 'Underground';
        //     }

        //     if ($homeland > 80 && $homeland <= 87) {
        //         $response['homeland'] = 'Non-Dwarven Town or Village';
        //     }

        //     if ($homeland > 87 && $homeland <= 95) {
        //         $response['homeland'] = 'Non-Dwarven City or Metropolis';
        //     }

        //     if ($homeland > 95 && $homeland <= 100) {
        //         $response['homeland'] = 'Unusual Homeland.';
        //         $ununsual = true;
        //     }

        //     // Parents
        //     $parents = rand(1, 100);
        //     if ($parents > 1 && $parents <= 60) {
        //         $response['parents'] = 'Both of your parents are alive.';
        //     }

        //     if ($parents > 60 && $parents <= 73) {
        //         $response['parents'] = 'Only your father is alive.';
        //     }

        //     if ($parents > 73 && $parents <= 86) {
        //         $response['parents'] = 'Only your mother is alive.';
        //     }

        //     if ($parents > 86 && $parents <= 100) {
        //         $response['parents'] = 'Both of your parents are dead.';
        //     }

        //     // Siblings
        //     $sibligs = true;
        //     $siblings = rand(1, 100);
        //     if ($siblings > 1 && $siblings <= 80) {
        //         $response['siblings'] = rand(1, 4) . ' biological siblings.';
        //     }

        //     if ($siblings > 80 && $siblings <= 90) {
        //         $response['siblings'] = (rand(1, 4) + 1) . ' biological siblings.';
        //     }

        //     if ($siblings > 90 && $siblings <= 95) {
        //         $response['siblings'] = rand(1, 3) . ' biological siblings and ' . rand(1, 3) . ' adopted siblings.';
        //     }

        //     if ($siblings > 95 && $siblings <= 100) {
        //         $response['siblings'] = 'No Siblings.';
        //     }
        //     $noSibligs = true;
        // }

        // if ($ununsual) {
        //     $ununsualDice = rand(1, 100);
        //     if ($ununsualDice > 1 && $ununsualDice <= 10) {
        //         $response['unusual homeland'] = 'Subterranean';
        //     }

        //     if ($ununsualDice > 10 && $ununsualDice <= 25) {
        //         $response['unusual homeland'] = 'Mountains';
        //     }

        //     if ($ununsualDice > 25 && $ununsualDice <= 40) {
        //         $response['unusual homeland'] = 'Plains';
        //     }

        //     if ($ununsualDice > 40 && $ununsualDice <= 50) {
        //         $response['unusual homeland'] = 'Town or Village';
        //     }

        //     if ($ununsualDice > 50 && $ununsualDice <= 60) {
        //         $response['unusual homeland'] = 'City or Metropolis';
        //     }

        //     if ($ununsualDice > 60 && $ununsualDice <= 70) {
        //         $response['unusual homeland'] = 'Forest';
        //     }

        //     if ($ununsualDice > 70 && $ununsualDice <= 80) {
        //         $response['unusual homeland'] = 'River, Swamp, or Wetlands';
        //     }

        //     if ($ununsualDice > 80 && $ununsualDice <= 85) {
        //         $response['unusual homeland'] = 'Desert';
        //     }

        //     if ($ununsualDice > 85 && $ununsualDice <= 90) {
        //         $response['unusual homeland'] = 'Sea';
        //     }

        //     if ($ununsualDice > 90 && $ununsualDice <= 95) {
        //         $response['unusual homeland'] = 'Tundra';
        //     }

        //     if ($ununsualDice > 95 && $ununsualDice <= 100) {
        //         $response['unusual homeland'] = 'Another Plane';
        //     }
        // }



        return new JsonResponse([
            'response' => $response,
        ]);
    }
}
