class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s)  {
    $patternToStringArray = str_split($pattern);
    var_dump($patternToStringArray);
    $sToArray = explode(" ", $s);
//    $oneLetterArray = [];
//    foreach ($sToArray as $word) {
//        $oneLetterArray [] = substr($word, 0, 1);
//    }
    var_dump($sToArray);
    $search = [];
    $search2 = [];
    foreach ($sToArray as $letter){
        $search [] = array_search($letter, $sToArray);
    }
    foreach ($patternToStringArray as $letter2){
        $search2 [] = array_search($letter2, $patternToStringArray);
    }
    var_dump($search2);
    var_dump($search);
    var_dump(array_diff($search, $search2));
    $arraysAreEqual = $search === $search2;
    var_dump($arraysAreEqual);
    if ($arraysAreEqual) {
        return true;
    } return false;

}
}