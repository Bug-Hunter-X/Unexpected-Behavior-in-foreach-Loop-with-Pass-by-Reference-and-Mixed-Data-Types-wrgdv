# PHP foreach Loop with Pass-by-Reference and Mixed Data Types

This example demonstrates an uncommon but crucial aspect of PHP's `foreach` loop when using pass-by-reference (`&`) and arrays containing mixed data types.  The unexpected behavior arises from attempting to modify a numeric element within the array using the pass-by-reference technique.  While the code may not produce a direct error, the results can be counterintuitive and lead to subtle bugs.