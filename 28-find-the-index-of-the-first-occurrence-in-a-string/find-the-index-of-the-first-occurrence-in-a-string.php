class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
function strStr($haystack, $needle): int
{
    $a = -1;
    $pos = stripos($haystack, $needle);
    if ($pos === false) {
        return $a;;
    }
    return $pos;
}
}