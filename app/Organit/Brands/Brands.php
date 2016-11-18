<?php
namespace Organit\Brands;

use Organit\Core;
use DB;
use Schema;
/**
 *
 */
class Brands extends Core
{

  protected $oldTableName="brands";
  protected $newTableName="brand";

  protected $oldTableFields;
  protected $newTableFields;



  function __construct()
  {
    //loop over old Table line
    $items = DB::connection('playologie')->select('select * from '.$this->oldTableName);

    //get newTableFieldsName;
    // $columns = Schema::getColumnListing($this->oldTableName);


    $this->oldTableFields = DB::connection('playologie')->getSchemaBuilder()->getColumnListing($this->oldTableName);
    $this->newTableFields = DB::connection('mysql')->getSchemaBuilder()->getColumnListing($this->newTableName);
    // $this->newTableFields =

    //
    // $columns = \DB::connection('playologie')->getSchemaBuilder()->getColumnListing("users");
    // $columns = \DB::connection('mysql')->getSchemaBuilder()->getColumnListing("user");



    $schema = \DB::connection('playologie')->getDoctrineSchemaManager();
    $tables = $schema->listTables();

    dd('$tables',$tables );



    ?>
    <div class="row">
      <div class="col-md-6">
        <h3>oldTableFields</h3>
        <pre><?php var_dump($this->oldTableFields)  ?></pre>
      </div>

      <div class="col-md-6">
        <h3>newTableFields</h3>
        <pre><?= var_dump($this->newTableFields) ?></pre>
      </div>
    </div>



    <div class="row">
      <div class="col-md-6">

        <h3>Diff</h3>
        <pre><?php var_dump(array_diff ( $this->oldTableFields , $this->newTableFields))  ?></pre>

      </div>
      <div class="col-md-6">

        <h3>Intersect</h3>
        <pre><?php var_dump(array_intersect ( $this->oldTableFields , $this->newTableFields))  ?></pre>

      </div>
    </div>



    <?php





  }



  public function handle()
  {
    //get OLD table brands
    $tasks = [
      // \Organit\Brands\FillNewBrandTable::class,
    ];





    foreach ($tasks as $task) {
      (new $task($this))->handle();
    }

    // $this->getProfileImage();
  }



  public function getProfileImage()
  {

  }


}
