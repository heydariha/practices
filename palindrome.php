<?php 

class Palindrome {     

	public static function isPalindrome($word)
	{     
		$word	= strtolower($word);
		
		return ($word == strrev($word) ) ? true : false;
	}
	
} 
	
	
echo Palindrome::isPalindrome('Deleveled');