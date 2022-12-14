<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrgEventResource;
use App\Models\OrgEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrgEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrgEventResource::collection(DB::table('org_events')->select('event_name')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        return OrgEvent::create([
            'id' => $request["id"],
            'event_name' => $request["event_name"]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgEvent  $orgEvent
     * @return \Illuminate\Http\Response
     */
    public function show(OrgEvent $orgEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgEvent  $orgEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrgEvent $orgEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgEvent  $orgEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrgEvent $orgEvent)
    {
        //
    }
}
