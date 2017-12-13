<?php
/**
 * Created by IntelliJ IDEA.
 * User: Arnab
 * Date: 12/13/2017
 * Time: 12:55 PM
 */

$graph = [];
$nodes = ['A', 'B', 'C', 'D', 'E'];
foreach ($nodes as $xNode) {
    foreach ($nodes as $yNode) {
        $graph[$xNode][$yNode] = 0;

    }
}

$graph["A"]["B"] = 1;
$graph["B"]["A"] = 1;
$graph["A"]["C"] = 1;
$graph["C"]["A"] = 1;
$graph["A"]["E"] = 1;
$graph["E"]["A"] = 1;
$graph["B"]["E"] = 1;
$graph["E"]["B"] = 1;
$graph["B"]["D"] = 1;
$graph["D"]["B"] = 1;

foreach ($nodes as $xNode) {
    foreach ($nodes as $yNode) {
        echo $graph[$xNode][$yNode] . "\t";
    }
    echo "\n";
}

//echo memory_get_usage();