<!-- <?php
        // // extract($data['top_ban_chay']);
        // // echo "<pre>";
        // // print_r($data);
        // // echo "</pre>";
        // // echo "<br>";
        // foreach ($data['top_ban_chay'] as $value) {
        //      // echo "<pre>";
        //      // print_r($value);
        //      // echo "</pre>";
        //      extract($value);
        //      // echo $id_san_pham;
        // }
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>

</head>

<body>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../lib/image/img/HeroBigStandard_towards-the-sun-2022-12-new_001_Default.png" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../lib/image/img/HeroRegularStandard_Gucci-LOVE-PARADE-2022-012_001_Default.png" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../lib/image/img/HeroRegularStandard_Kids-Ceremony-LP-24_001_Default.png" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <main>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-12">
                <div class="row" id="policy">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="policy">
                            <img src="../../lib/image/img/ser_1.png" alt="" class="img-fluid">
                            <div>
                                <p>Vận chuyển <b>MIỄN PHÍ</b></p>
                                <p>Trong khu vực <b>HÀ NỘI</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="policy">
                            <img src="../../lib/image/img/ser_2.webp" alt="" class="img-fluid">
                            <div>
                                <p>Đổi trả <b>MIỄN PHÍ</b></p>
                                <p>Trong vòng <b>30 NGÀY</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="policy">
                            <img src="../../lib/image/img/ser_3.webp" alt="" class="img-fluid">
                            <div>
                                <p>Tiến hành <b>THANH TOÁN</b></p>
                                <p>Với nhiều <b>PHƯƠNG THỨC</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="policy">
                            <img src="../../lib/image/img/ser_4.webp" alt="">
                            <div>
                                <p><b>100% HOÀN TIỀN</b></p>
                                <p>Nếu sản phẩm lỗi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="top_selling">
                    <div class="row" id="title">
                        <a href="">
                            <h2>#Top Bán Chạy</h2>
                        </a>
                    </div>
                    <div class="row" id="product">
                        <?php
                        foreach ($data['top_ban_chay'] as $value) {
                            extract($value);
                            echo '   
                                   <div class="col-md-3 col-sm-6 col-12">
                                   <div class="product_img">
                                   <img src="' . $url_ha_sp . '" alt="" class="img-fluid">
                                   <i class="fa-solid fa-magnifying-glass"></i>
                                    <a href="/product/'.$id_san_pham.'"></a>
                                   </div>
                                   <a href="/product/'.$id_san_pham.'"><h6>' . $ten_sp . '</h6></a>
                                   <p>' . number_format($gia_sp) . ' VND</p>
                                   </div>';
                        }
                        ?>
                    </div>
                    <div class="button">
                        <a href="/product?doi_tuong=top_ban_chay"><button type="button" class="btn btn-outline-secondary">See more...</button></a>
                    </div>
                </div>
                <div class="jumbotron">
                    <hr class="my-4">
                </div>
                <div class="row" id="trending">
                    <!-- <div class="row" id="title">
                        <a href="">
                            <h2>#Xu Hướng</h2>
                        </a>
                    </div>
                    <div>
                        <div class="row" id="type">
                            <div class="col-md-4" id="type_1"><button type="button">Nam</button></div>
                            <div class="col-md-4" id="type_2"><button type="button">Nữ</button></div>
                            <div class="col-md-4" id="type_3"><button type="button">Trẻ Em</button></div>
                        </div>
                        <div class="row" id="trending_product"> -->
                            <!-- <div class="trending_product_1">
                                <div class="product_img">
                                    <img src="../../lib/image/img/ao-polo-gucci-gg-stretch-cotton-polo-mau-xanh-green-62d52ff294d58-18072022170330.jpg" alt="" class="img-fluid">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <a href="#"></a>
                                </div>
                                <a href="">
                                    <h6>Áo Polo Gucci GG Stretch Cotton Polo Màu Xanh Green</h6>
                                </a>
                                <p class="price">1.990.000</p>
                                <div class="sell_number">
                                    <img src="../../lib/image/img/icon-fire.png" alt="" class="img-fluid">
                                    <p>Đã bán 97sp/12 giờ qua</p>
                                </div>
                            </div> -->
                            <!-- <?php
                            $dem = 0;
                            foreach ($data['top_xu_huong_nam'] as $value) {
                                extract($value);
                                $dem++;
                                echo '
                                <div class="trending_product_' . $dem . '">
                                    <div class="product_img">
                                        <img src="' . $url_ha_sp . '" alt="' . $alt_ha_sp . '" class="img-fluid">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <a href="/product/'.$id.'"></a>
                                    </div>
                                    <a href="/product/'.$id.'">
                                        <h6>' . $ten_sp . '</h6>
                                    </a>
                                    <p class="price">' . number_format($gia_sp) . ' VND</p>
                                    <div class="sell_number">
                                        <img src="../../lib/image/img/icon-fire.png" alt="" class="img-fluid">
                                        <p>' . $luot_xem_sp . ' lượt xem</p>
                                    </div>
                                </div>  ';
                            }
                            ?> -->


                        <!-- </div>
                    </div> -->
                </div>
                <div class="row" id="link_between_page">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <figure class="snip1083 red"><img src="../../lib/image/img/img_banner_1.webp" alt="sample33" class="img-fluid" />
                                <figcaption>
                                    <h2><span>#MEN'S</span></h2>
                                </figcaption>
                                <a href="/product?doi_tuong=nam"></a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <figure class="snip1083 red"><img src="../../lib/image/img/img_banner_2.webp" alt="sample33" class="img-fluid" />
                                <figcaption>
                                    <h2><span>#GIRL'S</span></h2>
                                </figcaption>
                                <a href="/product?doi_tuong=nu"></a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <figure class="snip1083 red"><img src="../../lib/image/img/img_banner_3.webp" alt="sample33" class="img-fluid" />
                                <figcaption>
                                    <h2><span>#KID'S</span></h2>
                                </figcaption>
                                <a href="/product?doi_tuong=tre_em"></a>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <figure class="snip1083 red"><img src="../../lib/image/img/tui-deo-gucci-hang-hieu-600x450.jpg" alt="sample33" class="img-fluid" />
                                <figcaption>
                                    <h2><span>#BAGS</span></h2>
                                </figcaption>
                                <a href="#"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row" id="main_banner">
            <img src="../../lib/image/img/slider_1 (1).webp" alt="">
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-12">
                <div class="row" id="for_men">
                    <div class="row" id="title">
                        <a href="">
                            <h2>#For Men's</h2>
                        </a>
                    </div>
                    <div class="row" id="product">
                        <!-- <div class="col-md-3 col-sm-6 col-12">
                            <div class="image">
                                <div class="product_img">
                                    <img src="../../lib/image/img/ao-polo-gucci-gg-stretch-cotton-polo-mau-xanh-green-62d52ff294d58-18072022170330.jpg"
                                        alt="" class="img-fluid">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <a href="#"></a>
                                </div>
                            </div>
                            <a href="">
                                <h6>Áo Polo Gucci GG Stretch Cotton Polo Màu Xanh Green</h6>
                            </a>
                            <p>1.990.000</p>
                        </div> -->

                        <?php
                        foreach ($data['top_object_nam'] as $value) {
                            extract($value);
                            echo '  
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="image">
                                    <div class="product_img">
                                        <img src="' . $url_ha_sp . '"
                                        alt="' . $alt_ha_sp . '" class="img-fluid">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <a href="/product/'.$id.'"></a>
                                    </div>
                                </div>
                            <a href="/product/'.$id.'">
                                <h6>' . $ten_sp . '</h6>
                            </a>
                            <p>' . number_format($gia_sp) . ' VND</p>
                            </div>
                            ';
                        }
                        ?>

                    </div>
                    <div class="button">
                        <a href="/product?doi_tuong=nam"><button type="button" class="btn btn-outline-secondary">See more...</button></a>
                    </div>
                </div>
                <div class="jumbotron">
                    <hr class="my-4">
                </div>
                <div class="row" id="for_women">
                    <div class="row" id="title">
                        <a href="">
                            <h2>#For Women's</h2>
                        </a>
                    </div>
                    <div class="row" id="product">
                        <!-- <div class="col-md-3 col-sm-6 col-12">
                            <div class="image">
                                <div class="product_img">
                                    <img src="../../lib/image/img/ao-polo-gucci-gg-stretch-cotton-polo-mau-xanh-green-62d52ff294d58-18072022170330.jpg"
                                        alt="" class="img-fluid">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <a href="#"></a>
                                </div>
                            </div>
                            <a href="">
                                <h6>Áo Polo Gucci GG Stretch Cotton Polo Màu Xanh Green</h6>
                            </a>
                            <p>1.990.000</p>
                        </div> -->

                        <?php
                        foreach ($data['top_object_nu'] as $value) {
                            extract($value);
                            echo '  
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="image">
                                    <div class="product_img">
                                        <img src="' . $url_ha_sp . '"
                                        alt="' . $alt_ha_sp . '" class="img-fluid">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <a href="/product/'.$id.'"></a>
                                    </div>
                                </div>
                            <a href="/product/'.$id.'">
                                <h6>' . $ten_sp . '</h6>
                            </a>
                            <p>' . number_format($gia_sp) . ' VND</p>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                    <div class="button">
                        <a href="/product?doi_tuong=nu"><button type="button" class="btn btn-outline-secondary">See more...</button></a>
                    </div>
                </div>
                <div class="jumbotron">
                    <hr class="my-4">
                </div>
                <div class="row" id="for_kid">
                    <div class="row" id="title">
                        <a href="">
                            <h2>#For Kid's</h2>
                        </a>
                    </div>
                    <div class="row" id="product">
                        <!-- <div class="col-md-3 col-sm-6 col-12">
                            <div class="image">
                                <div class="product_img">
                                    <img src="../../lib/image/img/ao-polo-gucci-gg-stretch-cotton-polo-mau-xanh-green-62d52ff294d58-18072022170330.jpg"
                                        alt="" class="img-fluid">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <a href="#"></a>
                                </div>
                            </div>
                            <a href="">
                                <h6>Áo Polo Gucci GG Stretch Cotton Polo Màu Xanh Green</h6>
                            </a>
                            <p>1.990.000</p>
                        </div> -->

                        <?php
                        foreach ($data['top_object_tre_em'] as $value) {
                            extract($value);
                            echo '  
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="image">
                                    <div class="product_img">
                                        <img src="' . $url_ha_sp . '"
                                        alt="' . $alt_ha_sp . '" class="img-fluid">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <a href="/product/'.$id.'"></a>
                                    </div>
                                </div>
                            <a href="/product/'.$id.'">
                                <h6>' . $ten_sp . '</h6>
                            </a>
                            <p>' . number_format($gia_sp) . ' VND</p>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                    <div class="button">
                        <a href="/product?doi_tuong=tre_em"><button type="button" class="btn btn-outline-secondary">See more...</button></a>
                    </div>
                </div>
                <div class="row" id="mini_banner">
                    <a href=""><img src="../../lib/image/img/img_3banner_1.webp" alt="" class="img-fluid"></a>
                    <div></div>
                    <a href=""><img src="../../lib/image/img/img_3banner_2.webp" alt="" class="img-fluid"></a>
                    <div></div>
                    <a href=""><img src="../../lib/image/img/img_3banner_3.webp" alt="" class="img-fluid"></a>
                </div>
                <div class="row" id="news">
                    <div class="row" id="title">
                        <a href="/news">
                            <h2>#Tin tức Thời Trang</h2>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div>
                                <img src="../../lib/image/img/4-kieu-trang-phuc-demin-hot-nhat.webp" alt="" class="img-fluid">
                                <div class="news_content">
                                    <h3 class="news_headlines"><a href="">4 Kiểu Trang Phục Đang Hot Nhất Hack
                                            Mọi Độ
                                            Tuổi</a></h3>
                                    <p class="date_submitted"><span>15/7/2022</span></p>
                                    <p class="news_details">Với 4 kiểu trang phục denim này, phong cách của chị
                                        em sẽ
                                        được trẻ hóa.
                                        Khoảng thời gian từ xuân sang hè là vô cùng lý tưởng để diện đồ denim.
                                        Kiểu
                                        trang phục này trẻ trung, bụi bặm, rất hợp với không khí tươi vui của
                                        mùa ấm áp.
                                        Đồ denim thì có nhiều biến tấu, dễ khiến chị em bị hoang mang, không
                                        biết nên bổ
                                        sung thêm món nào cho tủ đồ....
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div>
                                <img src="../../lib/image/img/4-kieu-trang-phuc-demin-hot-nhat.webp" alt="" class="img-fluid">
                                <div class="news_content">
                                    <h3 class="news_headlines"><a href="">4 Kiểu Trang Phục Đang Hot Nhất Hack
                                            Mọi Độ
                                            Tuổi</a></h3>
                                    <p class="date_submitted"><span>15/7/2022</span></p>
                                    <p class="news_details">Với 4 kiểu trang phục denim này, phong cách của chị
                                        em sẽ
                                        được trẻ hóa.
                                        Khoảng thời gian từ xuân sang hè là vô cùng lý tưởng để diện đồ denim.
                                        Kiểu
                                        trang phục này trẻ trung, bụi bặm, rất hợp với không khí tươi vui của
                                        mùa ấm áp.
                                        Đồ denim thì có nhiều biến tấu, dễ khiến chị em bị hoang mang, không
                                        biết nên bổ
                                        sung thêm món nào cho tủ đồ....
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div>
                                <img src="../../lib/image/img/4-kieu-trang-phuc-demin-hot-nhat.webp" alt="" class="img-fluid">
                                <div class="news_content">
                                    <h3 class="news_headlines"><a href="">4 Kiểu Trang Phục Đang Hot Nhất Hack
                                            Mọi Độ
                                            Tuổi</a></h3>
                                    <p class="date_submitted"><span>15/7/2022</span></p>
                                    <p class="news_details">Với 4 kiểu trang phục denim này, phong cách của chị
                                        em sẽ
                                        được trẻ hóa.
                                        Khoảng thời gian từ xuân sang hè là vô cùng lý tưởng để diện đồ denim.
                                        Kiểu
                                        trang phục này trẻ trung, bụi bặm, rất hợp với không khí tươi vui của
                                        mùa ấm áp.
                                        Đồ denim thì có nhiều biến tấu, dễ khiến chị em bị hoang mang, không
                                        biết nên bổ
                                        sung thêm món nào cho tủ đồ....
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div>
                                <img src="../../lib/image/img/4-kieu-trang-phuc-demin-hot-nhat.webp" alt="" class="img-fluid">
                                <div class="news_content">
                                    <h3 class="news_headlines"><a href="">4 Kiểu Trang Phục Đang Hot Nhất Hack
                                            Mọi Độ
                                            Tuổi</a></h3>
                                    <p class="date_submitted"><span>15/7/2022</span></p>
                                    <p class="news_details">Với 4 kiểu trang phục denim này, phong cách của chị
                                        em sẽ
                                        được trẻ hóa.
                                        Khoảng thời gian từ xuân sang hè là vô cùng lý tưởng để diện đồ denim.
                                        Kiểu
                                        trang phục này trẻ trung, bụi bặm, rất hợp với không khí tươi vui của
                                        mùa ấm áp.
                                        Đồ denim thì có nhiều biến tấu, dễ khiến chị em bị hoang mang, không
                                        biết nên bổ
                                        sung thêm món nào cho tủ đồ....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jumbotron">
                    <hr class="my-4">
                </div>
                <div class="row" id="Insta">
                    <div class="row" id="title">
                        <a href="">
                            <h2>#GuccInstagram</h2>
                        </a>
                    </div>
                    <div class="row" id="insta_detail">
                        <div>
                            <img src="../../lib/image/img/img_brand_1.webp" alt="" class="img-fluid">
                            <i class="fa-solid fa-eye"></i>
                            <a href=""></a>
                        </div>
                        <div>
                            <a href="">
                                <img src="../../lib/image/img/img_brand_2.webp" alt="" class="img-fluid">
                                <i class="fa-solid fa-eye"></i>
                                <a href=""></a>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="../../lib/image/img/img_brand_3.webp" alt="" class="img-fluid">
                                <i class="fa-solid fa-eye"></i>
                                <a href=""></a>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="../../lib/image/img/img_brand_4.webp" alt="" class="img-fluid">
                                <i class="fa-solid fa-eye"></i>
                                <a href=""></a>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="../../lib/image/img/img_brand_5.webp" alt="" class="img-fluid">
                                <i class="fa-solid fa-eye"></i>
                                <a href=""></a>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>


</body>

</html>