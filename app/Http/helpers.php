<?php


if (! function_exists('hello')) {
    function get_lang() {
        return \Session::get('locale') ?? 'fr';
    }
}
