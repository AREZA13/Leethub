class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
    foreach ($nums as $key => $number) {
        if ($nums[$key] === 0) {
            array_push($nums, $nums[$key]);
            unset($nums[$key]);
        } 
    }
    return $nums;
}
}