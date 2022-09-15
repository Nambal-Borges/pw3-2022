

Este é um bloco onde faço anotações para compreendimento mais efetivo das aulas.




executa no larevel - laravel sail, primeiro link

ficar de olho na versão


gedit doker-cmpose.yml                                                      8.1


in


wsl


route ressource no site do laravel











//sail artisan migrate



//sail artisan make:model Subcategoria -m -c --resource  - para criar todo conjunto (model, migration, controller)
//sail artisan migrate - para rodar todos arquivos dentro de migrations (criar tabelas)


a migration serve para rodas os códigos escritos nas migrations.

no model eu crio as colunas das tabelas

//sail artisan tinker                 >>> \App\Models\Subcategoria::create(['nome' => 'Monitor', 'categoria_id' => 2]);  (este comando testa a criação dos atributos na tabela)

