 <?php
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SiteImage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
});
Route::get('/abcd', [App\Http\Controllers\HomeController::class, 'abcd']);
/* -- To BE REMOVED AFTER  -- */
Route::get('/', function () {
	return redirect()->route('admin_dashboard');
})->name('index');
// Route::any( '{any}', function(){
    // return redirect()->route('admin_dashboard');
// });
/**/
/* -- To BE OPEN AFTER  -- * /
Route::get('/', function () {
        $product = Product::where('pr_featuted',1)->where('f_image','!=','')->limit(10)->get();
		// echo "<pre>";print_r($product);echo "</pre>";exit;
        $nproduct = Product::where('newin',1)->where('f_image','!=','')->limit(10)->get();
        $offerproduct = Product::where('offer',1)->where('f_image','!=','')->limit(10)->get();
        $trendingproduct = Product::where('trending',1)->where('f_image','!=','')->limit(10)->get();
        $brandmonthproduct = Product::where('brand_month',1)->where('f_image','!=','')->limit(10)->get();
        $allproduct = Product::all();
        $bimage = SiteImage::where('type','Banner-Slider')->get();
        $timage = SiteImage::where('type','Tags')->get();
        // $cate = Category::with('subcategory','product')->where('parent_id',0)->get();
        $cate = Category::with('subcategory.products.brand','product')->where('parent_id',0)->get();
        // dd($cate[0]->subcategory[0]->products[1]->brand);
        $brand = $brand = Brand::all();
        $ebrand = Brand::where('exclusive_brand',1)->get();
        $abrand = Brand::where('affordable_brand',1)->get();
        $mbrand = Brand::where('brand_of_month',1)->get();

    return view('home',compact('product','bimage','timage','allproduct','cate','nproduct','offerproduct','trendingproduct','brandmonthproduct','brand','ebrand','abrand','mbrand'));
})->name('index');
*/
Auth::routes();

    Route::get('/artisan/passport', function () {
    $exit_code = Artisan::call('passport:install');
    });

	Route::get('/delivery-information', [App\Http\Controllers\HomeController::class, 'deliveryInformation']);
	Route::get('/return-policy', [App\Http\Controllers\HomeController::class, 'returnPolicy']);
	Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacyPolicy']);
	Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms']);
	Route::get('/return-policy', [App\Http\Controllers\HomeController::class, 'returnPolicy']);
	Route::get('/order-tracking', [App\Http\Controllers\HomeController::class, 'orderTracking']);
	Route::get('/faqs', [App\Http\Controllers\HomeController::class, 'faqs']);
	Route::get('/thankyou', [App\Http\Controllers\HomeController::class, 'thankyou'])->name('thankyou');

    Route::any('search/query', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
//https://perfumemarket.plandstudios.com/public/product/kanye-west-eau-de-toilette


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/product-listings', [App\Http\Controllers\HomeController::class, 'product_listings'])->name('product_listings');
    Route::get('/product/{slug}', [App\Http\Controllers\HomeController::class, 'product_deatil'])->name('product_deatil');
    Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
    Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
    Route::post('add-to-cart/{id}', [App\Http\Controllers\HomeController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [App\Http\Controllers\HomeController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [App\Http\Controllers\HomeController::class, 'remove'])->name('remove.from.cart');

	Route::post('/get-product-varient-price', [App\Http\Controllers\HomeController::class, 'getProductVarientPrice']);
    Route::post('/remove-coupon', [App\Http\Controllers\HomeController::class, 'remove_coupon'])->name('remove_coupon');
	Route::post('/apply-coupon', [App\Http\Controllers\HomeController::class, 'apply_coupon'])->name('apply_coupon');

    Route::get('/category/{slug}', [App\Http\Controllers\HomeController::class, 'products_list'])->name('products_list');
    Route::get('/category/{slug}/{slug2}', [App\Http\Controllers\HomeController::class, 'products_list'])->name('products_list');
    Route::get('/category/{slug}/{slug2}/{slug3}', [App\Http\Controllers\HomeController::class, 'pro_list'])->name('pro_list');
    Route::get('/trending-listing', [App\Http\Controllers\HomeController::class, 'trending_list'])->name('trending_list');


    Route::get('/brands', [App\Http\Controllers\HomeController::class, 'brands'])->name('brands');
    Route::get('/brands/{slug}', [App\Http\Controllers\HomeController::class, 'brands_deatils'])->name('brands_deatils');

    Route::get('stripe', [App\Http\Controllers\StripePaymentController::class, 'stripe']);
    Route::post('stripe', [App\Http\Controllers\StripePaymentController::class, 'stripePost'])->name('stripe.post');

    Route::any('sortby', [App\Http\Controllers\HomeController::class, 'sort_by'])->name('sort_by');
    Route::post('search', [App\Http\Controllers\HomeController::class, 'sort_by_price'])->name('sort_by_price');

    Route::get('/auth/social', [App\Http\Controllers\SocialController::class, 'show'])->name('social.login');
    Route::get('/oauth/{driver}', [App\Http\Controllers\SocialController::class, 'redirectToProvider'])->name('social.oauth');
    Route::get('/oauth/{driver}/callback', [App\Http\Controllers\SocialController::class, 'handleProviderCallback'])->name('social.callback');


    Route::post('/write-review', [App\Http\Controllers\HomeController::class, 'write_review'])->name('write_review');
    Route::post('/stock-request', [App\Http\Controllers\HomeController::class, 'stock_request'])->name('stock_request');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_dashboard');

    // category route
    Route::get('categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('admin_categories');
    Route::get('add-categories', [App\Http\Controllers\AdminController::class, 'add_category'])->name('add_category');
    Route::post('create-categories', [App\Http\Controllers\AdminController::class, 'create_category'])->name('create_category');
    Route::get('edit-categories/{id}', [App\Http\Controllers\AdminController::class, 'edit_categories'])->name('edit_categories');
    Route::post('update-categories/{id}', [App\Http\Controllers\AdminController::class, 'update_categories'])->name('update_categories');
    Route::get('delete-categories/{id}', [App\Http\Controllers\AdminController::class, 'delete_category'])->name('delete_category');

    // product route
    Route::get('products', [App\Http\Controllers\AdminController::class, 'products'])->name('admin_products');
    Route::get('add-products', [App\Http\Controllers\AdminController::class, 'add_products'])->name('add_products');
    Route::post('create-products', [App\Http\Controllers\AdminController::class, 'create_products'])->name('create_products');
    Route::get('edit-products/{id}', [App\Http\Controllers\AdminController::class, 'edit_products'])->name('edit_products');
    Route::post('update-products/{id}', [App\Http\Controllers\AdminController::class, 'update_products'])->name('update_products');
    Route::get('delete-products/{id}', [App\Http\Controllers\AdminController::class, 'delete_products'])->name('delete_products');
    Route::post('add/images/store',[App\Http\Controllers\AdminController::class, 'imagesStore'])->name('add.images.store');
    Route::post('add/images/remove',[App\Http\Controllers\AdminController::class, 'imagesRemove'])->name('add.images.remove');
    Route::post('/get-sub', [App\Http\Controllers\AdminController::class, 'getsub'])->name('getsub');
    Route::post('/get-variation-id', [App\Http\Controllers\AdminController::class, 'get_variation_id'])->name('get_variation_id');
    Route::post('/update-sale', [App\Http\Controllers\AdminController::class, 'update_sale'])->name('update_sale');
    Route::get('products/search', [App\Http\Controllers\AdminController::class, 'products_search'])->name('products_search');

    // product variation route
    Route::get('products-variation', [App\Http\Controllers\AdminController::class, 'products_variation'])->name('admin_products_variation');
    Route::get('add-products-variation', [App\Http\Controllers\AdminController::class, 'add_products_variation'])->name('add_products_variation');
    Route::post('create-products-variation', [App\Http\Controllers\AdminController::class, 'create_products_variation'])->name('create_products_variation');
    Route::get('delete-products-variation/{id}', [App\Http\Controllers\AdminController::class, 'delete_products_variation'])->name('delete_products_variation');

    // order route
    Route::get('orders', [App\Http\Controllers\AdminController::class, 'orders'])->name('admin_orders');
    Route::get('view-orders/{id}', [App\Http\Controllers\AdminController::class, 'view_order'])->name('view_order');
    Route::get('delete-orders/{id}', [App\Http\Controllers\AdminController::class, 'del_order'])->name('del_order');

    // subscription route
    Route::get('subcriptions', [App\Http\Controllers\AdminController::class, 'subcriptions'])->name('admin_subcriptions');
    Route::get('delete-subcriptions/{id}', [App\Http\Controllers\AdminController::class, 'del_subcriptions'])->name('del_subcriptions');

    // banner Images route

    Route::get('banner-image', [App\Http\Controllers\AdminController::class, 'banner_image'])->name('admin_banner_image');
    Route::get('add-banner-image', [App\Http\Controllers\AdminController::class, 'add_banner_image'])->name('add_banner_image');
    Route::post('create-banner-image', [App\Http\Controllers\AdminController::class, 'create_banner_image'])->name('create_banner_image');
    Route::get('edit-banner-image/{id}', [App\Http\Controllers\AdminController::class, 'edit_banner_image'])->name('edit_banner_image');
    Route::post('update-banner-image/{id}', [App\Http\Controllers\AdminController::class, 'update_banner_image'])->name('update_banner_image');
    Route::get('delete-banner-image/{id}', [App\Http\Controllers\AdminController::class, 'delete_banner_image'])->name('delete_banner_image');

    // tag iamges
    Route::get('tag-image', [App\Http\Controllers\AdminController::class, 'tag_image'])->name('admin_tag_image');
    Route::get('add-tag-image', [App\Http\Controllers\AdminController::class, 'add_tag_image'])->name('add_tag_image');
    Route::post('create-tag-image', [App\Http\Controllers\AdminController::class, 'create_tag_image'])->name('create_tag_image');
    Route::get('edit-tag-image/{id}', [App\Http\Controllers\AdminController::class, 'edit_tag_image'])->name('edit_tag_image');
    Route::post('update-tag-image/{id}', [App\Http\Controllers\AdminController::class, 'update_tag_image'])->name('update_tag_image');
    Route::get('delete-tag-image/{id}', [App\Http\Controllers\AdminController::class, 'delete_tag_image'])->name('delete_tag_image');

    // cart text route
    Route::get('cart-text', [App\Http\Controllers\AdminController::class, 'cart_text'])->name('admin_cart_text');
    Route::get('add-cart-text', [App\Http\Controllers\AdminController::class, 'add_cart_text'])->name('add_cart_text');
    Route::post('create-cart-text', [App\Http\Controllers\AdminController::class, 'create_cart_text'])->name('create_cart_text');
    Route::get('edit-cart/{id}', [App\Http\Controllers\AdminController::class, 'edit_cart'])->name('edit_cart');
    Route::post('update-cart/{id}', [App\Http\Controllers\AdminController::class, 'update_cart'])->name('update_cart');
    Route::get('delete-cart-text/{id}', [App\Http\Controllers\AdminController::class, 'delete_cart_text'])->name('delete_cart_text');

    // Brand Route

    Route::get('brand', [App\Http\Controllers\AdminController::class, 'brand'])->name('admin_brand');
    Route::get('add-brand', [App\Http\Controllers\AdminController::class, 'add_brand'])->name('add_brand');
    Route::post('create-brand', [App\Http\Controllers\AdminController::class, 'create_brand'])->name('create_brand');
    Route::get('edit-brand/{id}', [App\Http\Controllers\AdminController::class, 'edit_brand'])->name('edit_brand');
    Route::post('update-brand/{id}', [App\Http\Controllers\AdminController::class, 'update_brand'])->name('update_brand');
    Route::get('delete-brand/{id}', [App\Http\Controllers\AdminController::class, 'delete_brand'])->name('delete_brand');

    // Coupan Route
    Route::get('coupon', [App\Http\Controllers\AdminController::class, 'coupon'])->name('admin_coupon');
     Route::get('add-coupon', [App\Http\Controllers\AdminController::class, 'add_coupon'])->name('add_coupon');
     Route::post('/get-relvant-data', [App\Http\Controllers\AdminController::class, 'get_relvant_data'])->name('get_relvant_data');
     Route::post('create-coupon', [App\Http\Controllers\AdminController::class, 'create_coupon'])->name('create_coupon');
     Route::get('delete-coupon/{id}', [App\Http\Controllers\AdminController::class, 'delete_coupon'])->name('delete_coupon');


      // Offer Route
      Route::get('offer', [App\Http\Controllers\AdminController::class, 'offer'])->name('admin_offer');
      Route::get('add-offer', [App\Http\Controllers\AdminController::class, 'add_offer'])->name('add_offer');
      Route::post('create-offer', [App\Http\Controllers\AdminController::class, 'create_offer'])->name('create_offer');
      Route::get('delete-offer/{id}', [App\Http\Controllers\AdminController::class, 'delete_offer'])->name('delete_offer');

      //reviews 
      Route::get('reviews', [App\Http\Controllers\AdminController::class, 'reviews'])->name('admin_reviews');
       Route::get('delete-reviews/{id}', [App\Http\Controllers\AdminController::class,
       'delete_reviews'])->name('delete_reviews'); 
       Route::get('delivery_info/{id}', [App\Http\Controllers\AdminController::class, 'delivery_info'])->name('admin_delivery_info');
       Route::post('tracking-order/{id}', [App\Http\Controllers\AdminController::class,
       'tracking_order'])->name('tracking_order');     
});