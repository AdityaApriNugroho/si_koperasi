<?php
namespace App\Models;
use CodeIgniter\Model;
class SimpananWajib extends Model
{
    protected $table            = 'simpanan_wajib';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_anggota','jumlah'];
}