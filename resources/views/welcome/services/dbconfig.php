<?php
    date_default_timezone_set('Asia/Jakarta');
    class dbconfig {
        //buat variabel koneksi dg database mysql
        public $conn;
        private $namaserver = "localhost";
        private $namauser = "root";
        private $passuser = "";
        private $namaDB = "test";
        private $sqlquery;
        private $dataset;
        //
        function __construct()
        {
            $this->bukaKoneksi();
        }
        //untuk membuat koneksi dengan database db_perusahaan utk sebarang tabel
        function bukaKoneksi() 
        {
            $this->conn = mysqli_connect($this->namaserver, $this->namauser, $this->passuser, $this->namaDB);
            if (!$this->conn) 
            {
                die("Connection Failed!");
            }
            return $this->conn;
        }
        function bacaTabelAll($namatabel) 
        {
            $this->sqlquery = 'SELECT * FROM '. $namatabel .' ORDER BY id ASC';
            $this->dataset = mysqli_query($this->conn, $this->sqlquery);
            return $this->dataset;
        }
        //
        function bacaTabelWhere($namatabel, $namakolom, $operator, $tipedata)
        {
            $this->sqlquery = ''. $namatabel .'';
        }

    }
