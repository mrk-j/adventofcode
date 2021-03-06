<?php
$input = file_get_contents('input.txt');
$packages = explode("\n", $input);
$paper = 0;
$ribbon = 0;

foreach($packages as $package)
{
	$sizes = explode('x', $package);

	list($l, $w, $h) = $sizes;

	$sides = [
		$l * $w,
		$w * $h,
		$l * $h
	];

	$distance = [
		$l + $w,
		$w + $h,
		$l + $h
	];

	$paper += array_sum($sides) * 2 + min($sides);
	$ribbon += ($l * $w * $h) + min($distance) * 2;
}

echo 'The elves should order ' . $paper . ' square feet of wrapping paper' . PHP_EOL;
echo 'They should also order ' . $ribbon . ' feet of ribbon' . PHP_EOL;