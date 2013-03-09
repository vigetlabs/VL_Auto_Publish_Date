<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------
 
/**
 * VL Auto Publish Date Accessory
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Accessory
 * @author		Trevor Davis
 * @link		http://viget.com
 */
 
class Vl_auto_publish_date_acc {
	
	public $name			= 'VL Auto Publish Date';
	public $id				= 'vl_auto_publish_date';
	public $version			= '1.0';
	public $description		= 'Automatically set the publish date';
	public $sections		= array();
	
	/**
	 * Set Sections
	 */
	public function set_sections()
	{
		$EE =& get_instance();
		$theme_folder_url = defined('URL_THIRD_THEMES') ? URL_THIRD_THEMES : $this->EE->config->slash_item('theme_folder_url').'third_party/';

		if($EE->input->get('C') === 'content_publish' && $EE->input->get('M') === 'entry_form') {
			$EE->cp->add_to_head('<script type="text/javascript" src="'. $theme_folder_url . $this->id . '/scripts/' . $this->id .'.min.js"></script>');
		}
		
	}
	
	// ----------------------------------------------------------------
	
}
 
/* End of file acc.vl_auto_publish_date.php */
/* Location: /system/expressionengine/third_party/vl_auto_publish_date/acc.vl_auto_publish_date.php */