<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class AddAdminUser extends Migration
{
    public function up()
    {
        User::create([
            'name' => 'UTS-ADNAN', // Mengubah nama pengguna menjadi 'UTS-ADNAN'
            'email' => 'adnan@example.com', // Ubah email jika diperlukan
            'password' => bcrypt('12345'), // Mengubah password menjadi '12345'
        ]);
    }

    public function down()
    {
        User::where('email', 'adnan@example.com')->delete(); // Menghapus pengguna berdasarkan email yang sama
    }
}
