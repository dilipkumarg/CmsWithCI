<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dilip Kumar
 * Date: 17/8/13
 * Time: 2:14 PM
 * To change this template use File | Settings | File Templates.
 */
class MY_Controller extends CI_Controller {
    public $data = array();
    function __construct() {
        parent::__construct();
        $this->data['errors'] = array();
        $this->data['site_name'] = config_item('site_name');
    }
}