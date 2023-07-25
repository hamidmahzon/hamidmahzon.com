<?php 
namespace App\Models; 
use CodeIgniter\Model;

class NoteModel extends Model 
{ 
   protected $table = 'notes'; 
   protected $primaryKey = 'id'; 
   protected $returnType = 'array'; 
   protected $allowedFields = ['id','created_at','namep', 'namee','notee','notep']; 
   protected $useTimestamps = false; 
   protected $validationRules = []; 
   protected $validationMessages = []; 
   protected $skipValidation = false; 
}