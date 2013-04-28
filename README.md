Roman Numeral Kata
==================

Assumptions used
----------------

As directed by the Kata instructions, the solution only supports integers so passing a string will result in a null being returned. It also only supports valid integers between 0 and 3999 as well as providing a RomanNumeralGenerator interface as requested. 

Caveats 
-------

As also mentioned by the Kata - 3999 should return "MMMCMXCIX" rather than other values, such as MMMXMIX, MMMVMIV or MMMIM. The rest of the function follows this convention.

Approach
--------

I started the task by creating a skeleton class based on the provided interface and then created a separate test file based on PHPUnit. I started by creating tests for the initial requirements - that the number to convert was actually an integer, that it was greater than zero and less than four thousand. I then created the code at the beginning of the function to check for these requirements. 
Once the code passed the initial tests, I created more tests to check that the function would return the correct numeral for a given number. As I knew that I'd be testing multiple values, I created an array of values and expected outputs which would then be tested by a foreach loop. Next, I created the array of numerals (I, V, X, L, C, D and M) and added in all of the numerals and their arabic counterparts. I then added a foreach loop to step through the array and, providing the value was greater than the parameter passed, added the numeral to a string, removed the value from the parameter and then carried on through the loop. This worked for most values but not for ones such as 4, 9, 40, 90, etc. I added these values into the tests and then added them into the numerals array so that those cases would be catered for. 

This provides us with the final solution.
