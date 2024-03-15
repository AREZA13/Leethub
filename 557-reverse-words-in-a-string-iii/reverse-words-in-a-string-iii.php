class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
    $sToArray = explode(' ', $s);
    $sToArray2 = [];
        foreach ($sToArray as $item) {
            $sToArray2[] = strrev($item);
        }

    return implode(' ', $sToArray2);
}
}