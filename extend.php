<?php

/*
 * This file is part of wvbforum/limit-search.
 *
 * Copyright (c) 2020 2006bt.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace WvbForum\LimitSearch;

use Flarum\Extend;

return [
    
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
        
    
];
