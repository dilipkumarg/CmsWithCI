<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dilip Kumar
 * Date: 17/8/13
 * Time: 3:20 PM
 * To change this template use File | Settings | File Templates.
 */
class Page extends Frontend_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('page_m');
    }
 }