<?php

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Strona Główna',
			'menu_title'	=> 'Strona Główna',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Dane kontaktowe',
			'menu_title'	=> 'Dane kontaktowe',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Zespół',
			'menu_title'	=> 'Zespół',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Slajdy',
			'menu_title'	=> 'Slajdy',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}

?>