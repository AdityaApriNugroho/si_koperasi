<?php
namespace App\Models;
use CodeIgniter\Model;
class Pegawai extends Model
{
    protected $table            = 'pegawai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nik','nama','alamat','nohp'];
}