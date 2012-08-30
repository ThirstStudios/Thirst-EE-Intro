<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Thirst_ee_intro_acc 
	{
	    var $name       = 'Getting started';
	    var $id         = 'thirst_ee_intro';
	    var $version        = '1.0';
	    var $description    = 'An accessory to aid our clients in learning EE.';
	    var $sections       = array();

	    function __construct()
	    {
	        $this->EE =& get_instance();
	        $this->EE->cp->load_package_css('style');
	    }		


		/**
		 * Set Sections
		 *
		 * Set content for the accessory
		 *
		 * @access  public
		 * @return  void
		 */

		function set_sections()
		{	
			//Load in config variables that let us set useful links and contact details.
	        include(PATH_THIRD.'thirst_ee_intro/config.php');
	        
	        //Loads in help topics which are contained in the /areas directory. They will be loaded in the order they are in.
	        $areas = include(PATH_THIRD.'thirst_ee_intro/areas/index.php');
	        $areas_list = '';
	        for($i = 0; $i <= count($areas) - 2; $i++) {
				$areas_list .= '<li>'.$areas[$i].'</li>';
	        }
	        $this->sections['Getting Started'] = '<ul>'.$areas_list.'</ul>';

	        //Loads useful links as defined in the config file
	        $links_list = '';
	        foreach ($useful_links as $name => $link) {
	        	$links_list .= '<li><a href="'.$link.'" target="_blank">'.$name.'</a></li>';
	        }
					        
		    if($config['show_links']){
		    	$this->sections['Useful Links'] = '<ul>'.$links_list.'</ul>';
	        }	

	        //Loads support details as defined in the config file
		    if($config['show_support']){
		    	$this->sections['Need to drop us a line?'] = 
		    	'<ul>'.
		    	'<li>'.$config['support_business'].'</li>'.
		    	'<li><a href="mailto:'.$config['support_email'].'">'.$config['support_email'].'</a></li>'.
		    	'<li><a href="callto:'.$config['support_phone'].'">'.$config['support_phone'].'</a></li>'.
		    	'</ul>';
	        }        

	        //load scripts in last so they can pass over the dom properly
	        $this->EE->cp->load_package_js('modal');		    
	        $this->EE->cp->load_package_js('script');		    
		}    
	}

/* End of file acc.thirst_ee_intro.php */
/* Location: ./acc.thirst_ee_intro.php */	