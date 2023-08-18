<?php
    namespace App\Models;

    use CodeIgniter\Model;
    
    class CalendarioModel extends Model{
        protected $table = "calendars";
        protected $primaryKey = "id";
        protected $useAutoIncrement = true;
        protected $allowedFields = ["text","color","active"];
    }
