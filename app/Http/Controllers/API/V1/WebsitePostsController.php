<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\WebsitePosts\NewWebsitePostRequest;
use App\Http\Resources\API\V1\WebsitePosts\StoreMethodResource;
use App\Models\PostsSubscribersEmailLog;
use App\Models\WebsitePost;
use App\Models\WebsiteSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsitePostsController extends Controller
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
    public function store(NewWebsitePostRequest $request)
    {
        //

        $websitePost = WebsitePost::create($request->all());
        $result = new StoreMethodResource($websitePost);
        $result->success = true;

        $websiteSubscriberIds = WebsiteSubscriber::select('id as website_subscriber_id',DB::raw($websitePost->id .' as website_post_id'))
            ->where('website_id',$request->website_id )
            ->get()->toArray();
        PostsSubscribersEmailLog::insert($websiteSubscriberIds);
        return $result;


    }

    /**
     * Display the specified resource.
     */
    public function show(WebsitePost $websitePost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebsitePost $websitePost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WebsitePost $websitePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebsitePost $websitePost)
    {
        //
    }
}
