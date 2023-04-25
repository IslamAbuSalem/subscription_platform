<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\WebsiteSubscribers\NewWebsiteSubsriberRequest;
use App\Http\Resources\API\V1\WebsiteSubscribers\StoreMethodResource;
use App\Models\WebsiteSubscriber;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class WebsiteSubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(NewWebsiteSubsriberRequest $request)
    {
        //

        try{
            $websiteSubscriber = WebsiteSubscriber::create($request->all());
            $websiteSubscriber->load('website');
            $result = new StoreMethodResource($websiteSubscriber);
            $result->success = true;
            return $result;
        }catch (QueryException $e){
            return response()->json(['msg'=> $e->getMessage(), 'success'=> false], 422);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(WebsiteSubscriber $websiteSubscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebsiteSubscriber $websiteSubscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WebsiteSubscriber $websiteSubscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebsiteSubscriber $websiteSubscriber)
    {
        //
    }
}
