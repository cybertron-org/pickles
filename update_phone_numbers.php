<?php
/**
 * Update Phone Numbers Script
 * This script replaces hardcoded phone numbers with PHP variable
 */

// Include function.php to get the phone number variable
include 'includes/function.php';

echo "Current phone number: $phone_number\n";

// List of files to update
$files = [
    'ecommerce-website-development.php',
    'shopify-website-development.php',
    'wordpress-design-and-development.php',
    'backend/function/functions.php',
    'index.php',
    'lp/ecommerce/index.php',
    'lp/wordpress/index.php',
    'partials/pricing.php',
    'partials/pricing_update_2.php',
    'megamenu_v1/android-app-development.php',
    'megamenu_v1/combo-packages.php',
    'megamenu_v1/dapp-development.php',
    'megamenu_v1/custom-website-design-and-development.php'
];

// Patterns to search for
$patterns = [
    '/<?php echo $phone_number ?>/',
    '/(949) 323-3170/'
];

// Replacement
$replacement = '<?php echo $phone_number ?>';

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $originalContent = $content;
        
        // Replace both patterns
        $content = preg_replace($patterns, $replacement, $content);
        
        if ($content !== $originalContent) {
            file_put_contents($file, $content);
            echo "Updated: $file\n";
        } else {
            echo "No changes needed: $file\n";
        }
    } else {
        echo "File not found: $file\n";
    }
}

echo "\nPhone number update completed!\n";
?>
