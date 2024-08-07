<?php

namespace Modules\Affiliate\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Affiliate\Entities\AffiliateLink;
use Modules\Affiliate\Entities\AffiliateProduct;
use Modules\Affiliate\Http\Requests\Client\CreateAffiliateLinkRequest;

class AffiliateProductController extends Controller
{
    public function products()
    {
        $products = AffiliateProduct::paginate(12);
        SEOMeta::setTitle('Danh sách sản phẩm');
        return view('public.affiliate.products', compact('products'));
    }

    public function getSingleProduct($id)
    {
        $product = AffiliateProduct::with(['ownLinks'])->findOrFail($id);
        SEOMeta::setTitle($product->name);
        return view('public.affiliate.single_product', compact('product'));
    }


    public function createAffiliateLink($id, CreateAffiliateLinkRequest $request)
    {
        $product = AffiliateProduct::findOrFail($id);
        $affAccount = auth()->user()->affiliateAccount()->firstOrFail();

        $data = $request->only(
            'utm_source',
            'utm_campaign',
            'utm_medium',
            'utm_content',
            'is_short_link'
        );
        $data['code'] = $this->generateUniqueCode();
        $data['user_id'] = auth()->id();
        $data['aff_account_id'] = $affAccount->id;
        $data['status'] = AffiliateLink::ACTIVE;
        if($product->cookie_duration > 0) {
            $data['expired_at'] = Carbon::now()->addDays($product->cookie_duration);
        }

        $product->links()->create($data);

        return back()->with([
            'message' => 'Tạo affiliate link thành công!'
        ]);
    }

    private function generateUniqueCode()
    {
        $code = Str::random(10);
        $checkExist = AffiliateLink::where('code', $code)->exists();

        if(!$checkExist) {
            return $code;
        }
        return $this->generateUniqueCode();
    }
}
