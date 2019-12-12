<?php

namespace App\CustomClasses;
class ManageImage extends \Illuminate\Support\Facades\Facade
{
    public static function insertImage($destination,$getFile)
    {
        $file=$getFile;
        $extention=$file->getClientOriginalExtension();
        $filename=date('m-d-Y_hia').rand(1111,9999).".".$extention;
        $file->move($destination,$filename);
        return $filename;
    }


    public static function deleteImage($fileName)
    {
        if(file_exists($fileName)){
            unlink($fileName);
        }
    }

}