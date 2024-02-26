class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target){
    foreach ($nums as $key => $element) {
        if ($element === $target) {
            return $key;
        }
    }
    $nums[] = $target;
    sort($nums, SORT_NUMERIC);
    return array_search($target, $nums);
}
}