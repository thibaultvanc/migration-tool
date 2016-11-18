<?php

use Illuminate\Database\Seeder;

class DatabaseSeederOLD extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(LangTableSeeder::class); //FAIT //ignorer
        // $this->call(MenuTableSeeder::class); //FAIT - ignorer//ignorer
        // $this->call(ModuleTableSeeder::class);  //FAIT - ignoré//ignorer
        // $this->call(PageTableSeeder::class); //ignorer
        $this->call(FileTableSeeder::class);
        //
        // $this->call(IncotermTableSeeder::class); //incoterms //ignorer
        // $this->call(UnitTableSeeder::class); //ignorer
        // $this->call(CurrencyTableSeeder::class); //currencies //ignorer
        // $this->call(CountryTableSeeder::class); //countries //ignorer
        // $this->call(CountryStateTableSeeder::class); //ignorer
        //
        // $this->call(ArticleCategoryTableSeeder::class);
        // $this->call(ArticleTableSeeder::class);
        // $this->call(ArticleUniverseTableSeeder::class);
        //
        // $this->call(PageLangTableSeeder::class);//ignorer
        // $this->call(MenuItemTableSeeder::class);//ignorer
        // $this->call(MenuItemLangTableSeeder::class);//ignorer
        // $this->call(ModulePageTableSeeder::class);//ignorer
        // $this->call(ModulePageExcludedTableSeeder::class);//ignorer
        //
        // $this->call(ProductFeatureTableSeeder::class); //ignorer
        // $this->call(ProductCategoryTableSeeder::class); //ignorer
        // $this->call(ProductCategorySubTableSeeder::class); //ignorer
        // $this->call(ProductStyleTableSeeder::class); //ignorer
        // $this->call(ProductMaterialTableSeeder::class); //ignorer
        //
        // $this->call(PhoneTableSeeder::class);
        // $this->call(AddressTableSeeder::class);
        //
        // $this->call(UserTableSeeder::class);
        //
        // $this->call(BrandTableSeeder::class);
        // $this->call(BrandMessageTableSeeder::class);
        // $this->call(BrandImageTableSeeder::class);
        // $this->call(BrandManufacturerTableSeeder::class);
        // $this->call(BrandShipperTableSeeder::class);
        // $this->call(BrandTaxTableSeeder::class);
        // $this->call(BrandUserTableSeeder::class);
        // $this->call(BrandAgentTableSeeder::class);
        // $this->call(BrandAgentCountryTableSeeder::class);
        // $this->call(BrandDistributorTableSeeder::class);
        // $this->call(BrandDistributorCountryTableSeeder::class);
        //
        // $this->call(BrandPrintDirTableSeeder::class);
        // $this->call(BrandPrintTableSeeder::class);
        //
        // $this->call(BrandColorDirTableSeeder::class);
        // $this->call(BrandColorTableSeeder::class);
        //
        // $this->call(BrandImageProductDirTableSeeder::class);
        // $this->call(BrandImageProductTableSeeder::class);
        //
        // $this->call(BrandCompositionTableSeeder::class);
        // $this->call(BrandCompositionMaterialTableSeeder::class);
        //
        // $this->call(BrandSizeGroupTableSeeder::class);
        // $this->call(BrandSizeTableSeeder::class);
        // $this->call(BrandPriceGroupTableSeeder::class);
        // $this->call(BrandPriceTableSeeder::class);
        //
        // $this->call(BrandCurrencyTableSeeder::class);
        // $this->call(BrandCurrencyCountryTableSeeder::class);
        //
        // $this->call(BrandPlatformTableSeeder::class);
        // $this->call(BrandPlatformCountryTableSeeder::class);
        //
        // $this->call(BrandCollectionTableSeeder::class);
        // $this->call(BrandCollectionAgentTableSeeder::class);
        // $this->call(BrandCollectionDistributorTableSeeder::class);
        // $this->call(BrandCollectionProductTableSeeder::class);
        // $this->call(BrandCollectionProductStatTableSeeder::class);
        // $this->call(BrandCollectionProductDescriptionTableSeeder::class);
        // $this->call(BrandCollectionProductFeatureTableSeeder::class);
        // $this->call(BrandCollectionProductImageTableSeeder::class);
        // $this->call(BrandCollectionProductCategoryTableSeeder::class);
        // $this->call(BrandCollectionProductMaterialTableSeeder::class);
        // $this->call(BrandCollectionProductPrintTableSeeder::class);
        // $this->call(BrandCollectionProductColorTableSeeder::class);
        // $this->call(BrandCollectionProductCountryTableSeeder::class);
        // $this->call(BrandCollectionProductSuggestionTableSeeder::class);
        // $this->call(BrandCollectionProductSizeTableSeeder::class);
        // $this->call(BrandCollectionProductSizePriceTableSeeder::class);
        // $this->call(BrandCollectionProductStockTableSeeder::class);
        //
        // $this->call(BuyerTableSeeder::class);
        // $this->call(BuyerAddressTableSeeder::class);
        // $this->call(BuyerBrandTableSeeder::class);
        // $this->call(BuyerBrandProductTableSeeder::class);
        //
        // $this->call(BrandBuyerTableSeeder::class);
        //
        // $this->call(BrandOrderTableSeeder::class);
        // $this->call(BrandOrderProductTableSeeder::class);
        // $this->call(BrandOrderProductQuantityTableSeeder::class);
        // $this->call(BrandOrderShipmentTableSeeder::class);
        // $this->call(BrandOrderShipmentCaseTableSeeder::class);
    }
}
