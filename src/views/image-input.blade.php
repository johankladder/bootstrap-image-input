<?php

/**
 * @var array $options This array contains all the options that are given
 * in the constructor of this entity.
 */

?>

<!-- Require the stylesheet: -->
<link rel="stylesheet" href="{{ asset('bootstrap-image-input/css/style.css') }}"/>

<!-- Start rendering vue component: -->
<bootstrap-image-input
        labelvalue="{{$options['label']}}"
        imagesrckey="{{$options['image-key']}}"
        imagedata="{{json_encode($options['data'])}}"
        deletelabel="{{$options['delete-label']}}"
        deleteurl="{{$options['delete-url']}}"
></bootstrap-image-input>

