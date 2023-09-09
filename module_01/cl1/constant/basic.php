<?php

/**
 * Constant Syntax
 * Link@ https://www.php.net/manual/en/language.constants.syntax.php
 * 
 * These are the differences between constants and variables:
 * Constants do not have a dollar sign ($) before them;
 * Constants may be defined and accessed anywhere without regard to variable scoping rules;
 * Constants may not be redefined or undefined once they have been set; and
 * Constants may only evaluate to scalar values or arrays.
 * 
 */

     /** Example #1 Defining Constants */
 /*define("CONSTANT", "Hello world.");
 echo CONSTANT; // outputs "Hello world."
 echo Constant; // Emits an Error: Undefined constant "Constant" Prior to PHP 8.0.0, outputs "Constant" and issues a warning.
 */


 /**Example #2 Defining Constants using the const keyword */
// Simple scalar value
const CONSTANT = 'Hello World';

echo CONSTANT;

// Scalar expression
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"

// Constant arrays
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"