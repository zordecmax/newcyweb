<?php

namespace App\Models;

use TCG\Voyager\Traits\Translatable;

class Page extends  \TCG\Voyager\Models\Page
{
    use Translatable;

    protected $translatable = ['title', 'body', 'slug','meta_description','meta_keywords'];
}
