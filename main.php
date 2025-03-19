<?php

/**
 * Coding Test: Identify Loyal Customers
 * 
 * This script processes log files containing website visit records and identifies 'loyal customers.'
 * 
 * A loyal customer meets these criteria:
 * 1. They visited the website on both days (Day 1 and Day 2).
 * 2. They visited at least two unique pages across both days.
 * 
 * Input:
 * - Two log files (`log_day1.txt` and `log_day2.txt`) with entries in the format:
 *   `<Timestamp>,<PageId>,<CustomerId>`
 * 
 * Output:
 * - A list of loyal customers who meet the criteria.
 * - A confirmation message if the expected customers `[123, 456, 789]` are matched.
 */

/**
 * Parse the log file and return an array of customers with their visited pages.
 * @param string $filename - Log file to parse
 * @return array - Associative array of customers with their visited pages
 */
function parseLogFile(string $filename): array {
    if (!file_exists($filename)) {
        die("Error: File not found - $filename\n");
    }
    
    $customers = [];
    
    // You're logic here
    
    return $customers;
}

/**
 * Find loyal customers who visited the website on both days and at least two unique pages.
 * @param string $logFile1 - Log file for Day 1
 * @param string $logFile2 - Log file for Day 2
 * @return array - List of loyal customers
 */
function findLoyalCustomers(string $logFile1, string $logFile2): array {
    $loyalCustomers = [];
    
    // You're logic here
    
    return array_keys($loyalCustomers);
}

// Define log files
$logFile1 = 'log_day1.log';
$logFile2 = 'log_day2.log';

// Find loyal customers
$loyalCustomers = findLoyalCustomers($logFile1, $logFile2);

// Output for debugging
// Check against expected customers
echo "Loyal Customers:\n";
foreach ($loyalCustomers as $customer) {
    echo " - $customer\n";
}

// Results are correct
if ($loyalCustomers === [123, 456, 789]) {
    echo "\nYay! Expected loyal customers matched!\n";
} else {
    echo "\nLoyal customers do not match!\n";
}
?>
