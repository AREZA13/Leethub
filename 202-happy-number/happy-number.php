class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n){
    if ($n < 0) {
        return false;
    }
    $lastResult = $n;
    $i = 0;
    do {
        $i++;
        $asArray = $this->getAsArray($lastResult);
        $lastResult = $this->getSumOfSquares($asArray);
    } while ($lastResult !== 1 && $i < 50);

if ($i == 50) {
    return false;
}

    return true;
}
function getAsArray(int $number): array
{
    return array_map('intval', str_split($number));
}
function getSumOfSquares(array $array): int
{
    $sum = 0;
    foreach ($array as $number) {
        $sum += $number * $number;
    }
    return $sum;
}
}