<?php include_once './view/admin/layout/header.php' ?>
<div class="chiadoi">
                <h2>Danh sách danh mục</h2>
                <h3>
                <a href="?ctr=add_cate">
                    <input type="button" value="Thêm mới danh mục">
                </a>
                </h3>
            </div>
            <div class="table__danhmuc">
                <table style="border-collapse:collapse; " border="1px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cata Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Giày bóng đá</td>
                            <td>
                                <input type="button" value="Update">
                                <input type="button" value="Delete">
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </article>
    </div>
    <?php include_once './view/admin/layout/footer.php' ?>