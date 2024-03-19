class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s)  {
    $patternToStringArray = str_split($pattern);
    $sToArray = explode(" ", $s);

    return $this -> arrayOfLetterToKeysNumber($sToArray) === $this -> arrayOfLetterToKeysNumber($patternToStringArray);

}

function arrayOfLetterToKeysNumber($array): array
{
    $search = [];
    foreach ($array as $letter) {
        $search [] = array_search($letter, $array);
    }
    return $search;
}
}