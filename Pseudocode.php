Initialize array $words with $number different words.

Set maxCycle variable to $number initially.

Initialize timesLooped.

Loop through array $words, $amountOfWords times with a random number from 1-$number.

BEGINLOOP

Select a word and set it to string $currentString.

If timesLooped != amountOfWords, Concatonate with a - after.

Else, do NOT.

Add $currentString to $password.

Set $maxCycle to $maxCycle - 1.

Remove selected word from array, and repeat loop.

EXITLOOP

echo $password.
