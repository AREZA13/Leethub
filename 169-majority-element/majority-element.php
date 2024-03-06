class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
    $result = array_count_values($nums);
    asort($result);
    return array_key_last($result);

}
}