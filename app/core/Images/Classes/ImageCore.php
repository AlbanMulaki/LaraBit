<?php

namespace App\Core\Images\Classes;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

/**
 * @author Alban Mulaki <alban.mulaki@gmail.com>
 */
class ImageCore {

    private $diskInstance = "images";
    private $diskPath;
    private $image;
    private $saveToDir;
    private $fullOriginalPath;

    public function __construct($image, $saveToDir = "") {
        $this->diskPath = Storage::disk($this->diskInstance)->getAdapter()->getPathPrefix();
        $this->image = $image;
        $this->saveToDir = $saveToDir;
    }

    /**
     * Generate, resize, process quality of image in many format resolutions 
     */
    public function generateImages() {
        $thumbnailsRules = require_once __DIR__ . '/ThumbnailRules.php';
        $path = $this->fullOriginalPath;
        $image = Image::make($path);
        $image->backup();
        foreach ($thumbnailsRules as $rule) {
            $folderPath = dirname($path) . "/" . $rule['name'] . "/";
            $image->resize($rule['width'], $rule['height'], function($a) {
                $a->aspectRatio();
                $a->upsize();
            });

            if (!is_dir($folderPath)) {
                mkdir($folderPath, 0777);
            }
            $image->save($folderPath . basename($path));
            $image->reset();
        }
    }

    /**
     * Save image and write to the disk
     */
    public function saveImage() {
        $pathFile = $this->image->store($this->saveToDir, $this->diskInstance);
        $this->fullOriginalPath = $this->diskPath . $pathFile;
        $this->generateImages();
        return $pathFile;
    }

}
