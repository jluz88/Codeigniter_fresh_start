<?php

function pr($string)
{
	echo '<pre>';
	print_r($string);
	echo '</pre>';
}

function prd($string)
{
	echo '<pre>';
	var_dump($string);
	echo '</pre>';
}

function pre($string)
{
	echo '<pre>';
	print_r($string);
	echo '</pre>';
	exit;
}

function prde($string)
{
	echo '<pre>';
	var_dump($string);
	echo '</pre>';
	exit;
}
    