<?php

/** PROBLEM 1 */

function maxProfit(array $pricesAndPurchases)//: int
{
    $moneySpentInDays = 0;
    $purchasedUnitsInDays = 0;
    $maxPricesValue = max(array_column($pricesAndPurchases, 'price'));

    $searchPriceIndex = array_search(5, array_column($pricesAndPurchases, 'price'));

    for ($i = 0; $i < $searchPriceIndex + 1; $i++) {

        $moneySpentInDays += $pricesAndPurchases[$i]['price'] * $pricesAndPurchases[$i]['purchased'];
        $purchasedUnitsInDays += $pricesAndPurchases[$i]['purchased'];
    }

    $moneySpent = $purchasedUnitsInDays * $maxPricesValue;
    $profit = $moneySpent - $moneySpentInDays;
    echo $profit . PHP_EOL;
}

maxProfit([
        0 => ['price' => 2, 'purchased' => 3],
        1 => ['price' => 3, 'purchased' => 0],
        2 => ['price' => 1, 'purchased' => 1],
        3 => ['price' => 5, 'purchased' => 4],
        4 => ['price' => 3, 'purchased' => 1],
        5 => ['price' => 2, 'purchased' => 2]
    ]
);

/** PROBLEM 2 */

function stringCost(string $src, string $tgt, int $insertionCost, int $deletionCost, int $replacementCost): int
{
    return levenshtein($src, $tgt, $insertionCost, $replacementCost, $deletionCost);
}

echo stringCost('bitten', 'meeting', 2, 3, 6) . PHP_EOL;

/** PROBLEM 3 */

function incrementalMedian(array $values)
{
    for ($i = 0; $i < count($values) - 1; $i++) {
        $current = $values[$i];
        $next = $values [$i + 1];
        if ($current < $next) {
            echo $current;
        } else {
            echo $next;
        }
    }
}

echo incrementalMedian([1, 8, 4, 7, 13]);

