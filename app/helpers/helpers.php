<?php

use App\Models\settings;

    function getSettingsData($input = null)
    {
        if (empty($input)) {
            $data = Settings::get()->pluck('value', 'name')->toArray();
        } elseif (is_array($input)) {
            $data = Settings::whereIn('name', $input)->get()->pluck('value', 'name')->toArray();
        } else {
            $item = Settings::where('name', $input)->first();

            $data[$input] =  empty($item) ? '' : $item->value;
        }

        return $data;
    }

    function getFacebookLink()
    {
        $item = Settings::where('name', 'facebook')->first();

        return empty($item) ? '' : $item->value;
    }
    function getYoutubeLink()
    {
        $item = Settings::where('name','youtube')->first();

        return empty($item) ? '' : $item->value;
    }
?>