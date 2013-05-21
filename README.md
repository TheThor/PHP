PHP
===

PHP - Translate Websites by HTTP header using arrays, $_SESSION AND $_SERVER

1. Introduction

This readme will be short but since it's my first piece of code in Github. The purpose is to help someone who's studying or that doesn't quite see how to do this in a simple way.

This is a short example of how you can make a very little CMS where you translate your whole website while still keeping it very simple to manage it's text content. I didn't use anything like XML or JSON to keep things simple to anyone who wants to understand it. You should start from this and then find a way to improve it with external files.

2. Code

In this example you can see how I made an array in lang.php. You can create the arrays you want and name them how you want them. For example, you can create a $menu where you will put the 'home' with value 'home' for en, 'casa' for pt, 'haus'(?) in german. You would do the same for contacts, and other items you have in the menu. That way you get:

  $menu['home']='home' 	for en
	$menu['home']='casa'  for pt
	etc.

Another important thing is that I give you an example if you want to make a website for the en language and your home language. That happens a lot for local business websites for example, where you have your local language and you want it to have a more common language like english.

Now for the index.php. As you can see I'm assigning a value to $language of a string. The substr() function allows you to cut the piece you want from a string. The $_SERVER['HTTP_ACCEPT_LANGUAGE'] is the array you ant to manipulate as it gives you the information on the browser header. If you try to print the whole thing you will get something like

	 "pt-PT,pt;q=0.8,en-US;q=0.6,en;q=0.41". 

As you can see you only need the first two letters or the first four if you need to be precise. Imagine this. I may need to make a portuguese website but there's also the pt-BR and I might want to make a pt-PT and pt-BR website. Take this into consideration but let's keep it simple and continue.
Now notice what I said about substr(). It needs 3 parameters. substr(string, value int inicial, value int final) where string is the string you want to cut, inicial is the value you want to start, and final is the last position on the array.
Imagine this:

	      pt-PT,pt;q=0.8,en-US;q=0.6,en;q=0.41 
			            and this
	      substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 5);
        
And the output:
		 	              "PT,pt"
                     
What you see is that starting on position 3 you want those 5 positions counting from 3.


Okay, now the magic happens in the if statement or in a switch. I have both so you can use them how you want to. You just get those first 2 or first 5 chars from the $_SERVER string and save them into a variable.

Now that you have this values you need to store them into a SUPERGLOBAL VARIABLE. This is where session starts. If you're not familiar with session I would recommend reading a bit on the PHP reference as it's very easy to use.
Anyway this you allow you to save whatever you want in a variable and use it for other .php pages in that session. Once done you use that value to select the language to the website in the lang.php

