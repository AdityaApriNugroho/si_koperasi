<?php
namespace App\Models;
use CodeIgniter\Model;
class SimpananSukarela extends Model
{
    protected $table            = 'simpanan_sukarela';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_anggota','jumlah'];
}