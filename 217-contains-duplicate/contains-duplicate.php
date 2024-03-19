class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums){
    $arrayUnique = array_unique($nums);
    if (count($arrayUnique) === count($nums)) { 
        return false;
    } return true;
}
}