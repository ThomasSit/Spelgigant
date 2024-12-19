<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResults;
use Illuminate\Support\Facades\Auth;

class UserResultsController extends Controller
{

    public function index()
    {
        $results = QuizResults::where('user_id', Auth::id())->get();
    
        $results->each(function ($result) { // Voor elk resultaat
            if ($result->started_at && $result->finished_at) {
           
                $start = strtotime($result->started_at); //engels tijd string naar time 
                $update = strtotime($result->finished_at);
    
                $Tijd = $update - $start;
    
        
                $result->time_taken = gmdate('i:s', $Tijd); // zet in leesbaar tijd minuten en seconden
            } else {
                $result->time_taken = 'N/A'; // N/A betekent Not Available
            }
        });
    
        return view('dashboard.dashboard', compact('results'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
