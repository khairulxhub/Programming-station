<?php
class Student {
    public $id;
    public $name;
    public $batch;

    public function __construct($id, $name, $batch) {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }

    public function saveToCSV($file = 'students.csv') {
        $fp = fopen($file, 'a'); 
        fputcsv($fp, [$this->id, $this->name, $this->batch]); 
        fclose($fp);
    }

    public static function getAll($file = 'students.csv') {
        $students = [];

        if (file_exists($file)) {
            $fp = fopen($file, 'r');

            while (($row = fgetcsv($fp)) !== false) {
                $students[] = new Student($row[0], $row[1], $row[2]);
            }

            fclose($fp);
        }

        return $students;
    }

    public static function findByID($id, $file = 'students.csv') {
        if (file_exists($file)) {
            $fp = fopen($file, 'r');

            while (($row = fgetcsv($fp)) !== false) {
                if ($row[0] == $id) {
                    fclose($fp); 
                    return new Student($row[0], $row[1], $row[2]);
                }
            }

            fclose($fp);
        }

        return null;
    }
}
?>