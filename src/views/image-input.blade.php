<?php

/**
 * @var array $options
 */

?>

<link rel="stylesheet" href="{{ URL::asset('bootstrap-image-input/css/style.css') }}"/>

<div id="bootstrap-image-input">
    <bootstrap-image-input
            labelvalue="{{$options['label']}}"
            imagesrckey="{{$options['image-key']}}"
            imagedata="{{json_encode($options['data'])}}"
    ></bootstrap-image-input>
</div>
