class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) 
{
    $arrayS = str_split($s);
    $arrayT = str_split($t);
    sort($arrayS);
    sort($arrayT);
    if (count($arrayS) === count($arrayT)) {
        if ($arrayS === $arrayT) {
            return true;
        }
    }return false;
}
}