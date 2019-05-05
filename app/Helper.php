<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 1:10 PM
 */

namespace App;


use Illuminate\Support\Facades\Request;
use Intervention\Image\Facades\Image;
use Route;

class Helper
{
    public static function getMetaTags()
    {
        $meta = [
            'title' => 'Title',
            'siteName' => 'site name',
            'description' => 'description',
            'keyword' => 'keyword',
            'facebook' => 'facebook',
            'twitter' => 'twitter',
            'googlePlus' => 'google plus',
            'image' => asset('public/images/'),
            'locale' => 'id_ID',
            'type' => 'website',
            'url' => Request::url(),
            'publisher' => '',
            'author' => '',
            'publishedTime' => date('Y-m-d G:i:s'),
        ];

        return $meta;
    }

    public static function generateCRUDRoute($url, $controller)
    {
        Route::get($url, $controller . '@index');
        Route::post($url, $controller . '@getData');
        Route::get($url . '/trash', $controller . '@trash');
        Route::post($url . '/trash', $controller . '@getTrash');
        Route::get($url . '/add', $controller . '@add');
        Route::post($url . '/store', $controller . '@store');
        Route::get($url . '/edit/{id}', $controller . '@edit');
        Route::put($url . '/update/{id}', $controller . '@update');
        Route::delete($url . '/delete', $controller . '@delete');
        Route::delete($url . '/restore', $controller . '@restore');
        Route::delete($url . '/deletepermanently', $controller . '@deletePermanently');
    }

    /**
     * Get image and resize on the fly
     * @example: <img src="{{ asset(imageFly($user->photo, [385, 385])) }}" alt="" width="100%">
     * @param  string $path      relative path to file
     * @param  array  $dimension ['width', 'height'] of the image
     * @return string            relative path to the resized image
     */
    public static function imageFly($path, array $dimension)
    {
        if (file_exists($path)) {
            $image = Image::make($path);
            $resizedImagePath = $image->dirname
                . '/' . $image->filename
                . '_' . implode('_', $dimension)
                . '.' . $image->extension;
            if (!file_exists($resizedImagePath)) {
                if (!isset($dimension[1])){
                    $image->fit($dimension[0], $dimension[1]);
                }else{
                    $image->fit($dimension[0]);
                }
                $image->save($resizedImagePath);
            }
            return $resizedImagePath;
        }
        return '';
    }

    /**
     * Convert string into slug
     * @param $str
     * @param string $delimiter
     * @return string
     */
    public static function createSlug($str, $delimiter = '-'){

        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    }

    public static function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;

    }
}