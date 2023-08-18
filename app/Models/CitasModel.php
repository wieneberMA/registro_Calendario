<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class CitasModel extends Model{ 
        protected $table = 'citas';
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $allowedFields = ["start_date","end_date","text","details","calendar"];
    }