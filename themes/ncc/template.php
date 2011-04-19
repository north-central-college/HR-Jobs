<?php
// $Id: template.php,v 1.17.2.1 2009/02/13 06:47:44 johnalbin Exp $

/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to STARTERKIT_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: STARTERKIT_breadcrumb()
 *
 *   where STARTERKIT is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/*
 * Add any conditional stylesheets you will need for this sub-theme.
 *
 * To add stylesheets that ALWAYS need to be included, you should add them to
 * your .info file instead. Only use this section if you are including
 * stylesheets based on certain conditions.
 */
/* -- Delete this line if you want to use and modify this code
// Example: optionally add a fixed width CSS file.
if (theme_get_setting('ncc_fixed')) {
  drupal_add_css(path_to_theme() . '/layout-fixed.css', 'theme', 'all');
}
// */


function phptemplate_preprocess_page(&$vars) {
//if (arg(0) == 'user' && (arg(1) == 'register' || arg(1) == 'password')) {
	//print "<pre>";
	//print_r($vars['node']->taxonomy);
	//print_r($vars['node']->type);
	//print "</pre>";
	if ($vars['node']->type == 'pride_news'){
		$vars['template_files'][] = 'page-pride';
	} else if ($vars['node']->type == 'forwarding_page') {
		$vars['template_files'][] = 'page-forward';
	} else if ($vars['node']->type == 'cardinalnet_main' || $vars['node']->type == 'cardinalnet_cac') {
		$vars['template_files'][] = 'page-cardinalnet';
	}
}


/**
 * WebForm Email Header to HTML
 */
function phptemplate_webform_mail_headers($form_values, $node, $sid, $cid) {
  $headers = array(
    'Content-Type'  => 'text/html; charset=UTF-8; format=flowed; delsp=yes',
    'X-Mailer'      => 'Drupal Webform (PHP/'. phpversion() .')',
  );
  return $headers;
}
/**
 * Implementation of HOOK_theme().
 */
function ncc_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  $hooks['user_login_block'] = array('arguments' => array('form' => NULL));
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

/**
* Theme override for user login block.
*
* The function is named themename_formid.
*/
function ncc_user_login_block($form) {
  $form['name']['#title'] = t('Username'); //wrap any text in a t function
  $form['pass']['#title'] = t('Password'); 
  $form['pass']['#suffix'] = t('<em>Enter your North Central College username and password above.</em>');
  unset($form['links']['#value']); //remove links under fields
  return (drupal_render($form));
}

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function ncc_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function ncc_preprocess_page(&$vars, $hook) {
  //print_r($vars);
  $vars['sample_variable'] = t('em ipsum.');
  $term = taxonomy_get_term(arg(0));
  $vars['taxonomy_term_description'] = filter_xss_admin($term->name);
  
  //Homepage
  if ($vars['is_front']) {
	
  	//This is loading the main_page called homepage or nodeid=216
	// It has some homepage content and contains:
	// 		* video, video title, video description
	//		* footer links.
	$homepagenode = node_load("3229");
	$vars['homepagenode'] = $homepagenode; 	
  	
  	//Get Homepage News
  	$vars['news_listing'] = views_embed_view('news_listing_homepage', 'block_1', 1981);
	$vars['more_news_link'] = "/news/1981"; // homepage tag taxonomy id
	$vars['more_news_text'] = $news_view->display['default']->display_options['use_more_text'];
	
	//Get Homepage Buttons
	$vars['button_listing'] = views_embed_view('main_button_list', 'block_1', 1981);
	
	//Get Homepage Slideshow
	$vars['slideshow'] = views_embed_view('slideshow', 'block_1');
	
	//Get Homepage Events
	$remoteResponse = drupal_http_request("http://calendar.northcentralcollege.edu/feed/jsonfeed.php?calname=spotlight");
	$data = json_decode($remoteResponse->data);
	$vars['event_data'] = $data;
  }

  

}

