<?php

function vite_asset($path)
{
    if (app()->environment('local')) {
        return sprintf('http://localhost:3000%s', $path);
    }

    return asset($path);
}
