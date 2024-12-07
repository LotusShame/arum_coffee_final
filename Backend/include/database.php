<?php
require_once(LIB_PATH . DS . "config.php");

class Database {
    var $sql_string = '';
    var $error_no = 0;
    var $error_msg = '';
    private $conn;
    public $last_query;
    private $real_escape_string_exists;

    // Constructor untuk membuka koneksi database
    function __construct() {
        $this->open_connection();
        $this->real_escape_string_exists = function_exists("mysqli_real_escape_string");
    }

    // Membuka koneksi database
    public function open_connection() {
        $this->conn = mysqli_connect(server, user, pass, database_name);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());  // Perbaikan: Lebih spesifik pada error koneksi
        }
    }

    // Menetapkan query SQL
    function setQuery($sql = '') {
        $this->sql_string = $sql;
    }

    // Menjalankan query SQL
    function executeQuery() {
        $result = mysqli_query($this->conn, $this->sql_string);
        $this->confirm_query($result);  // Memastikan query berhasil
        return $result;
    }

    // Memastikan query berhasil dieksekusi
    private function confirm_query($result) {
        if (!$result) {
            $this->error_no = mysqli_errno($this->conn);
            $this->error_msg = mysqli_error($this->conn);
            die("Database query failed: " . $this->error_msg);  // Menambahkan die untuk menghentikan eksekusi jika query gagal
        }
        return $result;
    }

    // Mengambil semua hasil query sebagai array objek
    function loadResultList($key = '') {
        $cur = $this->executeQuery();

        $array = array();
        while ($row = mysqli_fetch_object($cur)) {
            if ($key) {
                $array[$row->$key] = $row;  // Menggunakan key jika diberikan
            } else {
                $array[] = $row;
            }
        }
        mysqli_free_result($cur);
        return $array;
    }

    // Mengambil satu hasil query sebagai objek
    function loadSingleResult() {
        $cur = $this->executeQuery();
        $data = null;  // Default nilai null untuk menghindari pengembalian tidak terduga

        while ($row = mysqli_fetch_object($cur)) {
            $data = $row;  // Mengembalikan baris pertama sebagai hasil
        }
        mysqli_free_result($cur);
        return $data;
    }

    // Mengambil daftar field dari tabel
    function getFieldsOnOneTable($tbl_name) {
        $this->setQuery("DESC " . $tbl_name);
        $rows = $this->loadResultList();

        $fields = array();
        foreach ($rows as $row) {
            $fields[] = $row->Field;
        }

        return $fields;
    }

    // Mengambil data sebagai array biasa
    public function fetch_array($result) {
        return mysqli_fetch_array($result);
    }

    // Menghitung jumlah baris hasil query
    public function num_rows($result_set) {
        return mysqli_num_rows($result_set);
    }

    // Mengambil ID yang terakhir dimasukkan ke tabel
    public function insert_id() {
        return mysqli_insert_id($this->conn);
    }

    // Menghitung jumlah baris yang terpengaruh oleh query
    public function affected_rows() {
        return mysqli_affected_rows($this->conn);
    }

    // Mengamankan nilai agar aman untuk digunakan dalam query
    public function escape_value($value) {
        if ($this->real_escape_string_exists) {
            $value = mysqli_real_escape_string($this->conn, $value);
        } else {
            // Jika mysqli_real_escape_string tidak ada, gunakan addslashes (bukan solusi ideal)
            $value = addslashes($value);
        }
        return $value;
    }

    // Menutup koneksi ke database
    public function close_connection() {
        if (isset($this->conn)) {
            mysqli_close($this->conn);
            unset($this->conn);
        }
    }
}

// Membuat objek database
$mydb = new Database();
?>
