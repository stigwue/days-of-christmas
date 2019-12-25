<?php

/*format:

On the first day of Christmas
my true love sent to me:
A Partridge in a Pear Tree

On the second day of Christmas
my true love sent to me:
Two Turtle Doves
and a Partridge in a Pear Tree

On the <pos> day of Christmas
my true love sent to me:

if pos==1 <gave_to_me[pos]>
if pos>1 loop pos -> 1
	if pos !== 1 <gave_to_me[pos]>
	if pos == 1 "and" <gave_to_me[pos]>

You know how this goes.
*/

$intro_1 = "On the ";
//$intro_2 = " of Christmas\nmy true love sent to me:\n";
$intro_2 = " in Nigeria\nshe really sent to me:\n";

//what the true love sends, in the right order
$gave_to_me = array(
	/*"a partridge in a pear tree",
	"two turtle doves",
	"three french hens",
	"four calling birds",
	"five golden rings",
	"six geese a laying",
	"seven swans a swimming",
	"eight maids a milking",
	"nine ladies dancing",
	"ten lords a leaping",
	"eleven pipers piping",
	"12 drummers drumming"*/


	"a pothole smack center on the road",
	"pothole remains unpatched",
	"citizens take oncoming lane",
	"law enforcement extract money for faulting",
	"head-on collision happens, person dies",
	"road becomes a hot button issue",
	"campaign promise made",
	"politician voted (or rigging allowed)",
	"monies voted to fix road",
	"bulk of constituency monies spent on re-election",
	"road patched halfway, politician lauded",
	"verification committees see no wrong",
);

//day marker: you could use "On the day 1 of Christmas" or use the following twelve
$day_marker = array(
	"first", "second", "third", "fourth", "fifth",
	"sixth", "seventh", "eight", "ninth", "tenth",
	"eleventh", "twelfth"
);

$gave_count = count($gave_to_me);

if ($gave_count == 0)
{
	echo $intro_1 . $day_marker[0] . $intro_2;

	$gave_none = array(
		"My true love is a bad bitch!"
	);

	echo $gave_none[rand(0, count($gave_none)-1)];
}
else
{
	for ($i = 0; $i < $gave_count; ++$i)
	{
		echo $intro_1 . (isset($day_marker[$i]) ? $day_marker[$i] : $i) . ' day' . $intro_2;

		if ($i == 0)
		{
			for ($j = 0; $j <= $i; ++$j)
			{
				echo $gave_to_me[$i] . ".\n";
			}

			echo "\n";
		}
		else
		{
			for ($j = 0; $j <= $i; ++$j)
			{
				if ($j == $i)
				{
					echo 'and ';
					echo $gave_to_me[$i - $j] . ".\n";
				}
				else
				{
					echo $gave_to_me[$i - $j] . "\n";
				}
			}

			echo "\n";
		}
	}
}

?>
