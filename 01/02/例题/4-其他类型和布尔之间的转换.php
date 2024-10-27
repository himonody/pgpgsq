<?php
var_dump((bool)'abc');	echo '<br>';		//bool(true)  
var_dump((bool)'');		echo '<br>';		//bool(false) 
var_dump((bool)'0');	echo '<br>';		//bool(false) 
var_dump((bool)'0.0');	echo '<br>';		//bool(true) 
var_dump((bool)'00');	echo '<br>';		//bool(true) 
var_dump((bool)'false');	echo '<br>';	//bool(true) 
var_dump((bool)'null');	echo '<br>';		//bool(true) 
var_dump((bool)1);		echo '<br>';		//bool(true) 
var_dump((bool)0);		echo '<br>';		//bool(false) 
var_dump((bool)-10);		echo '<br>';	//bool(true) 
var_dump((bool)0.0);		echo '<br>';	//bool(false) 
var_dump((bool)array());	echo '<br>';	//bool(false) 
var_dump((bool)array(1));	echo '<br>';	//bool(true) 
var_dump((bool)array(false));	echo '<br>';//bool(true) 
var_dump((bool)null);	echo '<br>';			//bool(false) 



