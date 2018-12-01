<?php

function bigIntSum(string $a, string $b) : string {
    $aLength = strlen($a);
    $bLength = strlen($b);
    $result = [];
    $quotient = 0;
    $maxLength = max($aLength, $bLength);
    for ($i = 0; $i < $maxLength; $i++) {
        $first = $aLength > $i ? $a[$aLength - $i - 1] : 0;
        $second = $bLength > $i ? $b[$bLength - $i - 1] : 0;
        $sum = $first + $second + $quotient;
        $remainder = $sum % 10;
        $result[] = $remainder;
        $quotient = intdiv($sum, 10);
    }
    if ($quotient) {
        $result[] = $quotient;
    }

    return implode('', array_reverse($result));
}
