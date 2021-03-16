
<?php

class StudentLoader extends student {
    public function showUserinfo($name) {
        $result = $this->getName($name);
        $connection = $this->openConnection()->query($sql);
    }
}