<?php

namespace App\Utils;

use App;
use Config;
use Log;

class TagSanitize
{
    /**
     * サニタイズを行う。
     * @param string $content サニタイズを行う文字列
     * @param array $apply_tags サニタイズを行わない(タグ使用を許可する)タグ名一覧
     * @return string サニタイズ後の文字列
     */
    public static function sanitize($content, $apply_tags) {
        Log::debug('TagSanitize sanitize()');
        Log::debug($content);
        Log::debug($apply_tags);
        $content = htmlspecialchars($content);

        if (!is_array($apply_tags) || count($apply_tags) == 0 ) return $content;

        foreach($apply_tags as $tag) {
            if (strpos($tag, '/') === false) {
                $content = preg_replace_callback("/<\/?". $tag . "( .*?>|\/?>)/i",
                    function ($matches) {
                        $target_str = $matches[0];
                        $target_str = str_replace("<", "<", $target_str);
                        $target_str = str_replace(">", ">", $target_str);
                        $target_str = str_replace("'", "\'", $target_str);
                        return $target_str;
                    },
                    $content);
            }
        }
        Log::debug($content);
        return $content;
    }

    /**
     * ページの本文で使用できるタグの一覧を取得する
     * @return array サニタイズしないタグ一覧
     */
    public static function getContentApplyTagList() {
        return Config::get('sanitize.apply_tags');
    }
}
