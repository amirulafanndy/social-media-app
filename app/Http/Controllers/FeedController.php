<?php

namespace App\Http\Controllers;
use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $feeds = Feed::all();
        return view('feeds.index', compact('feeds'));
    }

    public function store(Request $request)
    {
        $request->validate(['feed' => 'required']);
        Feed::create([
            'user_id' => auth()->id(),
            'feed' => $request->feed
        ]);
        return back();
    }
}
