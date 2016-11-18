<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* CMS Databases */
        //
        // $this->createLangTable();
        // $this->createMenuTable();
        // $this->createModuleTable();
        // $this->createPageTable();
        // $this->createUserTable();
        //
        // $this->createPageLangTable();
        // $this->createMenuItemTable();
        // $this->createMenuItemLangTable();
        // $this->createModulePageTable();
        // $this->createModulePageExcludedTable();
        // $this->createFileTable();
        // /* *** */
        //
        // /* Playologie Databases */
        // $this->createUnitTable();
        // $this->createIncotermTable();
        // $this->createArticleCategoryTable();
        // $this->createArticleTable();
        // $this->createArticleUniverseTable();
        //
        // $this->createCurrencyTable();
        // $this->createCountryTable();
        // $this->createCountryStateTable();
        // $this->createProductMaterialTable();
        // $this->createProductCategoryTable();
        // $this->createProductCategorySubTable();
        // $this->createProductStyleTable();
        // $this->createProductFeatureTable();
        //
        // $this->createPhoneTable();
        // $this->createAddressTable();
        //
        // $this->createBrandTable();
        // $this->createBrandMessageTable();
        // $this->createBrandAgentTable();
        // $this->createBrandAgentCountryTable();
        // $this->createBrandDistributorTable();
        // $this->createBrandDistributorCountryTable();
        // $this->createBrandUserTable();
        // $this->createBrandImageTable();
        // $this->createBrandManufacturerTable();
        // $this->createBrandShipperTable();
        // $this->createBrandTaxTable();
        // $this->createBrandCurrencyTable();
        // $this->createBrandCurrencyCountryTable();
        // $this->createBrandSizeGroupTable();
        // $this->createBrandSizeTable();
        // $this->createBrandPriceGroupTable();
        // $this->createBrandPriceTable();
        // $this->createBrandPlateformTable();
        // $this->createBrandPlatformCountryTable();
        // $this->createBrandColorDirTable();
        // $this->createBrandColorTable();
        // $this->createBrandPrintDirTable();
        // $this->createBrandPrintTable();
        // $this->createBrandImageProductDirTable();
        // $this->createBrandImageProductTable();
        // $this->createBrandCompositionTable();
        // $this->createBrandCompositionMaterialTable();
        // $this->createBrandCollectionTable();
        // $this->createBrandCollectionDescriptionTable();
        // $this->createBrandCollectionAgentTable();
        // $this->createBrandCollectionDistributorTable();
        // $this->createBrandCollectionProductTable();
        // $this->createBrandCollectionProductStatTable();
        // $this->createBrandCollectionProductDescriptionTable();
        // $this->createBrandCollectionProductFeatureTable();
        // $this->createBrandCollectionProductCategoryTable();
        // $this->createBrandCollectionProductMaterialTable();
        // $this->createBrandCollectionProductImageTable();
        // $this->createBrandCollectionProductPrintTable();
        // $this->createBrandCollectionProductColorTable();
        // $this->createBrandCollectionProductSizeTable();
        // $this->createBrandCollectionProductSizePriceTable();
        // $this->createBrandCollectionProductStockTable();
        // $this->createBrandCollectionProductCountryTable();
        // $this->createBrandCollectionProductSuggestionTable();
        // $this->createBrandCollectionProductCurrencyTable();
        //
        // $this->createBuyerTable();
        // $this->createBuyerAddressTable();
        // $this->createBuyerBrandTable();
        // $this->createBuyerBrandProductTable();
        //
        // $this->createBrandBuyerTable();
        //
        // $this->createBrandOrderTable();
        // $this->createBrandOrderProductTable();
        // $this->createBrandOrderProductQuantityTable();
        // $this->createBrandOrderShipmentTable();
        // $this->createBrandOrderShipmentCaseTable();
        // $this->createBrandOrderShipmentQuantityTable();
        // $this->createBrandOrderInvoiceTable();
        // $this->createBrandOrderCreditTable();
        // /* *** */
        //
        // /* Foreign Key */
        // $this->addForeignKey();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // // dd('drop');
        //
        // Schema::dropIfExists('lang');
        // echo('lang -');
        //
        // Schema::dropIfExists('menu');
        // echo('menu -');
        //
        // Schema::dropIfExists('module');
        // echo('module -');
        //
        // Schema::dropIfExists('page');
        // echo('page -');
        //
        // Schema::dropIfExists('user');
        // echo('user -');
        //
        // Schema::dropIfExists('page_lang');
        // echo('page_lang -');
        //
        // Schema::dropIfExists('menu_item');
        // echo('menu_item -');
        //
        // Schema::dropIfExists('menu_item_lang');
        // echo('menu_item_lang -');
        //
        // Schema::dropIfExists('module_page');
        // echo('module_page -');
        //
        // Schema::dropIfExists('module_page_excluded');
        // echo('module_page_excluded -');
        //
        // Schema::dropIfExists('file');
        // echo('file -');
        //
        //
        // Schema::dropIfExists('incoterm');
        // echo('incoterm -');
        //
        // Schema::dropIfExists('unit');
        // echo('unit -');
        //
        // Schema::dropIfExists('article');
        // echo('article -');
        //
        // Schema::dropIfExists('article_universe');
        // echo('article_universe -');
        //
        // Schema::dropIfExists('article_category');
        // echo('article_category -');
        //
        // Schema::dropIfExists('currency');
        // echo('currency -');
        //
        // Schema::dropIfExists('country');
        // echo('country -');
        //
        // Schema::dropIfExists('country_state');
        // echo('country_state -');
        //
        // Schema::dropIfExists('product_material');
        // echo('product_material -');
        //
        // Schema::dropIfExists('product_category');
        // echo('product_category -');
        //
        // Schema::dropIfExists('product_category_sub');
        // echo('product_category_sub -');
        //
        // Schema::dropIfExists('product_style');
        // echo('product_style -');
        //
        // Schema::dropIfExists('product_feature');
        // echo('product_feature -');
        //
        //
        // Schema::dropIfExists('phone');
        // echo('phone -');
        //
        // Schema::dropIfExists('address');
        // echo('address -');
        //
        //
        // Schema::dropIfExists('brand');
        // echo('brand -');
        //
        // Schema::dropIfExists('brand_message');
        // echo('brand_message -');
        //
        // Schema::dropIfExists('brand_user');
        // echo('brand_user -');
        //
        // Schema::dropIfExists('brand_agent');
        // echo('brand_agent -');
        //
        // Schema::dropIfExists('brand_agent_country');
        // echo('brand_agent_country -');
        //
        // Schema::dropIfExists('brand_distributor');
        // echo('brand_distributor -');
        //
        // Schema::dropIfExists('brand_distributor_country');
        // echo('brand_distributor_country -');
        //
        // Schema::dropIfExists('brand_image');
        // echo('brand_image -');
        //
        // Schema::dropIfExists('brand_manufacturer');
        // echo('brand_manufacturer -');
        //
        // Schema::dropIfExists('brand_shipper');
        // echo('brand_shipper -');
        //
        // Schema::dropIfExists('brand_tax');
        // echo('brand_tax -');
        //
        // Schema::dropIfExists('brand_currency');
        // echo('brand_currency -');
        //
        // Schema::dropIfExists('brand_currency_country');
        // echo('brand_currency_country -');
        //
        // Schema::dropIfExists('brand_size_group');
        // echo('brand_size_group -');
        //
        // Schema::dropIfExists('brand_size');
        // echo('brand_size -');
        //
        // Schema::dropIfExists('brand_price_group');
        // echo('brand_price_group -');
        //
        // Schema::dropIfExists('brand_price');
        // echo('brand_price -');
        //
        // Schema::dropIfExists('brand_platform');
        // echo('brand_platform -');
        //
        // Schema::dropIfExists('brand_platform_country');
        // echo('brand_platform_country -');
        //
        // Schema::dropIfExists('brand_color');
        // echo('brand_color -');
        //
        // Schema::dropIfExists('brand_color_dir');
        // echo('brand_color_dir -');
        //
        // Schema::dropIfExists('brand_print');
        // echo('brand_print -');
        //
        // Schema::dropIfExists('brand_print_dir');
        // echo('brand_print_dir -');
        //
        // Schema::dropIfExists('brand_image_product');
        // echo('brand_image_product -');
        //
        // Schema::dropIfExists('brand_image_product_dir');
        // echo('brand_image_product_dir -');
        //
        // Schema::dropIfExists('brand_composition');
        // echo('brand_composition -');
        //
        // Schema::dropIfExists('brand_composition_material');
        // echo('brand_composition_material -');
        //
        // Schema::dropIfExists('brand_collection');
        // echo('brand_collection -');
        //
        // Schema::dropIfExists('brand_collection_description');
        // echo('brand_collection_description -');
        //
        // Schema::dropIfExists('brand_collection_agent');
        // echo('brand_collection_agent -');
        //
        // Schema::dropIfExists('brand_collection_distributor');
        // echo('brand_collection_distributor -');
        //
        // Schema::dropIfExists('brand_collection_product');
        // echo('brand_collection_product -');
        //
        // Schema::dropIfExists('brand_collection_product_stat');
        // echo('brand_collection_product_stat -');
        //
        // Schema::dropIfExists('brand_collection_product_description');
        // echo('brand_collection_product_description -');
        //
        // Schema::dropIfExists('brand_collection_product_feature');
        // echo('brand_collection_product_feature -');
        //
        // Schema::dropIfExists('brand_collection_product_category');
        // echo('brand_collection_product_category -');
        //
        // Schema::dropIfExists('brand_collection_product_material');
        // echo('brand_collection_product_material -');
        //
        // Schema::dropIfExists('brand_collection_product_image');
        // echo('brand_collection_product_image -');
        //
        // Schema::dropIfExists('brand_collection_product_print');
        // echo('brand_collection_product_print -');
        //
        // Schema::dropIfExists('brand_collection_product_color');
        // echo('brand_collection_product_color -');
        //
        // Schema::dropIfExists('brand_collection_product_size');
        // echo('brand_collection_product_size -');
        //
        // Schema::dropIfExists('brand_collection_product_size_price');
        // echo('brand_collection_product_size_price -');
        //
        // Schema::dropIfExists('brand_collection_product_stock');
        // echo('brand_collection_product_stock -');
        //
        // Schema::dropIfExists('brand_collection_product_country');
        // echo('brand_collection_product_country -');
        //
        // Schema::dropIfExists('brand_collection_product_suggestion');
        // echo('brand_collection_product_suggestion -');
        //
        // Schema::dropIfExists('brand_collection_product_currency');
        // echo('brand_collection_product_currency -');
        //
        //
        // Schema::dropIfExists('buyer');
        // echo('buyer -');
        //
        // Schema::dropIfExists('buyer_address');
        // echo('buyer_address -');
        //
        // Schema::dropIfExists('buyer_brand');
        // echo('buyer_brand -');
        //
        // Schema::dropIfExists('buyer_brand_product');
        // echo('buyer_brand_product -');
        //
        //
        // Schema::dropIfExists('brand_buyer');
        // echo('brand_buyer -');
        //
        //
        // Schema::dropIfExists('brand_order');
        // echo('brand_order -');
        //
        // Schema::dropIfExists('brand_order_product');
        // echo('brand_order_product -');
        //
        // Schema::dropIfExists('brand_order_product_quantity');
        // echo('brand_order_product_quantity -');
        //
        // Schema::dropIfExists('brand_order_shipment');
        // echo('brand_order_shipment -');
        //
        // Schema::dropIfExists('brand_order_shipment_case');
        // echo('brand_order_shipment_case -');
        //
        // Schema::dropIfExists('brand_order_shipment_quantity');
        // echo('brand_order_shipment_quantity -');
        //
        // Schema::dropIfExists('brand_order_invoice');
        // echo('brand_order_invoice -');
        //
        // Schema::dropIfExists('brand_order_credit');
        // echo('brand_order_credit -');
        //
        //
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }


    /* Create table */
    private function createLangTable(){

        Schema::create('lang', function (Blueprint $table) {
            echo('creating table : lang -');

            $table->engine = 'InnoDB';

            $table->increments('id_lang');
            $table->string('code')->unique();
            $table->string('code_moment');
            $table->string('name');
            $table->string('css_ico');
            $table->string('date_format');
            $table->string('date_format_angular');
            $table->string('date_format_moment');
            $table->string('currency_position');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
            // dd('__HERE__');
        });
    }

    private function createMenuTable(){

        Schema::create('menu', function(Blueprint $table){
            echo('creating table : menu -');

            $table->engine = 'InnoDB';

            $table->increments('id_menu');
            $table->string('name');
            $table->timestamps();
            $table->integer('status')->unsigned()->default(1);
        });
    }

    private function createModuleTable(){

        Schema::create('module', function(Blueprint $table){
            echo('creating table : module -');

            $table->engine = 'InnoDB';

            $table->increments('id_module');
            $table->string('name');
            $table->string('module');
            $table->text('param');
            $table->string('hook');
            $table->integer('num_order')->unsigned()->default(0);
            $table->timestamps();
            $table->integer('status')->unsigned()->default(1);
        });
    }

    private function createPageTable(){

        Schema::create('page', function(Blueprint $table){
            echo('creating table : page -');

            $table->engine = 'InnoDB';

            $table->increments('id_page');
            $table->string('alias');
            $table->string('access')->default('public');
            $table->string('css_class');
            $table->string('css_id');
            $table->timestamps();
            $table->integer('status')->unsigned()->default(1);
        });
    }

    private function createUserTable(){

        Schema::create('user', function (Blueprint $table) {
            echo('creating table : user -');

            $table->engine = 'InnoDB';

            $table->increments('id_user');
            $table->integer('id_phone')->unsigned()->nullable()->default(NULL);
            $table->string('email')->unique();
            $table->string('type');
            $table->string('first_name');
            $table->string('name');
            $table->string('password');
            $table->string('sex')->default('m');
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('status')->unsigned()->default(1);
        });
    }

    private function createPageLangTable(){

        Schema::create('page_lang', function(Blueprint $table){
            echo('creating table : page_lang -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_page')->unsigned();
            $table->integer('id_lang')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    private function createMenuItemTable(){

        Schema::create('menu_item', function(Blueprint $table){
            echo('creating table : menu_item -');

            $table->engine = 'InnoDB';

            $table->increments('id_item');
            $table->integer('id_menu')->unsigned();
            $table->integer('id_parent')->unsigned()->nullable()->default(NULL);
            $table->integer('id_page')->unsigned()->nullable()->default(NULL);
            $table->string('type')->default('page');
            $table->string('url')->nullable()->default(NULL);
            $table->string('css_class');
            $table->integer('num_order')->unsigned()->default(0);
            $table->timestamps();
            $table->integer('status')->unsigned()->default(1);
        });
    }

    private function createMenuItemLangTable(){

        Schema::create('menu_item_lang', function(Blueprint $table) {
            echo('creating table : menu_item_lang -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_item')->unsigned();
            $table->integer('id_lang')->unsigned();
            $table->string('name');
            $table->timestamps();

        });
    }

    private function createModulePageTable(){

        Schema::create('module_page', function(Blueprint $table){
            echo('creating table : module_page -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_module')->unsigned();
            $table->integer('id_page')->unsigned()->nullable()->default(NULL);
            $table->string('access')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    private function createModulePageExcludedTable(){

        Schema::create('module_page_excluded', function(Blueprint $table){
            echo('creating table : module_page_excluded -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_module')->unsigned();
            $table->integer('id_page')->unsigned();
            $table->timestamps();
        });
    }

    private function createFileTable(){

        Schema::create('file', function(Blueprint $table){
            echo('creating table : file -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('dir');
            $table->string('filename');
            $table->string('mime');
        });
    }

    private function createUnitTable(){

        Schema::create('unit', function(Blueprint $table){
            echo('creating table : unit -');

            $table->engine = 'InnoDB';

            $table->increments('id_unit');
            $table->string('label');
        });
    }

    private function createIncotermTable(){

        Schema::create('incoterm', function(Blueprint $table){
            echo('creating table : incoterm -');

            $table->engine = 'InnoDB';

            $table->increments('id_incoterm');
            $table->string('symbol');
            $table->string('key');
        });
    }

    private function createArticleCategoryTable(){

        Schema::create('article_category', function(Blueprint $table){
            echo('creating table : article_category -');

            $table->engine = 'InnoDB';

            $table->increments('id_category');
            $table->string('idx');
        });
    }

    private function createArticleTable(){

        Schema::create('article', function(Blueprint $table){
            echo('creating table : article -');

            $table->engine = 'InnoDB';

            $table->increments('id_article');
            $table->integer('id_category')->unsigned()->nullable()->default(NULL);
            $table->string('type')->default('playologie');
            $table->string('alias');
            $table->string('title');
            $table->text('description');
            $table->string('file');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createArticleUniverseTable(){

        Schema::create('article_universe', function(Blueprint $table){
            echo('creating table : article_universe -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_article')->unsigned();
            $table->string('universe');
        });
    }

    private function createProductMaterialTable(){

        Schema::create('product_material', function (Blueprint $table) {
            echo('creating table : product_material -');

            $table->engine = 'InnoDB';

            $table->increments('id_material');
            $table->string('key');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createProductCategoryTable(){

        Schema::create('product_category', function (Blueprint $table) {
            echo('creating table : product_category -');

            $table->engine = 'InnoDB';

            $table->increments('id_category');
            $table->string('universe');
            $table->string('key');
            $table->string('icon');
            $table->integer('is_style')->unsigned()->default(1);
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createProductStyleTable(){

        Schema::create('product_style', function (Blueprint $table) {
            echo('creating table : product_style -');

            $table->engine = 'InnoDB';

            $table->increments('id_style');
            $table->string('universe');
            $table->string('key');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createProductFeatureTable(){

        Schema::create('product_feature', function (Blueprint $table) {
            echo('creating table : product_feature -');

            $table->engine = 'InnoDB';

            $table->increments('id_feature');
            $table->string('key');
            $table->string('universe');
            $table->string('css_ico');
            $table->integer('level')->unsigned()->default(1);
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createProductCategorySubTable(){

        Schema::create('product_category_sub', function (Blueprint $table) {
            echo('creating table : product_category_sub -');

            $table->engine = 'InnoDB';

            $table->increments('id_category_sub');
            $table->integer('id_category')->unsigned();
            $table->string('key');
            $table->string('icon');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createCountryTable(){

        Schema::create('country', function (Blueprint $table) {
            echo('creating table : country -');

            $table->engine = 'InnoDB';

            $table->increments('id_country');
            $table->integer('id_currency')->unsigned()->nullable()->default(NULL);
            $table->string('name');
            $table->string('iso');
            $table->string('indicative');
            $table->float('relevance');
            $table->string('region');
            $table->integer('is_state')->unsigned()->default(0);
        });
    }

    private function createCurrencyTable(){

        Schema::create('currency', function (Blueprint $table) {
            echo('creating table : currency -');

            $table->engine = 'InnoDB';

            $table->increments('id_currency');
            $table->string('name');
            $table->string('iso');
            $table->string('symbol');
            $table->string('thousand_separator')->default(',');
            $table->string('decimal_separator')->default('.');
            $table->integer('decimal_round')->default(2);
            $table->integer('use_symbol')->default(0);
        });
    }

    private function createCountryStateTable(){

        Schema::create('country_state', function (Blueprint $table) {
            echo('creating table : country_state -');

            $table->engine = 'InnoDB';

            $table->increments('id_state');
            $table->integer('id_country')->unsigned()->nullable()->default(NULL);
            $table->string('name');
        });
    }

    private function createPhoneTable(){

        Schema::create('phone', function (Blueprint $table) {
            echo('creating table : phone -');

            $table->engine = 'InnoDB';

            $table->increments('id_phone');
            $table->string('indicative');
            $table->string('number');
            $table->integer('is_mobile')->unsigned()->default(1);
        });
    }

    private function createAddressTable(){

        Schema::create('address', function (Blueprint $table) {
            echo('creating table : address -');

            $table->engine = 'InnoDB';

            $table->increments('id_address');
            $table->integer('id_country')->unsigned();
            $table->integer('id_state')->unsigned()->nullable()->default(NULL);
            $table->string('address');
            $table->string('zip_code');
            $table->string('city');
            $table->timestamps();
        });
    }

    private function createBrandTable(){

        Schema::create('brand', function (Blueprint $table) {
            echo('creating table : brand -');

            $table->engine = 'InnoDB';

            $table->increments('id_brand');
            $table->integer('id_unit')->unsigned()->default(1);
            $table->integer('id_address')->unsigned()->default(1);
            $table->string('name');
            $table->double('agent_commission_default');
            $table->string('url_website');
            $table->string('url_facebook');
            $table->string('url_twitter');
            $table->string('url_google');
            $table->string('url_youtube');
            $table->string('url_trumblr');
            $table->string('url_instragram');
            $table->string('url_linkedin');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createBrandMessageTable(){

        Schema::create('brand_message', function (Blueprint $table) {
            echo('creating table : brand_message -');

            $table->engine = 'InnoDB';

            $table->increments('id_message');
            $table->integer('id_brand')->unsigned();
            $table->string('type');
            $table->string('name');
            $table->text('content');
        });
    }

    private function createBrandAgentTable(){

        Schema::create('brand_agent', function (Blueprint $table) {
            echo('creating table : brand_agent -');

            $table->engine = 'InnoDB';

            $table->increments('id_agent');
            $table->integer('id_brand')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->double('default_commission');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createBrandAgentCountryTable(){

        Schema::create('brand_agent_country', function (Blueprint $table) {
            echo('creating table : brand_agent_country -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_agent')->unsigned();
            $table->integer('id_country')->unsigned();
        });
    }

    private function createBrandDistributorTable(){

        Schema::create('brand_distributor', function (Blueprint $table) {
            echo('creating table : brand_distributor -');

            $table->engine = 'InnoDB';

            $table->increments('id_distributor');
            $table->integer('id_brand')->unsigned();
            $table->integer('id_user')->unsigned()->nullable()->default(NULL);
            $table->string('name');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createBrandDistributorCountryTable(){

        Schema::create('brand_distributor_country', function (Blueprint $table) {
            echo('creating table : brand_distributor_country -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_distributor')->unsigned();
            $table->integer('id_country')->unsigned();
        });
    }

    private function createBrandManufacturerTable(){

        Schema::create('brand_manufacturer', function (Blueprint $table) {
            echo('creating table : brand_manufacturer -');

            $table->engine = 'InnoDB';

            $table->increments('id_manufacturer');
            $table->integer('id_brand')->unsigned();
            $table->integer('id_address')->unsigned();
            $table->string('name');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createBrandShipperTable(){

        Schema::create('brand_shipper', function (Blueprint $table) {
            echo('creating table : brand_shipper -');

            $table->engine = 'InnoDB';

            $table->increments('id_shipper');
            $table->integer('id_brand')->unsigned();
            $table->string('name');
            $table->string('url_tracking');
            $table->integer('status')->unsigned()->default(1);
        });
    }

    private function createBrandTaxTable(){

        Schema::create('brand_tax', function (Blueprint $table) {
            echo('creating table : brand_tax -');

            $table->engine = 'InnoDB';

            $table->increments('id_tax');
            $table->integer('id_brand')->unsigned();
            $table->double('rate');
        });
    }

    private function createBrandImageTable(){

        Schema::create('brand_image', function (Blueprint $table) {
            echo('creating table : brand_image -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_brand')->unsigned();
            $table->string('universe');
            $table->string('file');
        });
    }

    private function createBrandUserTable(){

        Schema::create('brand_user', function (Blueprint $table) {
            echo('creating table : brand_user -');

            $table->engine = 'InnoDB';

            $table->increments('id_brand_user');
            $table->integer('id_brand')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('type');
            $table->integer('is_sales_manager')->unsigned()->default(0);
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createBrandCurrencyTable(){

        Schema::create('brand_currency', function (Blueprint $table) {
            echo('creating table : brand_currency -');

            $table->engine = 'InnoDB';

            $table->increments('id_brand_currency');
            $table->integer('id_brand')->unsigned();
            $table->integer('id_currency')->unsigned();
            $table->integer('id_incoterm')->unsigned();
            $table->integer('id_tax')->unsigned()->nullable()->default(NULL);
            $table->string('universe');
            $table->timestamps();
        });
    }

    private function createBrandCurrencyCountryTable(){

        Schema::create('brand_currency_country', function (Blueprint $table) {
            echo('creating table : brand_currency_country -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_brand_currency')->unsigned();
            $table->integer('id_country')->unsigned();
        });
    }

    private function createBrandSizeGroupTable(){

        Schema::create('brand_size_group', function (Blueprint $table) {
            echo('creating table : brand_size_group -');

            $table->engine = 'InnoDB';

            $table->increments('id_size_group');
            $table->integer('id_brand')->unsigned();
            $table->string('universe');
            $table->string('name');
            $table->timestamps();
        });
    }

    private function createBrandSizeTable(){

        Schema::create('brand_size', function (Blueprint $table) {
            echo('creating table : brand_size -');

            $table->engine = 'InnoDB';

            $table->increments('id_size');
            $table->integer('id_size_group')->unsigned();
            $table->string('name');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    private function createBrandPriceGroupTable(){

        Schema::create('brand_price_group', function (Blueprint $table) {
            echo('creating table : brand_price_group -');

            $table->engine = 'InnoDB';

            $table->increments('id_price_group');
            $table->integer('id_size_group')->unsigned();
            $table->string('name');
            $table->timestamps();
        });
    }

    private function createBrandPriceTable(){

        Schema::create('brand_price', function (Blueprint $table) {
            echo('creating table : brand_price -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_price_group')->unsigned();
            $table->integer('id_size')->unsigned();
        });
    }

    private function createBrandPlateformTable(){

        Schema::create('brand_platform', function (Blueprint $table) {
            echo('creating table : brand_platform -');

            $table->engine = 'InnoDB';

            $table->increments('id_platform');
            $table->integer('id_brand')->unsigned();
            $table->string('name');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    private function createBrandPlatformCountryTable(){

        Schema::create('brand_platform_country', function (Blueprint $table) {
            echo('creating table : brand_platform_country -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_platform')->unsigned();
            $table->integer('id_country')->unsigned();
        });
    }

    private function createBrandColorTable(){

        Schema::create('brand_color', function (Blueprint $table) {
            echo('creating table : brand_color -');

            $table->engine = 'InnoDB';

            $table->increments('id_color');
            $table->integer('id_dir')->unsigned();
            $table->string('name');
            $table->string('hex_color');
            $table->string('cmyk_color');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    private function createBrandColorDirTable(){

        Schema::create('brand_color_dir', function (Blueprint $table) {
            echo('creating table : brand_color_dir -');

            $table->engine = 'InnoDB';

            $table->increments('id_dir');
            $table->integer('id_brand')->unsigned();
            $table->string('name');
        });
    }

    private function createBrandPrintTable(){

        Schema::create('brand_print', function (Blueprint $table) {
            echo('creating table : brand_print -');

            $table->engine = 'InnoDB';

            $table->increments('id_print');
            $table->integer('id_dir')->unsigned();
            $table->string('name');
            $table->string('file');
            $table->integer('status')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    private function createBrandImageProductDirTable(){

        Schema::create('brand_image_product_dir', function (Blueprint $table) {
            echo('creating table : brand_image_product_dir -');

            $table->engine = 'InnoDB';

            $table->increments('id_dir');
            $table->integer('id_brand')->unsigned();
            $table->string('name');
        });
    }

    private function createBrandImageProductTable(){

        Schema::create('brand_image_product', function (Blueprint $table) {
            echo('creating table : brand_image_product -');

            $table->engine = 'InnoDB';

            $table->increments('id_image');
            $table->integer('id_dir')->unsigned();
            $table->string('name');
            $table->string('file_large');
            $table->string('file_medium');
            $table->string('file_small');
            $table->integer('status')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    private function createBrandCompositionTable(){

        Schema::create('brand_composition', function (Blueprint $table) {
            echo('creating table : brand_composition -');

            $table->engine = 'InnoDB';

            $table->increments('id_composition');
            $table->integer('id_brand')->unsigned();
            $table->string('name');
            $table->integer('status')->unsigned()->default(1);
        });
    }

    private function createBrandCompositionMaterialTable(){

        Schema::create('brand_composition_material', function (Blueprint $table) {
            echo('creating table : brand_composition_material -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_composition')->unsigned();
            $table->integer('id_material')->unsigned();
            $table->double('rate');
        });
    }

    private function createBrandPrintDirTable(){

        Schema::create('brand_print_dir', function (Blueprint $table) {
            echo('creating table : brand_print_dir -');

            $table->engine = 'InnoDB';

            $table->increments('id_dir');
            $table->integer('id_brand')->unsigned();
            $table->string('name');
        });
    }

    private function createBrandCollectionTable(){

        Schema::create('brand_collection', function (Blueprint $table) {
            echo('creating table : brand_collection -');

            $table->engine = 'InnoDB';

            $table->increments('id_collection');
            $table->integer('id_brand')->unsigned();
            $table->string('universe');
            $table->string('type');
            $table->string('name');
            $table->timestamp('ordering_date_end')->nullable()->default(NULL);
            $table->timestamp('delivery_date_start')->nullable()->default(NULL);
            $table->timestamp('delivery_date_end')->nullable()->default(NULL);
            $table->integer('delivery_delay');
            $table->integer('status')->unsigned()->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    private function createBrandCollectionDescriptionTable(){

        Schema::create('brand_collection_description', function (Blueprint $table) {
            echo('creating table : brand_collection_description -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_collection')->unsigned();
            $table->integer('id_lang')->unsigned();
            $table->string('description');
            $table->timestamps();
        });
    }

    private function createBrandCollectionAgentTable(){

        Schema::create('brand_collection_agent', function (Blueprint $table) {
            echo('creating table : brand_collection_agent -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_collection')->unsigned();
            $table->integer('id_agent')->unsigned();
            $table->double('commission');
        });
    }

    private function createBrandCollectionDistributorTable(){

        Schema::create('brand_collection_distributor', function (Blueprint $table) {
            echo('creating table : brand_collection_distributor -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_collection')->unsigned();
            $table->integer('id_distributor')->unsigned();
        });
    }

    private function createBrandCollectionProductTable(){

        Schema::create('brand_collection_product', function (Blueprint $table) {
            echo('creating table : brand_collection_product -');

            $table->engine = 'InnoDB';

            $table->increments('id_product');
            $table->integer('id_collection')->unsigned();
            $table->integer('id_manufacturer')->unsigned()->nullable()->default(NULL);
            $table->integer('id_style')->unsigned()->nullable()->default(NULL);
            $table->integer('id_size_group')->unsigned()->nullable()->default(NULL);
            $table->string('name');
            $table->string('ref');
            $table->string('tag');
            $table->double('weight');
            $table->string('barcode_ean');
            $table->string('barcode_upc');
            $table->string('invoice_description');
            $table->string('hts_code');
            $table->string('intra_code');
            $table->integer('is_bio')->unsigned()->default(0);
            $table->integer('is_pack')->unsigned()->default(0);
            $table->integer('order')->unsigned()->default(0);
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    private function createBrandCollectionProductStatTable(){

        Schema::create('brand_collection_product_stat', function (Blueprint $table) {
            echo('creating table : brand_collection_product_stat -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->string('action');
            $table->timestamp('created_at');
        });
    }

    private function createBrandCollectionProductDescriptionTable(){

        Schema::create('brand_collection_product_description', function (Blueprint $table) {
            echo('creating table : brand_collection_product_description -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_lang')->unsigned();
            $table->string('description');
            $table->timestamps();
        });
    }

    private function createBrandCollectionProductFeatureTable(){

        Schema::create('brand_collection_product_feature', function (Blueprint $table) {
            echo('creating table : brand_collection_product_feature -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_feature')->unsigned();
        });
    }

    private function createBrandCollectionProductCategoryTable(){

        Schema::create('brand_collection_product_category', function (Blueprint $table) {
            echo('creating table : brand_collection_product_category -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_category')->unsigned();
            $table->integer('id_category_sub')->unsigned();
        });
    }

    private function createBrandCollectionProductMaterialTable(){

        Schema::create('brand_collection_product_material', function (Blueprint $table) {
            echo('creating table : brand_collection_product_material -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_material')->unsigned();
            $table->double('rate');
        });
    }

    private function createBrandCollectionProductImageTable(){

        Schema::create('brand_collection_product_image', function (Blueprint $table) {
            echo('creating table : brand_collection_product_image -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_image')->unsigned();
            $table->integer('order')->unsigned()->default(0);
        });
    }

    private function createBrandCollectionProductPrintTable(){

        Schema::create('brand_collection_product_print', function (Blueprint $table) {
            echo('creating table : brand_collection_product_print -');

            $table->engine = 'InnoDB';

            $table->increments('id_product_print');
            $table->integer('id_product')->unsigned();
            $table->integer('id_print')->unsigned();
        });
    }

    private function createBrandCollectionProductColorTable(){

        Schema::create('brand_collection_product_color', function (Blueprint $table) {
            echo('creating table : brand_collection_product_color -');

            $table->engine = 'InnoDB';

            $table->increments('id_product_color');
            $table->integer('id_product')->unsigned();
            $table->integer('id_color')->unsigned();
        });
    }

    private function createBrandCollectionProductSizeTable(){

        Schema::create('brand_collection_product_size', function (Blueprint $table) {
            echo('creating table : brand_collection_product_size -');

            $table->engine = 'InnoDB';

            $table->increments('id_product_size');
            $table->integer('id_product')->unsigned();
            $table->integer('id_size')->unsigned();
            $table->string('quantity');
            $table->string('ref');
            $table->timestamps();
        });
    }

    private function createBrandCollectionProductSizePriceTable(){

        Schema::create('brand_collection_product_size_price', function (Blueprint $table) {
            echo('creating table : brand_collection_product_size_price -');

            $table->engine = 'InnoDB';

            $table->increments('id_product_price');
            $table->integer('id_product_size')->unsigned();
            $table->integer('id_brand_currency')->unsigned();
            $table->string('amount');
            $table->timestamps();
        });
    }

    private function createBrandCollectionProductStockTable(){

        Schema::create('brand_collection_product_stock', function (Blueprint $table) {
            echo('creating table : brand_collection_product_stock -');

            $table->engine = 'InnoDB';

            $table->increments('id_stock');
            $table->integer('id_product')->unsigned();
            $table->integer('id_platform')->unsigned();
            $table->integer('id_size')->unsigned();
            $table->integer('id_color')->unsigned()->nullable()->default(NULL);
            $table->integer('id_print')->unsigned()->nullable()->default(NULL);
            $table->string('stock');
            $table->timestamps();
        });
    }

    private function createBrandCollectionProductCountryTable(){

        Schema::create('brand_collection_product_country', function (Blueprint $table) {
            echo('creating table : brand_collection_product_country -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_country')->unsigned();
        });
    }

    private function createBrandCollectionProductSuggestionTable(){

        Schema::create('brand_collection_product_suggestion', function (Blueprint $table) {
            echo('creating table : brand_collection_product_suggestion -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_suggestion')->unsigned();
        });
    }

    private function createBrandCollectionProductCurrencyTable(){

        Schema::create('brand_collection_product_currency', function (Blueprint $table) {
            echo('creating table : brand_collection_product_currency -');

            $table->engine = 'InnoDB';

            $table->increments('id_product_currency');
            $table->integer('id_product')->unsigned();
            $table->integer('id_brand_currency')->unsigned();
            $table->integer('id_tax')->unsigned()->nullable()->default(NULL);
        });
    }

    private function createBuyerTable(){

        Schema::create('buyer', function (Blueprint $table) {
            echo('creating table : buyer -');

            $table->engine = 'InnoDB';

            $table->increments('id_buyer');
            $table->integer('id_user')->unsigned();
            $table->integer('id_address')->unsigned()->nullable()->default(NULL);
            $table->string('name');
            $table->string('business_name');
            $table->string('vat_number');
            $table->timestamps();
        });
    }

    private function createBuyerAddressTable(){

        Schema::create('buyer_address', function (Blueprint $table) {
            echo('creating table : buyer_address -');

            $table->engine = 'InnoDB';

            $table->increments('id_buyer_address');
            $table->integer('id_buyer')->unsigned();
            $table->integer('id_address')->unsigned();
            $table->integer('id_phone')->unsigned()->nullable()->default(NULL);
            $table->string('label');
            $table->string('name');
            $table->string('email');
            $table->integer('is_default')->unsigned()->default(0);
        });
    }

    private function createBuyerBrandTable(){

        Schema::create('buyer_brand', function (Blueprint $table) {
            echo('creating table : buyer_brand -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_buyer')->unsigned();
            $table->integer('id_brand')->unsigned();
        });
    }

    private function createBuyerBrandProductTable(){

        Schema::create('buyer_brand_product', function (Blueprint $table) {
            echo('creating table : buyer_brand_product -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_buyer')->unsigned();
            $table->integer('id_brand')->unsigned();
            $table->integer('id_product')->unsigned();
        });
    }

    private function createBrandBuyerTable(){

        Schema::create('brand_buyer', function (Blueprint $table) {
            echo('creating table : brand_buyer -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_brand')->unsigned();
            $table->integer('id_buyer')->unsigned();
            $table->string('ref');
            $table->double('discount');
        });
    }

    private function createBrandOrderTable(){

        Schema::create('brand_order', function (Blueprint $table) {
            echo('creating table : brand_order -');

            $table->engine = 'InnoDB';

            $table->increments('id_order');
            $table->integer('id_brand')->unsigned();
            $table->integer('id_brand_currency')->unsigned();
            $table->integer('id_brand_user')->unsigned()->nullable()->default(NULL);
            $table->integer('id_agent')->unsigned()->nullable()->default(NULL);
            $table->integer('id_buyer')->unsigned();
            $table->integer('id_buyer_address')->unsigned();
            $table->integer('id_platform')->unsigned();
            $table->string('universe');
            $table->string('type');
            $table->string('ref');
            $table->integer('shipment_rate');
            $table->integer('invoice_rate');
            $table->double('amount');
            $table->double('commission_rate');
            $table->double('commission_amount');
            $table->double('discount');
            $table->double('transport_amount');
            $table->double('transport_tax');
            $table->text('payment_terms');
            $table->text('payment_details');
            $table->text('shipment_details');
            $table->text('bank_details');
            $table->text('buyer_comment');
            $table->text('brand_comment');
            $table->text('internal_comment');
            $table->string('next_action')->default('buyer')->nullable();
            $table->integer('is_new')->unsigned()->default(0);
            $table->integer('status')->unsigned();
            $table->timestamps();
        });
    }

    private function createBrandOrderProductTable(){

        Schema::create('brand_order_product', function (Blueprint $table) {
            echo('creating table : brand_order_product -');

            $table->engine = 'InnoDB';

            $table->increments('id_order_product');
            $table->integer('id_order')->unsigned();
            $table->integer('id_product')->unsigned();
            $table->double('discount');
            $table->double('tax');
        });
    }

    private function createBrandOrderProductQuantityTable(){

        Schema::create('brand_order_product_quantity', function (Blueprint $table) {
            echo('creating table : brand_order_product_quantity -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_order_product')->unsigned();
            $table->integer('id_size')->unsigned();
            $table->integer('id_print')->unsigned()->nullable()->default(NULL);
            $table->integer('id_color')->unsigned()->nullable()->default(NULL);
            $table->integer('quantity')->unsigned();
            $table->double('price');
        });
    }

    private function createBrandOrderShipmentTable(){

        Schema::create('brand_order_shipment', function (Blueprint $table) {
            echo('creating table : brand_order_shipment -');

            $table->engine = 'InnoDB';

            $table->increments('id_shipment');
            $table->integer('id_order')->unsigned();
            $table->integer('id_brand')->unsigned();
            $table->integer('id_shipper')->unsigned()->nullable()->default(NULL);
            $table->string('ref');
            $table->integer('rate');
            $table->integer('case_number');
            $table->string('case_size');
            $table->double('weight');
            $table->text('comment');
            $table->integer('is_brand_shipper')->unsigned()->default(1);
            $table->integer('is_shipped')->unsigned()->default(0);
            $table->timestamp('document_date');
            $table->timestamp('shipment_date')->nullable()->default(NULL);
            $table->timestamps();
            $table->integer('status')->unsigned()->default(0);
        });
    }

    private function createBrandOrderShipmentCaseTable(){

        Schema::create('brand_order_shipment_case', function (Blueprint $table) {
                echo('creating table : brand_order_shipment_case -');

            $table->engine = 'InnoDB';

            $table->increments('id_case');
            $table->integer('id_shipment')->unsigned();
            $table->string('tracking');
        });
    }

    private function createBrandOrderShipmentQuantityTable(){

        Schema::create('brand_order_shipment_quantity', function (Blueprint $table) {
            echo('creating table : brand_order_shipment_quantity -');

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_shipment')->unsigned();
            $table->integer('id_order_product')->unsigned();
            $table->integer('id_size')->unsigned();
            $table->integer('id_print')->unsigned()->nullable()->default(NULL);
            $table->integer('id_color')->unsigned()->nullable()->default(NULL);
            $table->integer('quantity')->unsigned();
        });
    }

    private function createBrandOrderInvoiceTable(){

        Schema::create('brand_order_invoice', function (Blueprint $table) {
            echo('creating table : brand_order_invoice -');

            $table->engine = 'InnoDB';

            $table->increments('id_invoice');
            $table->integer('id_order')->unsigned();
            $table->integer('id_brand')->unsigned();
            $table->string('ref');
            $table->integer('rate');
            $table->double('amount');
            $table->timestamps();
            $table->integer('status')->unsigned()->default(0);
        });
    }

    private function createBrandOrderCreditTable(){

        Schema::create('brand_order_credit', function (Blueprint $table) {
            echo('creating table : brand_order_credit -');

            $table->engine = 'InnoDB';

            $table->increments('id_credit');
            $table->integer('id_order')->unsigned();
            $table->integer('id_brand')->unsigned();
            $table->string('ref');
            $table->double('amount');
            $table->timestamps();
            $table->integer('status')->unsigned()->default(0);
        });
    }








    /* Foreign Key */
    private function addForeignKey(){

        Schema::table('user', function(Blueprint $table){

            $table->foreign('id_phone')->references('id_phone')->on('phone')->onDelete('cascade');
        });

        Schema::table('page_lang', function(Blueprint $table){

            $table->foreign('id_page')->references('id_page')->on('page')->onDelete('cascade');
            $table->foreign('id_lang')->references('id_lang')->on('lang')->onDelete('cascade');
        });

        Schema::table('menu_item', function(Blueprint $table){

            $table->foreign('id_menu')->references('id_menu')->on('menu')->onDelete('cascade');
            $table->foreign('id_page')->references('id_page')->on('page')->onDelete('cascade');
        });

        Schema::table('menu_item_lang', function(Blueprint $table) {

            $table->foreign('id_item')->references('id_item')->on('menu_item')->onDelete('cascade');
            $table->foreign('id_lang')->references('id_lang')->on('lang')->onDelete('cascade');
        });

        Schema::table('module_page', function(Blueprint $table){

            $table->foreign('id_module')->references('id_module')->on('module')->onDelete('cascade');
            $table->foreign('id_page')->references('id_page')->on('page')->onDelete('cascade');
        });

        Schema::table('article', function(Blueprint $table){

            $table->foreign('id_category')->references('id_category')->on('article_category')->onDelete('cascade');
        });

        Schema::table('article_universe', function(Blueprint $table){

            $table->foreign('id_article')->references('id_article')->on('article')->onDelete('cascade');
        });

        Schema::table('country', function(Blueprint $table){

            $table->foreign('id_currency')->references('id_currency')->on('currency')->onDelete('cascade');
        });

        Schema::table('country_state', function(Blueprint $table){

            $table->foreign('id_country')->references('id_country')->on('country')->onDelete('cascade');
        });

        Schema::table('product_category_sub', function(Blueprint $table){

            $table->foreign('id_category')->references('id_category')->on('product_category')->onDelete('cascade');
        });

        Schema::table('address', function(Blueprint $table){

            $table->foreign('id_country')->references('id_country')->on('country')->onDelete('cascade');
            $table->foreign('id_state')->references('id_state')->on('country_state')->onDelete('cascade');
        });

        Schema::table('brand', function(Blueprint $table){

            $table->foreign('id_address')->references('id_address')->on('address')->onDelete('cascade');
            $table->foreign('id_unit')->references('id_unit')->on('unit')->onDelete('cascade');
        });

        Schema::table('brand_message', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_user', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_agent', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_agent_country', function(Blueprint $table){

            $table->foreign('id_agent')->references('id_agent')->on('brand_agent')->onDelete('cascade');
            $table->foreign('id_country')->references('id_country')->on('country')->onDelete('cascade');
        });

        Schema::table('brand_distributor', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_distributor_country', function(Blueprint $table){

            $table->foreign('id_distributor')->references('id_distributor')->on('brand_distributor')->onDelete('cascade');
            $table->foreign('id_country')->references('id_country')->on('country')->onDelete('cascade');
        });

        Schema::table('brand_image', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_manufacturer', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
            $table->foreign('id_address')->references('id_address')->on('address')->onDelete('cascade');
        });

        Schema::table('brand_tax', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_currency', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
            $table->foreign('id_currency')->references('id_currency')->on('currency')->onDelete('cascade');
            $table->foreign('id_incoterm')->references('id_incoterm')->on('incoterm')->onDelete('cascade');
            $table->foreign('id_tax')->references('id_tax')->on('brand_tax')->onDelete('cascade');
        });

        Schema::table('brand_currency_country', function(Blueprint $table){

            $table->foreign('id_brand_currency')->references('id_brand_currency')->on('brand_currency')->onDelete('cascade');
            $table->foreign('id_country')->references('id_country')->on('country')->onDelete('cascade');
        });

        Schema::table('brand_size_group', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_size', function(Blueprint $table){

            $table->foreign('id_size_group')->references('id_size_group')->on('brand_size_group')->onDelete('cascade');
        });

        Schema::table('brand_price_group', function(Blueprint $table){

            $table->foreign('id_size_group')->references('id_size_group')->on('brand_size_group')->onDelete('cascade');
        });

        Schema::table('brand_price', function(Blueprint $table){

            $table->foreign('id_price_group')->references('id_price_group')->on('brand_price_group')->onDelete('cascade');
            $table->foreign('id_size')->references('id_size')->on('brand_size')->onDelete('cascade');
        });

        Schema::table('brand_platform', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_platform_country', function(Blueprint $table){

            $table->foreign('id_platform')->references('id_platform')->on('brand_platform')->onDelete('cascade');
            $table->foreign('id_country')->references('id_country')->on('country')->onDelete('cascade');
        });

        Schema::table('brand_color_dir', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_color', function(Blueprint $table){

            $table->foreign('id_dir')->references('id_dir')->on('brand_color_dir')->onDelete('cascade');
        });

        Schema::table('brand_print_dir', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_print', function(Blueprint $table){

            $table->foreign('id_dir')->references('id_dir')->on('brand_print_dir')->onDelete('cascade');
        });

        Schema::table('brand_image_product_dir', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_image_product', function(Blueprint $table){

            $table->foreign('id_dir')->references('id_dir')->on('brand_image_product_dir')->onDelete('cascade');
        });

        Schema::table('brand_composition', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_composition_material', function(Blueprint $table){

            $table->foreign('id_composition')->references('id_composition')->on('brand_composition')->onDelete('cascade');
            $table->foreign('id_material')->references('id_material')->on('product_material')->onDelete('cascade');
        });

        Schema::table('brand_collection', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_collection_description', function(Blueprint $table){

            $table->foreign('id_collection')->references('id_collection')->on('brand_collection')->onDelete('cascade');
            $table->foreign('id_lang')->references('id_lang')->on('lang')->onDelete('cascade');
        });

        Schema::table('brand_collection_agent', function(Blueprint $table){

            $table->foreign('id_collection')->references('id_collection')->on('brand_collection')->onDelete('cascade');
            $table->foreign('id_agent')->references('id_agent')->on('brand_agent')->onDelete('cascade');
        });

        Schema::table('brand_collection_distributor', function(Blueprint $table){

            $table->foreign('id_collection')->references('id_collection')->on('brand_collection')->onDelete('cascade');
            $table->foreign('id_distributor')->references('id_distributor')->on('brand_distributor')->onDelete('cascade');
        });

        Schema::table('brand_collection_product', function(Blueprint $table){

            $table->foreign('id_collection')->references('id_collection')->on('brand_collection')->onDelete('cascade');
            $table->foreign('id_manufacturer')->references('id_manufacturer')->on('brand_manufacturer')->onDelete('cascade');
            $table->foreign('id_style')->references('id_style')->on('product_style')->onDelete('cascade');
            $table->foreign('id_size_group')->references('id_size_group')->on('brand_size_group')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_stat', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_description', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_lang')->references('id_lang')->on('lang')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_feature', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_feature')->references('id_feature')->on('product_feature')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_category', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_category')->references('id_category')->on('product_category')->onDelete('cascade');
            $table->foreign('id_category_sub')->references('id_category_sub')->on('product_category_sub')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_material', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_material')->references('id_material')->on('product_material')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_image', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_image')->references('id_image')->on('brand_image_product')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_print', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_print')->references('id_print')->on('brand_print')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_color', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_color')->references('id_color')->on('brand_color')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_size', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_size')->references('id_size')->on('brand_size')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_size_price', function(Blueprint $table){

            $table->foreign('id_product_size')->references('id_product_size')->on('brand_collection_product_size')->onDelete('cascade');
            $table->foreign('id_brand_currency')->references('id_brand_currency')->on('brand_currency')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_stock', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_platform')->references('id_platform')->on('brand_platform')->onDelete('cascade');
            $table->foreign('id_size')->references('id_size')->on('brand_size')->onDelete('cascade');
            $table->foreign('id_color')->references('id_color')->on('brand_color')->onDelete('cascade');
            $table->foreign('id_print')->references('id_print')->on('brand_print')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_country', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_country')->references('id_country')->on('country')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_suggestion', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
        });

        Schema::table('brand_collection_product_currency', function(Blueprint $table){

            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
            $table->foreign('id_brand_currency')->references('id_brand_currency')->on('brand_currency')->onDelete('cascade');
            $table->foreign('id_tax')->references('id_tax')->on('brand_tax')->onDelete('cascade');
        });

        Schema::table('buyer', function(Blueprint $table){

            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->foreign('id_address')->references('id_address')->on('address')->onDelete('cascade');
        });

        Schema::table('buyer_address', function(Blueprint $table){

            $table->foreign('id_buyer')->references('id_buyer')->on('buyer')->onDelete('cascade');
            $table->foreign('id_address')->references('id_address')->on('address')->onDelete('cascade');
            $table->foreign('id_phone')->references('id_phone')->on('phone')->onDelete('cascade');
        });

        Schema::table('buyer_brand', function(Blueprint $table){

            $table->foreign('id_buyer')->references('id_buyer')->on('buyer')->onDelete('cascade');
            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('buyer_brand_product', function(Blueprint $table){

            $table->foreign('id_buyer')->references('id_buyer')->on('buyer')->onDelete('cascade');
            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
        });

        Schema::table('brand_buyer', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
            $table->foreign('id_buyer')->references('id_buyer')->on('buyer')->onDelete('cascade');
        });

        Schema::table('brand_order', function(Blueprint $table){

            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
            $table->foreign('id_brand_currency')->references('id_brand_currency')->on('brand_currency')->onDelete('cascade');
            $table->foreign('id_brand_user')->references('id_brand_user')->on('brand_user')->onDelete('cascade');
            $table->foreign('id_agent')->references('id_agent')->on('brand_agent')->onDelete('cascade');
            $table->foreign('id_buyer')->references('id_buyer')->on('buyer')->onDelete('cascade');
            $table->foreign('id_buyer_address')->references('id_buyer_address')->on('buyer_address')->onDelete('cascade');
            $table->foreign('id_platform')->references('id_platform')->on('brand_platform')->onDelete('cascade');
        });

        Schema::table('brand_order_product', function(Blueprint $table){

            $table->foreign('id_order')->references('id_order')->on('brand_order')->onDelete('cascade');
            $table->foreign('id_product')->references('id_product')->on('brand_collection_product')->onDelete('cascade');
        });

        Schema::table('brand_order_product_quantity', function(Blueprint $table){

            $table->foreign('id_order_product')->references('id_order_product')->on('brand_order_product')->onDelete('cascade');
            $table->foreign('id_size')->references('id_size')->on('brand_size')->onDelete('cascade');
            $table->foreign('id_print')->references('id_print')->on('brand_print')->onDelete('cascade');
            $table->foreign('id_color')->references('id_color')->on('brand_color')->onDelete('cascade');
        });

        Schema::table('brand_order_shipment', function(Blueprint $table){

            $table->foreign('id_order')->references('id_order')->on('brand_order')->onDelete('cascade');
            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
            $table->foreign('id_shipper')->references('id_shipper')->on('brand_shipper')->onDelete('cascade');
        });

        Schema::table('brand_order_shipment_case', function(Blueprint $table){

            $table->foreign('id_shipment')->references('id_shipment')->on('brand_order_shipment')->onDelete('cascade');
        });

        Schema::table('brand_order_shipment_quantity', function(Blueprint $table){

            $table->foreign('id_shipment')->references('id_shipment')->on('brand_order_shipment')->onDelete('cascade');
            $table->foreign('id_order_product')->references('id_order_product')->on('brand_order_product')->onDelete('cascade');
            $table->foreign('id_size')->references('id_size')->on('brand_size')->onDelete('cascade');
            $table->foreign('id_print')->references('id_print')->on('brand_print')->onDelete('cascade');
            $table->foreign('id_color')->references('id_color')->on('brand_color')->onDelete('cascade');
        });

        Schema::table('brand_order_invoice', function(Blueprint $table){

            $table->foreign('id_order')->references('id_order')->on('brand_order')->onDelete('cascade');
            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });

        Schema::table('brand_order_credit', function(Blueprint $table){

            $table->foreign('id_order')->references('id_order')->on('brand_order')->onDelete('cascade');
            $table->foreign('id_brand')->references('id_brand')->on('brand')->onDelete('cascade');
        });


    }
}
