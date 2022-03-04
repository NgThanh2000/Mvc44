<?php
    interface interfaceView{
        public function get();
        public function insert($values);
        public function select($id);
        public function update($values,$id);
        public function delete($id);
    }
?>