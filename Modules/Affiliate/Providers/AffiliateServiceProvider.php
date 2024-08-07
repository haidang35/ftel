<?php

namespace Modules\Affiliate\Providers;

use Modules\Admin\Ui\Facades\TabManager;
use Modules\Affiliate\Admin\AffiliateAccountTabs;
use Modules\Affiliate\Admin\AffiliateCustomerTabs;
use Modules\Affiliate\Admin\AffiliateLinkTabs;
use Modules\Affiliate\Admin\AffiliateProductTabs;
use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;

class AffiliateServiceProvider extends ServiceProvider
{
    use AddsAsset;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        TabManager::register('affiliate_products', AffiliateProductTabs::class);
        TabManager::register('affiliate_accounts', AffiliateAccountTabs::class);
        TabManager::register('affiliate_links', AffiliateLinkTabs::class);
        TabManager::register('affiliate_customers', AffiliateCustomerTabs::class);

        $this->addAdminAssets(
            [
                'admin.affiliate_products.(create|edit)',
                'admin.affiliate_accounts.(create|edit)',
                'admin.affiliate_links.(create|edit)',
                'admin.affiliate_customers.(create|edit)',
            ]
            , [
            'admin.media.css', 'admin.media.js', 'admin.product.css', 'admin.product.js',
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
