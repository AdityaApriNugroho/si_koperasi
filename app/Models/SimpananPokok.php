<?php
namespace App\Models;
use CodeIgniter\Model;
class SimpananPokok extends Model
{
    protected $table            = 'simpanan_pokok';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_anggota','jumlah'];
}