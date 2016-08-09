<?php


class Photo extends Eloquent {

    protected $fillable = array('category_id', 'title', 'description', 'images', 'img_thumbs');



    public static $rules = array(
        'category_id'=>'required|integer',
        'title' => 'required|min:2',
        'description' => 'required|min:20',
        'images' => 'required|image_type|mimes_img:jpeg,jpg,JPG,bmp,png,gif|maxsize:2097152'

    );

//

    public function category() {
        return $this->belognsTo('Category');
    }



}