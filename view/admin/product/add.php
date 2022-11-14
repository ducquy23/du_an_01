<?php include_once './view/admin/layout/header.php' ?>
<div class="chiadoi">
    <h2>Thêm mới sản phẩm</h2>
</div>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="add__sanpham">
        <p>Tên Product</p>
        <input type="text">
        <p>Giá Product</p>
        <input type="text">
        <p>Tiêu đề Product</p>
        <input type="text">
        <p>Thương hiệu Product</p>
        <input type="text">
        <p>Thương hiệu Product</p>
        <select>
            <option value="">Giày đá bóng</option>
            <option value="">Bóng đá</option>
            <option value="">Áo nam</option>
            <option value="">Áo nữ</option>
        </select>
        <p>Ảnh sản Product</p>
        <input type="file">
        <p>Mô tả Product</p>
        <input type="textarea" name="" id="">
        <br>
        <input type="submit" value="Thêm">
    </div>
</form>
<?php include_once './view/admin/layout/footer.php' ?>