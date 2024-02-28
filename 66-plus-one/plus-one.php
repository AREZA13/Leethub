class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
            for ($i = count($digits) - 1; $i >= 0; --$i) {
        if ($digits[$i] != 9) {
            $digits[$i] = $digits[$i] + 1;
            break;
        }

        $digits[$i] = 0;
        if (!isset($digits[$i - 1])) {
            array_unshift($digits, 1);
            break;
        }

    }

    return $digits;
        
    }
}