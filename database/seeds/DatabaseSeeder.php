<?php

use Illuminate\Database\Seeder;

// use DB;
use App\Table;
use App\Field;
use App\Project;
use App\Database;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //new
      echo "/new seed/";
      $this->command->info('OLD');
      $old = Database::create([
        'driver'=>'mysql',
        'name'=>env('DB_DATABASE_OLD', 'forge'),
        'host'=>env('DB_HOST_OLD', '127.0.0.1'),
        'port'=>env('DB_PORT_OLD', '3306'),
        'username'=>env('DB_USERNAME_OLD', 'forge'),
        'password'=>env('DB_PASSWORD_OLD', ''),
      ]);

      //var_dump($old['attributes']);

      //old
      echo "/old seed/";
      $this->command->info('NEW');
      $new = Database::create([
        'driver'=>'mysql',
        'name'=>env('DB_DATABASE_NEW', 'forge'),
        'host'=>env('DB_HOST_NEW', '127.0.0.1'),
        'port'=>env('DB_PORT_NEW', '3306'),
        'username'=>env('DB_USERNAME_NEW', 'forge'),
        'password'=>env('DB_PASSWORD_NEW', ''),
      ]);
      //var_dump($new['attributes']);

      echo "/project seed/";
      Project::create([
        'name'=>'playologie',
        'old_database_id'=>$old->id,
        'new_database_id'=>$new->id,
      ]);

      // dd('=>',[
      //   'name'=>'playologie',
      //   'old_database_id'=>$old->id,
      //   'new_database_id'=>$new->id,
      // ] );







      $oldDatabaseConnection = new Organit\DatabaseConnection([
          'driver'   => 'mysql',
          'database' => env('DB_DATABASE_OLD'),
          'username' => env('DB_USERNAME_OLD'),
          'password' => env('DB_PASSWORD_OLD'),
      ]);

      $newDatabaseConnection = new Organit\DatabaseConnection([
          'driver'   => 'mysql',
          'database' => env('DB_DATABASE_NEW'),
          'username' => env('DB_USERNAME_NEW'),
          'password' => env('DB_PASSWORD_NEW'),
      ]);
      //
      // dd('$otf',$otf->getConnection()->getSchemaBuilder()->getColumnListing('users'));
      //
      //
      // dd('$otf',$otf->getTable('users')->get());
      // dd('$otf',$otf->getTable('users')->first());
      // dd('__HERE__');








        $schema = $oldDatabaseConnection->getConnection()->getDoctrineSchemaManager();
        $tables = $schema->listTables();


        // echo "/project seed/";

        foreach ($tables as $table) {
          echo($table->getName().'/' );
          $createdTable = Table::create([
            'database_id'=>$old->id,
            'name'=>$table->getName(),
            'is_old'=>1,
            'is_new'=>0,
          ]);

           foreach ($table->getColumns() as $column) {

              $createdTable->fields()->create([
                'type'=>$column->getType()->getName(),
                'name'=>$column->getName()
              ]);

            }

        }




        $schema = $newDatabaseConnection->getConnection()->getDoctrineSchemaManager();
        $tables = $schema->listTables();

        $tablesToIgnore = [(new Field)->getTable(), (new Table)->getTable()];

        foreach ($tables as $table) {

          if (in_array($table->getName(), $tablesToIgnore)) { continue; }
          echo($table->getName().'/' );
          $createdTable = Table::create([
            'name'=>$table->getName(),
            'database_id'=>$new->id,
            'is_old'=>0,
            'is_new'=>1,
          ]);

           foreach ($table->getColumns() as $column) {

              $createdTable->fields()->create([
                'type'=>$column->getType()->getName(),
                'name'=>$column->getName()
              ]);

            }

        }
    }
}
