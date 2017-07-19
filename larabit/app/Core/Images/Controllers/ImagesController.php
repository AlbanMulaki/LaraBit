<?php

namespace App\Core\Images\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Core\Images\Classes\ImageCore;

class ImagesController extends Controller {

    private $imagePath;

    /**
     * Response image content as stream
     * @return image
     */
    public function getResourceImage($filename, $thumbnail = "") {
        if ($thumbnail === "original") {
            $filePath = $filename;
        } else {
            $filePath = dirname($filename) . "/" . $thumbnail . "/" . basename($filename);
        }

        try {
            $image = Storage::disk('images')->get($filePath);
        } catch (\Illuminate\Contracts\Filesystem\FileNotFoundException $e) {
            $message['message'][] = trans('images::general.image_not_found');
            $message['code'] = 404;
            $message['status'] = 'error';
            $message['action'] = 'read';
            return response($message, 404);
        }
        return response($image, 200, array(
            'Content-Type' => Storage::disk('images')->mimeType($filePath),
            'Connection' => 'close'
        ));
    }

    /**
     * Upload image to the disk
     */
    public function uploadImage($saveTo, $image = NULL) {
        if ($image === NULL) {
            //TODO upload image to the route
            $message['message'][] = trans('images::general.generic_error');
            $message['code'] = 500;
            $message['status'] = 'error';
            $message['action'] = 'create';
            return response($message,500);
        } else {
            $uploadedImage = $this->saveImage($image, $saveTo);
        }
        return $uploadedImage;
    }

    /**
     * Save image into the disk
     * @param type $image
     * @param type $saveToDir
     * @return type
     */
    public function saveImage($image, $saveToDir = "") {
        if ($image === NULL) {
            return 404;
        }
        $imageCore = new ImageCore($image, $saveToDir);
        return $imageCore->saveImage();
    }

}
