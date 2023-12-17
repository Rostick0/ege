<?php

namespace App\Utils;

use App\Models\File;
use App\Models\Image;
use Carbon\Carbon;

class FileUtil
{
    public static function upload($request, $type = 'file')
    {
        if (!$request) return NULL;

        $name = Carbon::now()->valueOf() . '.' . $request->extension();
        $origname = $request->getClientOriginalName();
        $request->storeAs('public/' . $type . '/', $name);

        $file = null;

        $data = [
            'name' => $origname,
            'path' => $type . '/' . $name,
            'user_id' => auth()->id(),
        ];

        if ($type === 'image') {
            $imagesize = getimagesize($request);

            $file = Image::create([
                ...$data,
                'width' => $imagesize[0],
                'height' => $imagesize[1],
            ]);
        } else {
            $file = File::create($data);
        }

        return $file->id;
    }
}
