class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
function addBinary($a, $b)
{
    $arrayA = str_split($a);
    $arrayB = str_split($b);
    $isArrayAbiggerThanArrayB = count($arrayA) - count($arrayB);
    $countDiff = abs(count($arrayA) - count($arrayB));

    if ($isArrayAbiggerThanArrayB > 0) {

        for ($i = 0; $i < $countDiff; $i++) {
            array_unshift($arrayB, "0");
        }
    } else {
        if ($isArrayAbiggerThanArrayB < 0) {
            for ($i = 0; $i < $countDiff; $i++) {
                array_unshift($arrayA, "0");
            }
        }
    }
    $arrayC = [];
    $editionFromLastResult = 0;

    for ($i = count($arrayA) - 1; $i >= 0; --$i) {
        echo "\nStep $i\n";
        echo "a {$arrayA[$i]}\n";
        echo "b {$arrayB[$i]}\n";
        echo "c {$editionFromLastResult}\n";
        $result = $this->processElements(
            (int)$arrayA[$i],
            (int)$arrayB[$i],
            $editionFromLastResult
        );
        echo "FunctionResult: ";
        $arrayC[$i] = $result[0];
        $editionFromLastResult = $result[1];

        echo "ArrayC: ";
        ksort($arrayC);

        if (0 === $i && 1 === $editionFromLastResult) {
            array_unshift($arrayC, 1);

        }
    }

    return implode('', $arrayC);
}

/** @return array{0: int, 1: int}
 * @throws Exception
 */
function processElements(int $a, int $b, int $c): array
{
    return match (true) {
        ($a == 1 && $b == 1 && $c == 0) => [0, 1],
        ($a == 1 && $b == 1 && $c == 1) => [1, 1],
        ($a == 0 && $b == 1 && $c == 1) => [0, 1],
        ($a == 0 && $b == 1 && $c == 0) => [1, 0],
        ($a == 1 && $b == 0 && $c == 1) => [0, 1],
        ($a == 1 && $b == 0 && $c == 0) => [1, 0],
        ($a == 0 && $b == 0 && $c == 1) => [1, 0],
        ($a == 0 && $b == 0 && $c == 0) => [0, 0],

        default => throw new \Exception('Unexpected match value'),
    };
}
}