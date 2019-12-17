<?php

Route::prefix('/')->group(function () {

    Route::get('','Front\HomeController@index')->name('index');
    Route::get('product/{title}/{id}','Front\ProductController@show')->name('productdetails');
    Route::post('customer-register','Front\HomeController@customerRegister');
    Route::get('customer-login','Front\HomeController@customerLoginView');
    Route::post('customer-login','Front\HomeController@customerLogin');
    Route::get('customer-logout','Front\HomeController@customerLogout');
    Route::get('shipping','CheckoutController@shipping')->name('shipping');

    //Search

    Route::get('search',array('as'=>'search','uses'=>'Front\HomeController@search'));
    Route::get('search-product','Front\HomeController@searchResult');

    //Cart

    Route::get('cart','CartController@cartDetails')->name('cart');
    Route::post('add-to-cart','CartController@addtocart')->name('addtocart');
    Route::get('cart/remove/{item_id}','CartController@deleteSingleCart')->name('cart.remove');
    Route::post('update-cart','CartController@updateCart')->name('cart.update');


    //Checkout

    Route::get('checkout','CheckoutController@checkout')->name('checkout');
    Route::post('checkout/order','OrderController@placeorder')->name('order');
    Route::post('checkout','AddressController@store')->name('storeAddress');
    Route::post('checkout/existingaddressn','AddressController@existingStore')->name('existingAddress');
    Route::post('alter','AddressController@alteraddress')->name('alteraddress');

    //Account

    Route::get('account','ProfileController@profile')->name('profile');
    Route::get('address/edit/{id}','ProfileController@edit')->name('addressedit');
    Route::put('address/{id}','ProfileController@update')->name('addresseupdate');
    Route::get('address/delete/{id}','ProfileController@delete')->name('addressdelete');
    Route::get('category/{category}','FrontCategoryFilterController@category')->name('category');
    Route::get('filter/{childcategory}/{id}','FrontCategoryFilterController@childcategory')->name('childcategory');

    //Order

    Route::get('orders','OrderController@order')->name('customerorders');
    Route::get('orders/{details}/{id}','OrderController@orderdetails')->name('customerorderdetails');

    Route::get('find/{subcategory}/{id}','FrontCategoryFilterController@subcategory')->name('subcategoryFind');
    Route::get('review/{title}/{id}','ReviewController@review')->name('review');
    Route::post('review','ReviewController@post')->name('postreview');
    Route::get('myreviews.html','ReviewController@reviews')->name('customersreview');
    Route::post('filter','FrontCategoryFilterController@brandFilter')->name('brandfilter');

    //Wishlist

    Route::get('wishlist','WishlistController@addwishlist')->name('wishlist');
    Route::post('wishlist/remove','WishlistController@wishlistremove')->name('wishlistremove');
    Route::get('my-wishlist','WishlistController@allwishlist')->name('allwishlist');

});

