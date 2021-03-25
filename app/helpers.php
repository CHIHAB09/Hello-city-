<?php

if(!function_exists('page_title')) {
    function page_title(?string $pageTitle = null):string {
            return $pageTitle
            ? $pageTitle  . ' | ' . config('app.name')
            : config('app.name');
        }
    }
