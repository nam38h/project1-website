<?php

require_once "lib/route.php";
require_once "controllers/controller.php";

route("/", function () {
     renderByUserRole('homepage');
});

route("/contact", function () {
     renderByUserRole('contactpage');
});

route("/404", function () {
     echo "404 error page";
});

route("/product", function () {
     renderByUserRole('productpage');
});

route("/product/{id}", function ($id) {

     // $id = $_GET['id'] ?? null;

     // if ($id === null) {
     //      header("location:/product");
     //      die;
     // }
     renderByUserRole('productdetailpage', $id);
});

// route("/detail", function () {
//      $id = $_GET['id'] ?? null;

//      if ($id === null) {
//           header("location:/product");
//           die;
//      }
//      productdetailpage($id);
// });

route("/login", function () {
     renderByUserRole('loginpage');
});

route("/register", function () {
     renderByUserRole('registerpage');
});

route("/forgotpassword", function () {
     renderByUserRole('forgotpasswordpage');
});

route("/shopping-cart", function () {
     renderByUserRole('shoppingcart');
});
route("/check-shopping-cart", function () {
     renderByUserRole('checkshoppingcart');
});

route("/cart-add/{id}", function ($id) {
     renderByUserRole('cartadd', $id);
});

route("/cart-minus/{id}", function ($id) {
     renderByUserRole('cartminus', $id);
});
route("/news", function () {
     renderByUserRole('newspage');
});

route("/cart-del/{id}", function ($id) {
     renderByUserRole('cartdel', $id);
});

route("/wishlist", function () {
     renderByUserRole('wishlistpage');
});


// route("/admin/product", function () {
//      echo "Quản lý sản phẩm là";
// });

// route("/admin/product/edit/{id}", function ($id) {
//      echo "Edit sản phẩm là $id";
// });

run();
