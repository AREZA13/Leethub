class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $unique = array_unique($nums);
        $arrayCountUniqueElements = count($unique);
        $quantityNumsOfElements = count($nums);
        $different = $quantityNumsOfElements - $arrayCountUniqueElements;

        for ($i = 0; $i < $different; $i++) {
            $unique[] = "_";
       }
        $nums = $unique;
        return $arrayCountUniqueElements;
    }
}