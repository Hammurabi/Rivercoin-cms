<?php
    class plugin{
        static $STEP_INITIAL        = 0;
        static $STEP_HEAD           = 1;
        static $STEP_BODY_MENU      = 2;
        static $STEP_BODY_CONTENT   = 3;
        static $STEP_BODY_FOOTER    = 4;

        public function execute($step)
        {
            switch($step)
            {
                case $STEP_INITIAL:
                break;
                case $STEP_HEAD:
                break;
                case $STEP_BODY_MENU:
                break;
                case $STEP_BODY_CONTENT:
                break;
                case $STEP_BODY_FOOTER:
                break;
            }
        }
    }

    class webpage{
        private $data;
        private $custom_menu;

        public function __construct($name)
        {
            $this->$data = file_get_contents("raw/page-content/" . $name . '.html');
        }

        public function loadContent()
        {
            $pattern = "/<section class='content'>(.*?)<\/section>/";
            preg_match_all($pattern, $string, $matches);
            
            echo($matches[0]);
        }
    }

    include_once 'plugin_loader.php';

    $pagenme = 'index';
    $display = new webpage($pagenme);
?>