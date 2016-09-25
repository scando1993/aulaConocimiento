// app/database/seeds/UserTableSeeder.php
<?php
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();
    
    User::create(array(
    	'name'     => 'admin1',
        'email'    => 'admin1@gmail.com',
        'password' => Hash::make('admin1'),
    ));
  }
}