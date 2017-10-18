<?php


class FileOwners
{
    public static function groupByOwners($files)
    {
		$array	= array();
		foreach($files AS $file=>$owner)
			$array[$owner][]	= $file;
		return $array;
    }
}


$files = array(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

var_dump(FileOwners::groupByOwners($files));