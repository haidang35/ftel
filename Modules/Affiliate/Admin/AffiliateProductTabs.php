<?php

namespace Modules\Affiliate\Admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs;

class AffiliateProductTabs extends Tabs
{
    public function make()
    {
        $this->group('basic_information', trans('affiliate::products.tabs.groups.basic_info'))
            ->active()
            ->add($this->general())
            ->add($this->images());
    }

    private function general()
    {
        return tap(new Tab('general', trans('affiliate::products.tabs.general')), function (Tab $tab) {
            $tab->active();
            $tab->weight(1);
            $tab->fields(['name', 'description', 'info', 'status']);
            $tab->view('affiliate::admin.products.tabs.general', [

            ]);
        });
    }

    private function images()
    {
        if (! auth()->user()->hasAccess('admin.media.index')) {
            return;
        }

        return tap(new Tab('images', trans('affiliate::products.tabs.images')), function (Tab $tab) {
            $tab->weight(2);
            $tab->view('affiliate::admin.products.tabs.images');
        });
    }
}
