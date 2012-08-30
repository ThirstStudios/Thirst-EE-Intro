Thirst-EE-Intro
===============
When it comes to building websites, the handover to the client can sometimes be the hardest part, as there is no guarantee that they have had experience with the platform their new site is built on. Our aim, always, is to educate the client enough that they can use their site confidently and get the most out of it without having issues every time they need to complete a minor task. On top of that, not all sites are the same, we often include custom features and generic documentation just doesn’t cut it for these. So we’ve come up with a unique solution that lets us write documentation that can be as tailored or generic as we like and include it as a mini FAQ in the expressionengine control panel, thus answering the majority of questions in the context of the control panel.

We’ve released this accessory to anyone who wants to use/contribute to it.

##Installation:

1. Download and extract the ‘thirst_ee_intro’ folder
2. Place ‘thirst_ee_intro’ into ‘system/expressionengine/third_party’
3. Log into your expressionengine back end, navigate to Add-Ons > Accessories and click the install link next to  ‘Getting started’.

######Tested in EE 2.5 but should work in EE 2+

##Customisation:


Thirst EE Intro behaves like a fully featured website, it has its own javascript and css as well as  a folder for each of the help areas.

The file structure is as follows:

thirst_ee_intro:

- areas/
- css/
- images/
- javascript/
- config.php


###Config.php


The config file lets you define a number of options that can be changed per project.
The options are:

	show_support : Whether or not to show support details
	support_email : The email address you would like clients to contact you on
	support_phone : The phone number you would like clients to contact you on
	support_business : The name of your business

	show_links : Whether or not to show the “Useful links” section
	useful_links (array) : A key/value array of useful links. The key is the resource name, the value it’s URL
	
	images_path : The path of your images folder.

###Help areas


Any files added into the “areas” folder will be read in and added to the Getting Started menu. To prescribe the order in which pages will show, just number them in the order you want.

eg.

- 01-add_an_entry.html
- 02-edit_an_entry.html

###Hiding draft content

You may use an ‘_’ or ‘.’ before a filename to hide it from the menu. This is great if you want to keep all of your documentation in the one place and selectively show/hide certain files.

###Content formatting

Content is formatted in HTML with one special tag, {{IMAGE_PATH}} that lets you customise the location of your images folder (see config.php). 

We have provided a template (in ‘areas/_template.html’) that will make it easier to build each content area. Only the areas in capital letters should be changed and the attribute ‘data-target’ on the first anchor and ID on the  first div should be the same.

eg.

	<a class="btn" href="#" data-target="#modal-name" data-toggle="modal">AREA NAME</a> 
	<div class="modal hide" id="modal-name" style="display:none">

###CSS / Javascript

We have included the ‘Modal’ module from [twitter’s bootstrap](http://twitter.github.com/bootstrap/javascript.html#modals) as well as its CSS to make things a little bit easier. Both the ‘css/style.css’ and ‘javascript/script.js’ are included by default so feel free to add in any extra interaction.