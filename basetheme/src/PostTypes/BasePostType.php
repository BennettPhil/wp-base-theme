<?php

namespace BaseTheme\PostTypes;

class BasePostType extends \CPT
{
    function getName()
    {
        echo $this->post_type_name;
    }

}