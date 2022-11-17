<?php include_once './view/admin/layout/header.php' ?>
<div class="chiadoi">
    <h2>Cập nhật sản phẩm</h2>
</div>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="add__sanpham">
        <p>Tên sản phẩm</p>
        <input type="text" placeholder="Nhập tên sản phẩm">
        <p>Giá sản phẩm</p>
        <input type="text" placeholder="Nhập giá sản phẩm">
        <p>Thương hiệu sản phẩm</p>
        <input type="text"placeholder="Nhập thương hiệu sản phẩm">
        <p>Danh mục sản phẩm</p>
        <select>
            <option value="">Giày đá bóng</option>
            <option value="">Bóng đá</option>
            <option value="">Áo nam</option>
            <option value="">Áo nữ</option>
        </select>
        <p>Ảnh sản sản phẩm</p>
        <input type="file"><br>
        <img src="/public/images/img_admin/Rectangle 169.png" style="padding-top:10px ;" alt=""> 
        <p>Mô tả sản phẩm</p>
        <input type="textarea" name="" id="" placeholder="Nhập mô tả sản phẩm" >
        <br>
        <input type="submit" value="Update">
    </div>
</form>
<?php include_once './view/admin/layout/footer.php' ?>