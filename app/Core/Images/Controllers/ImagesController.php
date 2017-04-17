<?php

namespace App\Core\Images\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller {

    private $imagePath;

    /**
     * Response image content as stream
     * @return image
     */
    public function getResourceImage($filename, $thumbnail) {
        $this->imagePath = pathinfo(resource_path('assets/images/' . $filename) . ".png");
        //*** TODO Image Resize for thumbnail Value***
        //Check if file exist
        if (!is_file($this->imagePath['dirname'] . "/" . $this->imagePath['basename'])) {
            return response("Image not found", 404);
        }
        $contentType = "image/" . $this->imagePath['extension'];
        return response(file_get_contents($this->imagePath['dirname'] . "/" . $this->imagePath['basename']), 200, array(
            'Content-Type' => $contentType,
            'Connection' => 'close'
        ));
    }

    /**
     * Upload image to the server
     */
    public function uploadImage($saveTo, $filename) {
        info("At upload image");
        return ($saveTo);
        return "Uploaded";
    }

    public function saveImage($image, $saveToDir = "", $imageType = "png") {
        $fileName = str_random(15) . '.' . $imageType;
        $filePath = $saveToDir."/".$fileName;
        $image->storeAs($saveToDir, $fileName, 'images');
        return $filePath;
    }

}