Route::prefix('admin')->group(function () {

    //Admin Login Route
    Route::get('/', ['uses' => 'Back\AdminPanelController@index', 'as' => 'adminindex', 'role' => ['admin', 'editor']]);
    Route::get('account/login', 'Auth\LoginController@showLoginForm')->name('adminlogin');
    Route::post('account/login', 'Auth\LoginController@login')->name('login');
    Route::post('account/logout', 'Auth\LoginController@logout')->name('adminlogout');

    //Product Route

    Route::get('back/products', ['uses' => 'Back\Product\ProductController@index', 'as' => 'productindex']);
    Route::get('products/create', ['uses' => 'Back\Product\ProductController@create', 'as' => 'productcreate']);
    Route::get('products/edit/{id}', ['uses' => 'Back\Product\ProductController@edit', 'as' => 'productedit']);
    Route::put('products/update/{id}', ['uses' => 'Back\Product\ProductController@update', 'as' => 'productupdate']);
    Route::post('products', ['uses' => 'Back\Product\ProductController@store', 'as' => 'productstore']);
    Route::post('products/image', ['uses' => 'Back\Product\ProductImageController@editProductImage', 'as' => 'getproductimage']);
    Route::post('products/image/update', ['uses' => 'Back\Product\ProductImageController@update', 'as' => 'updateproductimage']);
    Route::get('products/sales',['uses'=>'Back\Product\ProductController@productsalesdata','as'=>'productsalesdata']);
    Route::get('products/all-sales',['uses'=>'Back\Product\ProductController@allsalesData','as'=>'allsalesData']);
    Route::get('products/all-date-wise-sales/',['uses'=>'Back\Product\ProductController@datewiseAllsalesData','as'=>'datewiseAllsalesData']);
    Route::get('products/daily-sales/',['uses'=>'Back\Product\ProductController@todaysSale','as'=>'todaysSale']);
    Route::get('products/category-wise-sales/',['uses'=>'Back\Product\ProductController@categoryWiseSale','as'=>'categorywisesale']);
    Route::get('products/supplier-wise-sales/',['uses'=>'Back\Product\ProductController@supplierWiseSale','as'=>'supplierwise']);
    Route::delete('product/delete/{id}',['uses'=>'Back\Product\ProductController@destroy','as'=>'product.delete']);

    /* Category Route */
    Route::get('back/categories/', ['uses' => 'Back\Category\CategoryController@index', 'as' => 'categoryindex']);
    Route::get('categories/create', ['uses' => 'Back\Category\CategoryController@create', 'as' => 'categorycreate']);
    Route::get('categories/edit/{id}', ['uses' => 'Back\Category\CategoryController@edit', 'as' => 'categoryedit']);
    Route::put('categories/update/{id}', ['uses' => 'Back\Category\CategoryController@update', 'as' => 'categoryupdate']);
    Route::post('categories', ['uses' => 'Back\Category\CategoryController@store', 'as' => 'categorystore']);
    Route::delete('categories/{id}', ['uses' => 'Back\Category\CategoryController@destroy', 'as' => 'categorydestroy']);

    /* Sub Category Route */
    Route::post('subcategories', ['uses' => 'Back\SubCategory\SubCategoryController@store', 'as' => 'subcategorystore']);
    Route::get('subcategories/edit/{id}', ['uses' => 'Back\SubCategory\SubCategoryController@edit', 'as' => 'subcategoryedit']);
    Route::put('subcategories/update/{id}', ['uses' => 'Back\SubCategory\SubCategoryController@update', 'as' => 'subcategoryupdate']);
    Route::delete('subcategories/{id}', ['uses' => 'Back\SubCategory\SubCategoryController@destroy', 'as' => 'subcategorydestroy']);

    /* Child Category Route */
    Route::post('childcategories', ['uses' => 'Back\ChildCategory\ChildCategoryController@store', 'as' => 'childcategorystore']);
    Route::get('childcategories/edit/{id}', ['uses' => 'Back\ChildCategory\ChildCategoryController@edit', 'as' => 'childcategoryedit']);
    Route::put('childcategories/update/{id}', ['uses' => 'Back\ChildCategory\ChildCategoryController@update', 'as' => 'childcategoryupdate']);
    Route::delete('childcategories/{id}', ['uses' => 'Back\ChildCategory\ChildCategoryController@destroy', 'as' => 'childcategorydestroy']);

    /* Supplier Route */
    Route::get('suppliers/create', ['uses' => 'Back\Supplier\SupplierController@create', 'as' => 'suppliercreate']);
    Route::post('suppliers', ['uses' => 'Back\Supplier\SupplierController@store', 'as' => 'supplierstore']);
    Route::get('back/suppliers', ['uses' => 'Back\Supplier\SupplierController@index', 'as' => 'supplierindex']);
    Route::get('suppliers/{id}', ['uses' => 'Back\Supplier\SupplierController@show', 'as' => 'suppliershow']);
    Route::get('suppliers/edit/{id}', ['uses' => 'Back\Supplier\SupplierController@edit', 'as' => 'supplieredit']);
    Route::put('suppliers/update/{id}', ['uses' => 'Back\Supplier\SupplierController@update', 'as' => 'supplierupdate']);
    Route::delete('suppliers/{id}', ['uses' => 'Back\Supplier\SupplierController@destroy', 'as' => 'supplierdestroy']);

    /* Brand Route */
    Route::get('brands/create', ['uses' => 'Back\Brand\BrandController@create', 'as' => 'brandcreate']);
    Route::post('brands', ['uses' => 'Back\Brand\BrandController@store', 'as' => 'brandstore']);
    Route::get('back/brands', ['uses' => 'Back\Brand\BrandController@index', 'as' => 'brandindex']);
    Route::get('brands/edit/{id}', ['uses' => 'Back\Brand\BrandController@edit', 'as' => 'brandedit']);
    Route::put('brands/update/{id}', ['uses' => 'Back\Brand\BrandController@update', 'as' => 'brandupdate']);
    Route::delete('brands/{id}', ['uses' => 'Back\Brand\BrandController@destroy', 'as' => 'branddestroy']);

     /* Delivery Route */
    Route::get('deliveries/create', ['uses' => 'Back\Delivery\DeliveryController@create', 'as' => 'deliverycreate']);
    Route::post('deliveries', ['uses' => 'Back\Delivery\DeliveryController@store', 'as' => 'deliverystore']);
    Route::get('back/deliveries', ['uses' => 'Back\Delivery\DeliveryController@index', 'as' => 'deliveryindex']);
    Route::get('deliveries/edit/{id}', ['uses' => 'Back\Delivery\DeliveryController@edit', 'as' => 'deliveryedit']);
    Route::put('deliveries/update/{id}', ['uses' => 'Back\Delivery\DeliveryController@update', 'as' => 'deliveryupdate']);
    Route::delete('deliveries/{id}', ['uses' => 'Back\Delivery\DeliveryController@destroy', 'as' => 'deliverydestroy']);
    Route::get('delivery/payment',['uses'=>'Back\Delivery\DeliveryController@deliverypayment','as'=>'deliverypayment']);
    Route::get('delivery/payment/{id}',['uses'=>'Back\Delivery\DeliveryController@deliveryPaymentById','as'=>'deliverypaymentbyid']);
    Route::get('delivery/payment/details/{month}/{id}',['uses'=>'Back\Delivery\DeliveryController@deliverypaymentdetails','as'=>'deliverypaymentdetails']);
    Route::post('makepyament',['uses'=>'Back\Delivery\DeliveryController@makepyament','as'=>'makepyament']);

    /* Admin Role Route */
    Route::get('admin/create', ['uses' => 'Back\Admin\AdminController@create', 'as' => 'admincreate']);
    Route::post('admin', ['uses' => 'Back\Admin\AdminController@store', 'as' => 'adminstore']);
    Route::get('back/role', ['uses' => 'Back\Admin\AdminController@index', 'as' => 'adminroleindex']);
    Route::get('edit/{id}', ['uses' => 'Back\Admin\AdminController@edit', 'as' => 'adminedit']);
    Route::put('update/{id}', ['uses' => 'Back\Admin\AdminController@update', 'as' => 'adminupdate']);
    Route::delete('{id}', ['uses' => 'Back\Admin\AdminController@destroy', 'as' => 'admindestroy']);

    /* Product Order Route*/
    Route::get('orders/index', ['uses' => 'Back\Order\OrderController@index', 'as' => 'orderindex']);
    Route::get('orders/filter', ['uses' => 'Back\Order\OrderController@search', 'as' => 'ordersearch']);
    Route::get('orders/show/{id}', ['uses' => 'Back\Order\OrderController@show', 'as' => 'ordershow']);
    Route::get('orders/{status}', ['uses' => 'Back\Order\OrderController@status', 'as' => 'orderstatus']);
    Route::delete('orders/destroy/{id}', ['uses' => 'Back\Order\OrderController@destroy', 'as' => 'orderdelete']);
    Route::post('orders/getdelivery', ['uses' => 'Back\Order\OrderController@getDeliveryCompany', 'as' => 'getDeliveryCompany']);
    Route::post('orders/deliveryConfirm', ['uses' => 'Back\Order\OrderController@deliveryConfirm', 'as' => 'deliveryConfirm']);
    Route::delete('remove/product/{id}', ['uses' => 'Back\Order\OrderController@orderProductDelete', 'as' => 'orderproductdelete']);

    /* Advertisement Route */
    Route::get('advertisements/create', ['uses' => 'Back\Advertisement\AdvertisementController@create', 'as' => 'advertisementcreate', 'role' => ['admin', 'editor']]);
    Route::post('advertisements', ['uses' => 'Back\Advertisement\AdvertisementController@store', 'as' => 'advertisementstore']);
    Route::get('back/advertisements', ['uses' => 'Back\Advertisement\AdvertisementController@index', 'as' => 'advertisementindex']);
    Route::get('advertisements/edit/{id}', ['uses' => 'Back\Advertisement\AdvertisementController@edit', 'as' => 'advertisementedit']);
    Route::put('advertisements/update/{id}', ['uses' => 'Back\Advertisement\AdvertisementController@update', 'as' => 'advertisementupdate']);
    Route::delete('advertisements/{id}', ['uses' => 'Back\Advertisement\AdvertisementController@destroy', 'as' => 'advertisementdestroy']);

     /*supplier payment */
    Route::get('supplier/payment', ['uses' => 'Back\Supplier\SupplierController@payment', 'as' => 'supplierpayment']);
    Route::get('supplier/payment/date', ['uses' => 'Back\Supplier\SupplierController@datewiseSupplierPayment', 'as' => 'datewiseSupplierPayment']);
    Route::get('supplier/payment/{id}', ['uses' => 'Back\Supplier\SupplierController@supplierwisepayment', 'as' => 'supplierwisepayment']);
    Route::get('supplier/payment/details/{id}', ['uses' => 'Back\Supplier\SupplierController@paymentdetails', 'as' => 'paymentdetails']);
    Route::post('supplier', ['uses' => 'Back\Supplier\SupplierController@storepayment', 'as' => 'payment']);


    Route::get('supplier/product/search/{id}', ['uses' => 'Back\Product\ProductController@supplierwisesearch', 'as' => 'supplierwisesearch']);
    Route::get('brand/product/search/{id}', ['uses' => 'Back\Product\ProductController@brandwisesearch', 'as' => 'brandwisesearch']);
    Route::get('category/product/search/{id}', ['uses' => 'Back\Product\ProductController@categorywisesearch', 'as' => 'categorywisesearch']);
    Route::get('type/product/search/{id}', ['uses' => 'Back\Product\ProductController@typewisesearch', 'as' => 'typewisesearch']);

    Route::get('back/sales', ['uses' => 'Back\Sales\SalesReportController@index', 'as' => 'salesindex']);

    Route::post('back//productSalseReport', 'Back\Sales\SalesReportController@productSalseReport')->name('productSalseReport');

    Route::get('/inventory/product', function () {
        return view('back.inventory.item.create');
    })->name('inventoryitemcreate');

});

Route::get('/invoice-create/{id}/pdf','Back\Invoice\InvoiceController@invoice');