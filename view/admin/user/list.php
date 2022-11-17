<?php include_once './view/admin/layout/header.php' ?>
<div class="chiadoi">
    <h2>Danh sách user</h2>
    <h3><a href="?ctr=add_user">
            <input type="button" value="Thêm mới user"></a>
    </h3>
    
</div>
<div class="table__user">
    <table style="border-collapse:collapse; " border="1px">
        <thead>
            <tr>
                <th>#</th>
                <th>User Name</th>
                <th>User Images</th>
                <th>User Password</th>
                <th>User Email</th>
                <th>vai trò</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Lê Mạnh</td>
                <td><img src="/Dự_Án_01/public/images/img_admin/user.png" alt=""></td>

                <td>abc</td>
                <td>manhzxc3@gmail.com</td>
                <td>admin</td>
                <td>
                    <input type="button" value="Delete">
                </td>
            </tr>
           
          
          
            
        </thead>
    </table>
    
    
</div>
</article>
</div>
<?php include_once './view/admin/layout/footer.php' ?>