<?php

namespace Ebess\AdvancedNovaMediaLibrary\Http\Controllers;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

use Illuminate\Http\Request;
use App\Models\Article;

class UploadMediaController extends Controller
{
    public function upload(Request $request)
    {
        if($request->customProperties && $request->customProperties != 'undefined'){
            $props = json_decode($request->customProperties, true);
        }
        else{
            $props = [];
        }

        $model = Article::first(); // this could be anything I think
        $media = $model->addMedia($request->image)
                       ->withCustomProperties($props)
                       ->toMediaCollection();

        return ['success' => true];
    }
}
