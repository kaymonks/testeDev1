<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>'Admin',
            'login'=>'admin',
            'password'=>bcrypt('123456')
        ];
        if (User::where('login', '=' , $dados['login'])->count()) {
            $usuario = User::where('login', '=' , $dados['login'])->first();
            $usuario->update($dados);
            echo "usuario alterado";
        }else{
            User::create($dados);
            echo "usuario criado";
        }
    }
}
