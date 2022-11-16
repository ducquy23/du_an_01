<?php include_once './view/admin/layout/header.php' ?>
<div class="chiadoi">
                <h2>Danh sách bình luận</h2>
           
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="table__user">
                <table style="border-collapse:collapse; " border="1px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User ID</th>
                            <th>Product ID</th>
                            <th>Content</th>
                            <th>Ngày bình luận</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>10</td>
                            <td>sản phẩm ok</td>
                            <td>12-03-2022</td>
                            <td>
                                <input type="button" value="Xóa">
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            </form>
        </article>
    </div>
    <?php include_once './view/admin/layout/footer.php' ?>