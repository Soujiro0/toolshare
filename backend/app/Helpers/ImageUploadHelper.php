<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Exception;

class ImageUploadHelper
{
    /**
     * Handle the upload of an image file.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $fieldName
     * @param string $folder
     * @return string|null
     * @throws \Exception
     */
    public static function handle(Request $request, string $fieldName = 'image', string $folder = 'items')
    {
        if (!$request->hasFile($fieldName)) {
            return null;
        }

        $file = $request->file($fieldName);

        if (!$file->isValid()) {
            throw new Exception('Uploaded file is not valid.');
        }

        return $file->store($folder, 'public');
    }
}
