<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Cena',
            'age' => '18',
            'email' => 'john@cena.eu',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'role' => 'writter',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Cyprian Bell',
            'age' => '35',
            'email' => 'cyprian@bell.eu',
            'role' => 'writter',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'telephone' => '345094185',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Andry Celly',
            'age' => '19',
            'email' => 'andry@celly.com',
            'role' => 'writter',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'telephone' => '573492183',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Eva Willen',
            'age' => '50',
            'email' => 'eva@willen.de',
            'role' => 'writter',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Kenny Roll',
            'age' => '33',
            'email' => 'kenny@roll.eu',
            'role' => 'writter',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'telephone' => '854029354',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Kamil Noul',
            'age' => '22',
            'email' => 'kamil@noul.com',
            'role' => 'writter',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'telephone' => '136358931',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Ricky Boa',
            'age' => '54',
            'email' => 'ricky@boa.eu',
            'role' => 'writter',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Adam Kowal',
            'age' => '29',
            'email' => 'adam@kowal.pl',
            'role' => 'reader',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'telephone' => '660390153',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Endy Armstrong',
            'age' => '44',
            'email' => 'endy@armstrong.ru',
            'about_me' => 'I am a student of the Jagiellonian University at the Faculty of Mathematics and Computer Science. I am interested in creating websites as well as programming desktop applications.',
            'telephone' => '999333444',
            'password' => Hash::make('password')
        ]);
    }
}
