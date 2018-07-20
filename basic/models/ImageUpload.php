<?php
/**
 * Created by PhpStorm.
 * User: lizabonka
 * Date: 19.07.18
 * Time: 16:42
 */
namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model{

    public $image;

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' =>'jpg,png']
        ];
    }

    public function uploadFile( UploadedFile $file, $currentImage)
    {
//        die($currentImage);
        $this->image = $file;
        if(file_exists(Yii::getAlias('@web').'uploads/'.$currentImage))
        {
            unlink(Yii::getAlias('@web').'uploads/'.$currentImage);
        }

        $filename = strtolower(md5(uniqid($file->baseName)) ).'.'. $file->extension;
        $file->saveAs(Yii::getAlias('@web').'uploads/'.$filename);
        return $filename;
    }


}