/* 
 * this page_front doesent work
function ncc_preprocess_page_front(&$vars, $hook) {
  $vars['sample_variable_front'] = t('yessssample_variableLorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function ncc_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
  if ($vars['type'] == 'degreeprogram') {
  	$vars['sample_degreeprogram_variable'] = 'hello world';
  	
  		//get nodes taxonomy
  		$taxonomy = $vars['node']->taxonomy;
		$tax = array();
		foreach($taxonomy as $key => $taxvalue) {
			$tax[] = $key;
		}
		//$vars['body_text'] = $vars['node']->content['body']['#value'];
		//get news view
		$news_view = views_get_view('news_listing');
		$vars['news_listing'] = views_embed_view('news_listing', 'block_1', $tax[0]);
		$vars['more_news_link'] = "/news/$tax[0]";
		$vars['more_news_text'] = $news_view->display['default']->display_options['use_more_text'];
  		//dsm($news_view);
		//get student feature view
		$student_feature_view = views_get_view('student_feature');
  		//dsm($student_feature_view);
		$vars['student_feature_view'] = views_embed_view('student_feature', 'block_1', $tax[0]);

  }
  else if (substr($vars['type'], 0, 7) == 'webpage') {
    //get nodes taxonomy
 
  	//NEW NAVIGATION
    if (array_key_exists('field_show_parent_nav',$vars) && $vars['field_show_parent_nav'][0]['value'] == 'display'){
    	//dsm($vars['node']); 
    	if (array_key_exists('field_parentpage',$vars) && $vars['field_parentpage'][0]['nid'] != NULL) {
    	    $parentNavNid = intval($vars['field_parentpage'][0]['nid']);
    		$vars['main_section_links'] = views_embed_view('relevant_links', 'block_1', $parentNavNid);
    		$vars['main_section_links'] = str_replace($vars['title'], "<strong>".$vars['title']."</strong>", $vars['main_section_links']);
    		$vars['relevant_links_num_rows'] = $view->total_rows;
	  		$vars['relevant_links'] = views_embed_view('relevant_links', 'block_1', $vars['node']->nid);
	  		$vars['relevant_links'] = str_replace($vars['title'], "<strong>".$vars['title']."</strong>", $vars['relevant_links']);
	 
    	}
    	else {
	  		$vars['main_section_links'] = views_embed_view('relevant_links', 'block_1', $vars['node']->nid);
			//$vars['relevant_links_num_rows'] = $view->total_rows;    		
    	}

    }
    //OLD NAVIGATION
    else {
    	//print "hide nav";
    
	  	$taxonomy = $vars['node']->taxonomy;
		$tax = array();
		foreach($taxonomy as $key => $taxvalue) {
			$tax[] = $key;
		}
		//grab the first tag
		$currentTag = $tax[0];
		$parentNavigationFound = false;
		$mainPageNavFound = false;
	  	while ($currentTag != 0 && !$mainPageNavFound){
	  			//print $currentTag . "<BR>";
				$query = "SELECT parent FROM {term_hierarchy} WHERE tid=%d;";
				$parentTag = db_result(db_query($query,$currentTag));
				$query = "  SELECT n.nid, n.title, n.type 
							FROM {node} n
							INNER JOIN {term_node} tn ON tn.nid = n.nid
							WHERE tn.tid = %d 
							AND n.type IN ('main_page', 'main_page_plain') ";	
								
				$result = db_fetch_array(db_query($query, $currentTag));
				
				if ($result) {
					$mainPageNodeId = $result['nid'];
					$vars['main_section_title'] = $result['title'];
					$vars['main_section_nid'] = $result['nid'];
					$mainPageNavFound = true;
				} else {
					$currentTag = $parentTag;				
				}
		}	
	  	$vars['relevant_links_num_rows'] = $view->total_rows;
		
		
	  	$vars['relevant_links'] = views_embed_view('relevant_links', 'block_1', $vars['node']->nid);
	  	$vars['relevant_links'] = str_replace($vars['title'], "<strong>".$vars['title']."</strong>", $vars['relevant_links']);
	  
	  	if ($mainPageNavFound) {
	  		//If a parent main page with nav was found, get the nav and set template variable
	  		$vars['main_section_links'] = views_embed_view('relevant_links', 'block_1', $mainPageNodeId);
	  		//Bold the current page in the nav if it exists
	  		$vars['main_section_links'] = str_replace($vars['title'], "<strong>".$vars['title']."</strong>", $vars['main_section_links']);
	  	}
  	}
  }
// Gets upperlevel nav, not currentlevel	
/*	while ($currentTag != 0 && !$mainPageNavFound){
			$query = "SELECT parent FROM {term_hierarchy} WHERE tid=%d;";
			$parentTag = db_result(db_query($query,$currentTag));
			$query = "  SELECT n.nid, n.title, n.type FROM {node} n
						LEFT JOIN {term_node} tn ON tn.nid = n.nid
						WHERE n.type = 'main_page'
						AND tn.tid = %d ";
			$result = db_fetch_array(db_query($query, $parentTag));
			
			if ($result) {
				$mainPageNodeId = $result['nid'];
				$vars['main_section_title'] = $result['title'];
				$vars['main_section_nid'] = $result['nid'];
				$mainPageNavFound = true;
			} else {
				$currentTag = $parentTag;				
			}
	}
*/
	
	
	//Exit while loop with either:
	// ($mainPageNodeId and $mainPageNavFound = true) or $mainPageNavFound = false
	//$view = views_get_view('relevant_links');
	// $view->get_total_rows = true;
	//$view->set_arguments(array($vars['node']->nid));
    //$view->set_display('block_1');
    //$output = $view->preview();
	//$output = $view->execute_display();    
    //$view->execute();
    //$view = views_get_view($viewName);
	//$view->get_total_rows = true;
	//$view->set_display($display_id);

	//$total = $view->total_rows;
    
