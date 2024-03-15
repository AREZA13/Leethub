class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
            $generateStringRange = implode(', ', range(1, count($nums)));
    $newArray = explode(', ', $generateStringRange);
    $difference = array_diff($newArray, $nums);
    return $difference;
        
    }
}