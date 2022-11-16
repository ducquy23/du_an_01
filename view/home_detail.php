<?php include_once 'header.php' ?>
<style>
    .footer {
        margin-top: 100px;
    }
</style>
<div class="header__collections">
    <a href="?ctr=home">Trang chủ / </a>
    <a href="" style="margin-left: 5px;"> Giày /</a>
    <span style="margin-left: 8px;"> Giày bóng đá Jogarbola Koha 2103</span>
</div>
<div class="main">
    <div class="intro">
        <ul class="intro__list-product">
            <li><a href=""><img src="/public/images/img_client/shoes_soccer_01.png" alt=""></a></li>
            <li><a href=""><img src="/public/images/img_client/shoes_soccer_02.png" alt=""></a></li>
            <li><a href=""><img src="/public/images/img_client/shoes_soccer_03.png" alt=""></a></li>
            <li><a href=""><img src="/public/images/img_client/shoes_soccer_04.png" alt=""></a></li>
            <li><a href=""><img src="/public/images/img_client/shoes_soccer_05.png" alt=""></a></li>
        </ul>
        <div class="intro__img-detail">
            <a href=""><img src="/public/images/img_client/shoes_soccer_01.png" alt=""></a>
        </div>
        <div class="intro__product-info">
            <div class="intro__product-title">
                Giày bóng đá Jogarbola Koha 2103
            </div>
            <div class="intro__product-brand">
                Thương Hiệu: <a href="">JOGARBOLA </a>
                | Mã sản phẩm:1020236214873
            </div>
            <div class="intro__product-price">
                695,000₫
            </div>
            <div class="intro__product-size">
                <p>Kích thước:</p>
                <ul>
                    <li>38</li>
                    <li>39</li>
                    <li>40</li>
                    <li>41</li>
                    <li>42</li>
                    <li>42</li>
                    <li>42</li>
                </ul>
            </div>
            <div class="intro__product-quantity">
                <div class="intro__product-input">
                    <label for="">Số lượng :</label><br>
                    <input type="number" value="1" min="0">
                </div>
                <div class="intro__product-btn">
                    <button>Thêm vào giỏ hàng</button>
                    <button>Mua ngay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="introProduct">
        <div class="product__desc">
            <div class="introProduct__header">
                <a href="">THÔNG TIN SẢN PHẨM</a>
                <a href="">ĐÁNH GIÁ</a>
            </div>
            <div class="introProduct__desc">
                Bạn mơ về 1 lối chơi tốc độ cùng khả năng phản xạ nhanh nhẹn trong những pha bóng lắt léo? Hoạ tiết lấy cảm hứng từ những ngọn sóng biển đang dữ đội cuộn trào, Koha 2103 không chỉ khuấy động sân cỏ bằng hương vị của biển cả mà còn mang lại cho bạn 1 phong thái khoáng đạt, tự do khi chơi bóng.

                Với cổ chun co giãn, thuận tiện khi sử dụng, bảo vệ và phòng tránh lật cổ chân, Koha là lựa chọn tuyệt vời cho những ai yêu thích sự uyển chuyển trong di các pha bóng

                Phần upper với da Microfiber cao cấp siêu mềm, ôm chọn vào chân đảm bảo cảm giác cố định chắc chắn. Bề mặt với những đường hoa văn lượn sóng khiến bóng dính hơn làm bạn hoàn toàn có thể điều khiển quỹ đạo bóng theo ý muốn.

                Đế giày TF với đinh dăm chuyên biệt dành cho sân cỏ nhân tạo được phân bố tập trung chủ yếu ở mũi giày và gót giúp nhằm giảm áp lực cơ thể lên chân, bám sân tốt giúp bạn sẵn sàng thống trị sân cỏ.

                Sau khi phân tích hàng nghìn bước di chuyển cụ thể trong bóng đá, bằng sự linh hoạt, uyển chuyển đúng như tên gọi của nó, Koha 2103 chính là vũ khí giúp bạn làm chủ được trai bóng và áp đảo mọi thế trận.

                Hãy chạm bóng bằng mọi giác quan và nâng tầm lối chơi của bạn với Koha 2103.
            </div>
        </div>
    </div>
    <div class="relate">
        <div class="relate__product">
            <div class="header__ralate">
                SẢN PHẨM LIÊN QUAN
            </div>
            <div class="relate__list-product">
                <?php for($i = 0 ; $i < 4;$i++): ?>
                <div class="main__product">
                    <a href=""><img src="/public/images/img_client/shoes_soccer_01.png" alt="" class="img_product"></a>
                    <div class="title_product">GIÀY BÓNG ĐÁ JOGARBOLA X-FACTOR 190424B</div>
                    <div class="price_product">685,000<sup><u>đ</u></sup></div>
                    <div class="main__btn">
                        <button class="btn-add">Thêm vào giỏ</button>
                        <button class="btn-buy">Mua ngay</button>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

</div>
<?php include_once 'footer.php' ?>