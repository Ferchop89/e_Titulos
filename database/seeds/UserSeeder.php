<?php

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Usuario patrón
          $user= new User();
          $user->name = 'Administrador';
          $user->username = 'Administrador';
          $user->email = 'Admon@correo.com';
          $user->procedencia_id = '1';
          $user->password = bcrypt('111111');
          $user->is_active = true;
          $user->save();
          $role=Role::where('nombre','Admin')->first();
          $user->roles()->attach($role);

          $user = new User();
          $user->name = 'Lic. Diana González';
          $user->username = 'dianaG';
          $user->email = 'dgonzal@dgae.unam.mx';
          $user->procedencia_id = '1';
          $user->password = bcrypt('Un@mt7tul0');
          $user->is_active = true;
          $user->save();
          $role=Role::where('nombre','Jtit')->first();
          $user->roles()->attach($role);

          $user = new User();
          $user->name = 'M. en C. Ivonne Ramírez';
          $user->username = 'Directora';
          $user->email = 'iramirez@.dgae.unam.mx';
          $user->procedencia_id = '1';
          $user->password = bcrypt('Un@md7r3ct');
          $user->is_active = true;
          $user->save();
          $role=Role::where('nombre','Director')->first();
          $user->roles()->attach($role);

          $user = new User();
          $user->name = 'Dr. Leonardo Lomelí';
          $user->username = 'Secretario';
          $user->email = 'secretario@unam.com.mx';
          $user->procedencia_id = '1';
          $user->password = bcrypt('Un@ms3cr3t');
          $user->is_active = true;
          $user->save();
          $role=Role::where('nombre','SecGral')->first();
          $user->roles()->attach($role);

          $user = new User();
          $user->name = 'Dr. Enrique Graue';
          $user->username = 'Rector';
          $user->email = 'rector@unam.com.mx';
          $user->procedencia_id = '1';
          $user->password = bcrypt('Un@mr3ct0r');
          $user->is_active = true;
          $user->save();
          $role=Role::where('nombre','Rector')->first();
          $user->roles()->attach($role);
    }
}
