<?php

namespace App\core;

use stdClass;

class GetFormData
{
    public $post;

    public function __construct($post)
    {
        $this->post = $this->toObject($post);

    }

    private function toObject($array) : stdClass
    {
        $object = new stdClass();

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $value = $this->toObject($value);
            }

            $object->$key = $value;
        }

        return $object;
    }
}