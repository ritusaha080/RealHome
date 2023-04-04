<?php

use App\Models\property;
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
        $item = Settings::where('name', 'youtube')->first();

        return empty($item) ? '' : $item->value;
    }
    function getEmailLink()
    {
        $item = Settings::where('name', 'email')->first();

        return empty($item) ? '' : $item->value;
    }
    function getAboutLink()
    {
        $item = Settings::where('name', 'about_us')->first();

        return empty($item) ? '' : $item->value;
    }
function getMoreAboutLink()
{
    $item = Settings::where('name', 'We_are_offering')->first();

    return empty($item) ? '' : $item->value;
}
function getInstagramLink()
{
    $item = Settings::where('name', 'instagram')->first();

    return empty($item) ? '' : $item->value;
}


function getAddressLink()
{
    $item = Settings::where('name', 'address')->first();

    return empty($item) ? '' : $item->value;
}
    function getPropertyByCategoryId($id) {
        $items = property::doesntHave('payment')->where('category_id', $id)->paginate(2);

        return $items;
    }
?>
