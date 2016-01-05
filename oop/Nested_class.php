<?php

class DB {
    public function comments() {
        // do preparations that make the object select the "comments"-table...
        return $this;
    }

    public function id($string) {
        // handle this too...
        return $this;
    }

    public function limit($int) {
        // also this
        return $this;
    }

    public function execute() {
//        $success = try_to_execute_accumulated_db_commands();
        $success = 'success';
        return $success;
    }
}

$DB = new DB();

echo  $DB->comments()->limit(1)->execute();