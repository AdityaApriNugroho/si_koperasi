<?php
namespace App\Models;
use CodeIgniter\Model;
class Anggota extends Model
{
    protected $table            = 'anggota';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [];
}