//$viewName = 'relevant_links';
//$display_id = 'default';

//$view = views_get_view($viewName);
//$view->get_total_rows = true;
//$view->set_display($display_id);
//$view->set_arguments(array($vars['node']->nid));
//$view->execute($display_id);
//$total = $view->total_rows;
//print 'total='.$total;

//print_r( $output);    
   //exit;
    
    
	// At least in $view->result is the result.
	//print_r($view->result);
	//print "<hr>";
	//print "totoal row:".$total;
	//print $output;
	//exit;
	
	//if ($view->result) {
	//  return $output;
	//}
	
	//print "<pre>";
	//print_r($view);
	//exit;

  
  else if ($vars['type'] == 'main_page' || $vars['type'] == 'main_page_plain') {
  	
  	//Default Views Embed Code
	/*
	$view = views_get_view('view-name'); //machine readable name of your view
	$myargs = array();
	$display = $view->execute_display('block_1', $myargs);
	print $display['content'];
	*/
	
  	
  	//print "taxonomy info:<pre>";
	//dsm( $node->taxonomy);//->name;
	
  	//$tax = $node->taxonomy;
	//foreach($tax as $tag){
		//print $tag->name;
		//print "<br>";
		//print $tag->tid;
	//}
	//print "</pre><hr>";
	
	$view = views_get_view('sub_menu'); //machine readable name of your view
	$myargs = array();
	$myargs[] = $tag->tid;
	$display = $view->execute_display('block_1',$myargs);
	//dsm($display);
	//print $display['content'];
	
	$vars['body_text'] = $vars['node']->content['body']['#value'];
	$vars['relevant_links'] = views_embed_view('relevant_links', 'block_1', $vars['node']->nid);
	if (array_key_exists('field_show_parent_nav',$vars) && $vars['field_show_parent_nav'][0]['value'] == 'display'){
    	//dsm($vars['node']);
		if (array_key_exists('field_parentpage',$vars) && $vars['field_parentpage'][0]['nid'] != NULL) {
		    $parentNavNid = intval($vars['field_parentpage'][0]['nid']);
			$vars['main_section_links'] = views_embed_view('relevant_links', 'block_1', $parentNavNid);
			$vars['main_section_links'] = str_replace($vars['title'], "<strong>".$vars['title']."</strong>", $vars['main_section_links']);
			$vars['relevant_links_num_rows'] = $view->total_rows;
			$vars['relevant_links'] = views_embed_view('relevant_links', 'block_1', $vars['node']->nid);
			$vars['relevant_links'] = str_replace($vars['title'], "<strong>".$vars['title']."</strong>", $vars['relevant_links']);
		 
		}
	} 
	$vars['unknown_links'] = $display;
	
	  		//get nodes taxonomy
  		$taxonomy = $vars['node']->taxonomy;
		$tax = array();
		foreach($taxonomy as $key => $taxvalue) {
			$tax[] = $key;
		}
		//$vars['body_text'] = $vars['node']->content['body']['#value'];
		//get news view
		$news_view = views_get_view('news_listing');
		$vars['news_listing'] = views_embed_view('news_listing', 'block_1', $tax[0]);
		$vars['more_news_link'] = "/news/$tax[0]";
		$vars['more_news_text'] = $news_view->display['default']->display_options['use_more_text'];
	
		$vars['button_listing'] = views_embed_view('main_button_list', 'block_1', $tax[0]);
		
  	/* Get Events */
		
	//get taxonomy name
	$query = "SELECT name FROM {term_data} WHERE tid=%d;";
	$taxonomy_name = urlencode(db_result(db_query($query,$tax[0])));	
	$vars['calendarName'] = $taxonomy_name;	

	$remoteResponse = drupal_http_request("http://calendar.northcentralcollege.edu/feed/jsonfeed.php?calname=$taxonomy_name");
	$data = json_decode($remoteResponse->data);
	$vars['event_data'] = $data;
  }
  else if($vars['type'] == 'generalsleeve'){
 	//get nodes taxonomy
  	$taxonomy = $vars['node']->taxonomy;
	$tax = array();
	foreach($taxonomy as $key => $taxvalue) {
		$tax[] = $key;
	}
	//get news view
	$news_view = views_get_view('news_listing');
	$vars['news_listing'] = views_embed_view('news_listing', 'block_1', $tax[0]);
	$vars['more_news_link'] = "/news/$tax[0]";
	$vars['more_news_text'] = $news_view->display['default']->display_options['use_more_text'];

	//$rand = array_rand($field_related_profiles);
	//$nid = $field_related_profiles[$rand]['nid'];
	// Render the view.
	//$vars['gf'] = views_embed_view('general_feature', 'block_1');
	//Reload the javascript into the scripts.
	//$vars['scripts'] = drupal_get_js();
  }
}

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function ncc_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function ncc_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */
