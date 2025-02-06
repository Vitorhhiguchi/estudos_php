<?php

// tipos de variaveis no PHP

//string - tudo que estiver entre '' ou ""
echo gettype("JDASJDIAWD12321312@#@#@");
echo '<br>';
// numbers - integers, float(double)
echo gettype(123);
echo '<br>';
echo gettype(123.123);
echo '<br>';

// boolean
echo gettype(true);
echo '<br>';

//arrays
echo gettype(['adasdawdaw', 123]);
echo '<br>';

// object
class Person 
{

}

echo gettype(new Person);
echo '<br>';

// null
echo gettype(null);
echo '<br>';