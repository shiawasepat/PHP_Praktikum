<?php
function merge(&$nums1, $m, $nums2, $n) {
    $i = $m - 1; // pointer for nums1
    $j = $n - 1; // pointer for nums2
    $k = $m + $n - 1; // pointer for merged array

    while ($j >= 0) {
        if ($i >= 0 && $nums1[$i] > $nums2[$j]) {
            $nums1[$k] = $nums1[$i];
            $i--;
        } else {
            $nums1[$k] = $nums2[$j];
            $j--;
        }
        $k--;
    }
}

// Example usage:
$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;
merge($nums1, $m, $nums2, $n);
print_r($nums1); // Output: [1,2,2,3,5,6]