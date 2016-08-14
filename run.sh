#!/bin/bash

PHPVERSION=`php -i | head | grep 'Version' | cut -d ' ' -f 4-10`

echo $PHPVERSION

echo "REQUIRE"
php test_require.php
echo "REQUIRE_ONCE"
php test_require_once.php
echo "REQUIRE if ( ! function_exists"
php test_require_if_not_function.php
