class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s){
    $array = explode(" ", $s);
    $check = array_filter($array, function ($item) {
        return $item;
    });
    sort($check, SORT_NUMERIC);
    $string = $check[count($check) - 1];
    return strlen($string);

}
}