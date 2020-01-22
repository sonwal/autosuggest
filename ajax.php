<?php
/*$array = array(
	"abc" => "Moto",
	"asd" =>"Nokia",
	"vvdf" =>"Samsung",
	"sdfsabc" =>"Apple",
	"wer" =>"Vivo",
	"nhf" =>"Oppp",
	"cvc" =>"Sony",
	"ert" =>"Xiaomi",
	"trhr" =>"Redmi"
);*/


$array =  array(
		array(
			"id" => "abc",
			"name" => "Moto"
		),
		array(
			"id" => "asd",
			"name" => "Nokia"
		),array(
			"id" => "vvdf",
			"name" => "Samsung"
		),array(
			"id" => "sdfsabc",
			"name" => "Apple"
		),array(
			"id" => "wer",
			"name" => "Vivo"
		),array(
			"id" => "nhf",
			"name" => "Oppp"
		),array(
			"id" => "cvc",
			"name" => "Sony"
		),array(
			"id" => "cvc",
			"name" => "Moto"
		),array(
			"id" => "ert",
			"name" => "Xiaomi"
		),array(
			"id" => "trhr",
			"name" => "Redmi"
		)
);
die(json_encode($array));
