<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfileResource;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $user->load(['profile']);

        return new ProfileResource($user);
    }
}
