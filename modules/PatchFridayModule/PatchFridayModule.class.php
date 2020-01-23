<?php
class PatchFridayModule extends BaseModule {
    public $key = 'patchfriday';

    public function get_data() {
        $tmp = file_get_contents('https://patchfriday.com');
        preg_match('/<div id="strip_title">(?\'title\'.*)<\/div>\s*<div id="strip_image"><img src="(?\'img\'[^"]*)"/', $tmp, $patchfriday);
        error_log(print_r($patchfriday, true));
        $json_obj->title = $patchfriday['title'];
        $json_obj->src = 'https://patchfriday.com'.$patchfriday['img'];
        return $json_obj;
    }
}
