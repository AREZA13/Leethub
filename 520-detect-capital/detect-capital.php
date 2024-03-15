class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
    $makeWordCapital = strtoupper($word);
    if ($makeWordCapital === $word) { //compare pattern  GOOGLE === GOOGLE 
        return true;
    }
    //usecase for all lowercase leetters (expected true for this)
    $makeAllLetersLowercase = strtolower($word);
    if ($word === $makeAllLetersLowercase) {
        return true;
    }
    
    $getFirstLetterInWord = substr($word, 0, 1);
    $makeFirstLetterInWordUpperCase = strtoupper($getFirstLetterInWord);
    
    //here I apply case when $word is like Google if G = G , then we compare  oogle = oogle
    if ($getFirstLetterInWord === $makeFirstLetterInWordUpperCase) {
        $getRestLetterWithoutFirstOne = substr($word, 1, strlen($word));
        $makeRestLettersWithoutFirstOneLowercase = strtolower($getRestLetterWithoutFirstOne);
        if ($makeRestLettersWithoutFirstOneLowercase === $getRestLetterWithoutFirstOne) {
            return true;
        }return false;
    }
    return  false;
}

}