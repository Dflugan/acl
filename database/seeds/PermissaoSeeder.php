<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios1 = Permissao::firstOrCreate([
            'nome' => 'usuario-view',
            'descricao' => 'Acesso a lista de Usuarios'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' => 'usuario-create',
            'descricao' => 'Adicionar Usuários'
        ]);
        $usuarios3 = Permissao::firstOrCreate([
            'nome' => 'usuario-edit',
            'descricao' => 'Editar Usuários'
        ]);
        $usuarios4 = Permissao::firstOrCreate([
            'nome' => 'usuario-delete',
            'descricao' => 'Feletar Usuários'
        ]);

        $papeis1 = Permissao::firstOrCreate([
            'nome' => 'papel-view',
            'descricao' => 'Listar Papéis'
        ]);
        $papeis2 = Permissao::firstOrCreate([
            'nome' => 'papel-create',
            'descricao' => 'Adicionar Papéis'
        ]);
        $papeis3 = Permissao::firstOrCreate([
            'nome' => 'papel-edit',
            'descricao' => 'Editar Papéis'
        ]);
        $papeis4 = Permissao::firstOrCreate([
            'nome' => 'papel-delete',
            'descricao' => 'Deleta papéis'
        ]);

        $favoritos1 = Permissao::firstOrCreate([
            'nome' => 'favoritos-view',
            'descricao' => 'Acesso aos Favoritos'
        ]);

        $perfil1 = Permissao::firstOrCreate([
            'nome' => 'perfil-view',
            'descricao' => 'Acesso ao Perfil'
        ]);

        $chamado1 = Permissao::firstOrCreate([
            'nome' => 'chamdo-view',
            'descricao' => 'Acesso aos Chamados'
        ]);
        $chamado2 = Permissao::firstOrCreate([
            'nome' => 'chamado-create',
            'descricao' => 'Adicionar Chamado'
        ]);
        $chamado3 = Permissao::firstOrCreate([
            'nome' => 'chamado-edit',
            'descricao' => 'Editar Chamado'
        ]);
        $chamado4 = Permissao::firstOrCreate([
            'nome' => 'chamado-delete',
            'descricao' => 'Deletar Chamado'
        ]);
        echo "Registros de permissoes criados com Sucesso";
    }
}
