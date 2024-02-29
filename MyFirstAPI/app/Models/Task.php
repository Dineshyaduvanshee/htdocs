<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Task extends Model
{
    use HasFactory;
    protected $table = 'tasklogin';
    protected $fillable = [
        'username',
        'password',
    ];
    public function updateTaskLogin($data)
    {
        return $this->update($data);
    }
}
