<?php
    class View{
        public static function createView($view, $param){
            foreach ($param as $key => $value) {
                $$key = $value;
            }

            ob_start();
            include 'view/'.$view;
            $content = ob_get_contents();
            ob_end_clean();

            ob_start();
            include 'view/layout/layout.php';
            $include = ob_get_contents();
            ob_end_clean();
            return $include;
        }

        public static function createViewAdmin($view, $param){
            foreach ($param as $key => $value) {
                $$key = $value;
            }

            ob_start();
            include 'view/'.$view;
            $content = ob_get_contents();
            ob_end_clean();

            ob_start();
            include 'view/layout/layoutAdmin.php';
            $include = ob_get_contents();
            ob_end_clean();
            return $include;
        }

        public static function createViewKasir($view, $param){
            foreach ($param as $key => $value) {
                $$key = $value;
            }

            ob_start();
            include 'view/'.$view;
            $content = ob_get_contents();
            ob_end_clean();

            ob_start();
            include 'view/layout/layoutKasir.php';
            $include = ob_get_contents();
            ob_end_clean();
            return $include;
        }
    }
?>