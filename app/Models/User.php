<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'milo';
// column sa table
protected $fillable = [
'firstname', 'middlename', 'lastname'
];
}