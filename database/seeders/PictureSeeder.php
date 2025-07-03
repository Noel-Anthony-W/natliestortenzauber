<?php

namespace Database\Seeders;

use App\Models\Picture;
use App\PictureProperties;
use App\PictureTags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allPictures =[
        new Picture([
            getEnumValue(PictureProperties::TAG) => getEnumValue(PictureTags::Cake),
            getEnumValue(PictureProperties::ALT) => 'Bild 1',
            getEnumValue(PictureProperties::URL) => 'images/testpictures/1.jpg']
        ),
        new Picture([
            getEnumValue(PictureProperties::TAG) => getEnumValue(PictureTags::Cake),
            getEnumValue(PictureProperties::ALT) => 'Bild 2',
            getEnumValue(PictureProperties::URL) => 'images/testpictures/2.jpg']
        ),
        new Picture([
            getEnumValue(PictureProperties::TAG) => getEnumValue(PictureTags::Cake),
            getEnumValue(PictureProperties::ALT) => 'Bild 3',
            getEnumValue(PictureProperties::URL) => 'images/testpictures/3.jpg']
        ),
        new Picture([
            getEnumValue(PictureProperties::TAG) => getEnumValue(PictureTags::Cake),
            getEnumValue(PictureProperties::ALT) => 'Bild 4',
            getEnumValue(PictureProperties::URL) => 'images/testpictures/4.jpg']
        ),
        new Picture([
            getEnumValue(PictureProperties::TAG) => getEnumValue(PictureTags::Pie),
            getEnumValue(PictureProperties::ALT) => 'Bild 5',
            getEnumValue(PictureProperties::URL) => 'images/testpictures/5.jpg']
        ),
        new Picture([
            getEnumValue(PictureProperties::TAG) => getEnumValue(PictureTags::Others),
            getEnumValue(PictureProperties::ALT) => 'Bild 6',
            getEnumValue(PictureProperties::URL) => 'images/testpictures/6.jpg']
        ),
    ];
        foreach($allPictures as $picture)
        {
            $picture->save();
        }
    }
}
