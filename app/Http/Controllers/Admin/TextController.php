<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextController extends Controller
{

    public function test_options()
    {
        return response()->json("test");
    }

    public function index(Request $request)
    {
        return "hello";
//        TODO:compare 算法
        $now = microtime(true) * 1000;
        echo "前内存：" . memory_get_usage(), "<br />";
        echo $now, "<br />";
//        $data = $this->getFirstChar('中国共产党');
        $data = $this->test($request->get('test'));
        echo $data . "<br />";

        echo(microtime(true) * 1000);
        echo "后内存：" . memory_get_usage(), "<br />";
//        echo (microtime(true) / 1000) - $now, "\n比较\n";
//        $now = microtime() / 1000;
//        echo $data1, "\n";
//        echo microtime() / 1000 - $now, "\n";
    }

    protected function test($sString, $nType = 0)
    {
        $sStr = mb_substr($sString, 0, 3); //获取名字的姓
        $sString = $this->safe_encoding($sStr); //将UTF-8转换成GB2312编码
        //汉字开头，汉字没有以U、V开头的
        if (ord($sString) > 128) {
            $nAsc = ord($sString[0]) * 256 + ord($sString[1]) - 65536;
            $first_char_ascii_array = [
                'A' => [false, -20319, -20284], 'B' => [true, [-9743, -9743], [-20283, -19776]],
                'C' => [false, -19775, -19219], 'D' => [true, [-19218, -18711], [-9767, -9767]],
                'E' => [false, -18710, -18527], 'F' => [false, -18526, -18240],
                'G' => [false, -18239, -17760], 'H' => [true, [-17922, -17922], [-17759, -17248]],
                'I' => [false, -17247, -17418], 'J' => [false, -17417, -16475],
                'K' => [false, -16474, -16213], 'L' => [true, [-7182, -6928], [-16212, -15641]],
                'M' => [false, -15640, -15166], 'N' => [false, -15165, -14923], 'O' => [false, -14922, -14915],
                'P' => [true, [-6745, -6745], [-14914, -14631]], 'Q' => [true, [-7703, -7703], [-14630, -14150]],
                'R' => [false, -14149, -14091], 'S' => [false, -14090, -13319],
                'T' => [false, -13318, -12839], 'W' => [false, -12838, -12557],
                'X' => [false, -12556, -11848], 'Y' => [false, -11847, -11056], 'Z' => [false, -11055, -10247],
            ];
            foreach ($first_char_ascii_array as $key => $value) {
                if (!$value[0]) {
                    $right = $this->compareData($nAsc, $value[1], $value[2]);
                    if ($right) {
                        return $key;
                        break;
                    }
                } else {
                    foreach ($value as $child_value) {
                        if (is_array($child_value)) {
                            $right = $this->compareData($nAsc, $child_value[0], $child_value[1]);
                            if ($right) {
                                return $key;
                                break;
                            }
                        }
                    }
                }
            }
//            return $nAsc;
        } else if (ord($sString) >= 48 and ord($sString) <= 57) { //数字开头
            $array = ['L', 'Y', 'E', 'S', 'S', 'W', 'L', 'Q', 'B', 'J'];
            $select_iconv_substr = iconv_substr($sString, 0, 1, 'utf-8');
            return $array[$select_iconv_substr];
        } else if (ord($sString) >= 65 and ord($sString) <= 90) { //大写英文开头
            return substr($sString, 0, 1);
        } else if (ord($sString) >= 97 and ord($sString) <= 122) { //小写英文开头
            return strtoupper(substr($sString, 0, 1));
        } else {
            return iconv_substr($sStr, 0, 1, 'utf-8');
        }
    }

    protected function compareData($data, $compare_small, $compare_big)
    {
        $isRight = false;
        if ($data >= $compare_small and $data <= $compare_big) {
            $isRight = true;
        }
        return $isRight;
    }

    protected function getFirstChar($sString, $nType = 0)
    {
        $sStr = mb_substr($sString, 0, 3); //获取名字的姓
        $sString = $this->safe_encoding($sStr); //将UTF-8转换成GB2312编码
        //汉字开头，汉字没有以U、V开头的
        if (ord($sString) > 128) {
            $nAsc = ord($sString[0]) * 256 + ord($sString[1]) - 65536;
            if ($nAsc == -17922) return 'H';
            if ($nAsc == -9767) return 'D';
            if ($nAsc == -9743) return 'B';
            if ($nAsc == -7703) return 'Q';
            if ($nAsc == -7182 or $nAsc == -6928) return 'L';
            if ($nAsc == -6745) return 'P';
            if ($nAsc >= -20319 and $nAsc <= -20284) return "A";
            if ($nAsc >= -20283 and $nAsc <= -19776) return "B";
            if ($nAsc >= -19775 and $nAsc <= -19219) return "C";
            if ($nAsc >= -19218 and $nAsc <= -18711) return "D";
            if ($nAsc >= -18710 and $nAsc <= -18527) return "E";
            if ($nAsc >= -18526 and $nAsc <= -18240) return "F";
            if ($nAsc >= -18239 and $nAsc <= -17760) return "G";
            if ($nAsc >= -17759 and $nAsc <= -17248) return "H";
            if ($nAsc >= -17247 and $nAsc <= -17418) return "I";
            if ($nAsc >= -17417 and $nAsc <= -16475) return "J";
            if ($nAsc >= -16474 and $nAsc <= -16213) return "K";
            if ($nAsc >= -16212 and $nAsc <= -15641) return "L";
            if ($nAsc >= -15640 and $nAsc <= -15166) return "M";
            if ($nAsc >= -15165 and $nAsc <= -14923) return "N";
            if ($nAsc >= -14922 and $nAsc <= -14915) return "O";
            if ($nAsc >= -14914 and $nAsc <= -14631) return "P";
            if ($nAsc >= -14630 and $nAsc <= -14150) return "Q";
            if ($nAsc >= -14149 and $nAsc <= -14091) return "R";
            if ($nAsc >= -14090 and $nAsc <= -13319) return "S";
            if ($nAsc >= -13318 and $nAsc <= -12839) return "T";
            if ($nAsc >= -12838 and $nAsc <= -12557) return "W";
            if ($nAsc >= -12556 and $nAsc <= -11848) return "X";
            if ($nAsc >= -11847 and $nAsc <= -11056) return "Y";
            if ($nAsc >= -11055 and $nAsc <= -10247) return "Z";
            return $nAsc;
        } else if (ord($sString) >= 48 and ord($sString) <= 57) { //数字开头
            switch (iconv_substr($sString, 0, 1, 'utf-8')) {
                case 1:
                    return "Y";
                case 2:
                    return "E";
                case 3:
                    return "S";
                case 4:
                    return "S";
                case 5:
                    return "W";
                case 6:
                    return "L";
                case 7:
                    return "Q";
                case 8:
                    return "B";
                case 9:
                    return "J";
                case 0:
                    return "L";
            }
        } else if (ord($sString) >= 65 and ord($sString) <= 90) { //大写英文开头
            return substr($sString, 0, 1);
        } else if (ord($sString) >= 97 and ord($sString) <= 122) { //小写英文开头
            return strtoupper(substr($sString, 0, 1));
        } else {
            return iconv_substr($sStr, 0, 1, 'utf-8');
        }
    }

    function safe_encoding($string)
    {
        $encoding = "UTF-8";
        for ($i = 0; $i < strlen($string); $i++) {
            if (ord($string{$i}) < 128) continue;
            if ((ord($string{$i}) & 224) == 224) { //第一个字节判断通过
                $char = $string{++$i};
                if ((ord($char) & 128) == 128) { //第二个字节判断通过
                    $char = $string{++$i};
                    if ((ord($char) & 128) == 128) {
                        $encoding = "UTF-8";
                        break;
                    }
                }
            }
            if ((ord($string{$i}) & 192) == 192) { //第一个字节判断通过
                $char = $string{++$i};
                if ((ord($char) & 128) == 128) { //第二个字节判断通过
                    $encoding = "GB2312";
                    break;
                }
            }
        }
        if (strtoupper($encoding) == strtoupper('gb2312'))
            return $string;
        else
            return iconv($encoding, 'gb2312', $string);
    }
}