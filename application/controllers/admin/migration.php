<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dilip Kumar
 * Date: 17/8/13
 * Time: 2:45 PM
 * To change this template use File | Settings | File Templates.
 */
class Migration extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('migration');
        //$this->migration->current();
        if (!$this->migration->current()) {
            show_error($this->migration->error_string());
        } else {
            echo "Migration Worked";
        }
    }
}