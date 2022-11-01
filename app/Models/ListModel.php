<?php
namespace App\Models;
use CodeIgniter\Model;
class ListModel extends Model
{
    protected $table            = 'todo_list';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [];
}