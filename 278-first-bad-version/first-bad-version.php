/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n){

        [$min, $max] = $this->cutTheRange(1, $n);

        for ($i = $min; $i <= $max; $i++) {
            if ($this->isBadVersion($i) === true) {
                return $i;
            }
        }

    return 1111;
    }

    function cutTheRange(int $minRange, int $maxRange): array
    {
        $midInMinMaxRange = (int)(($minRange + $maxRange) / 2);
        if ($this->isBadVersion($midInMinMaxRange) === true) {
            $maxRange = $midInMinMaxRange;
        } else {
            $minRange = $midInMinMaxRange;
        }
        $diffMinMax = $maxRange - $minRange;
        if ($diffMinMax > 3) {
            return $this ->cutTheRange($minRange, $maxRange);
        }

        return [$minRange, $maxRange];
    }
}