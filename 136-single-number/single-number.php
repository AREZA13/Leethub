class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
    $resultArray = array_count_values($nums);
    asort($resultArray);
    $firstKey = array_key_first($resultArray);
    var_dump($resultArray);
    return $firstKey;
}
}