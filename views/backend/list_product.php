<?php 
    //set giao dien cua file layout
    $this->layout = "views/backend/layoutAdmin2.php";
 ?>
 <div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=product&action=add" class="btn btn-primary">Add product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">DANH SÁCH SẢN PHẨM</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;text-align: center;">Ảnh sản phẩm</th>
                    <th style="text-align: center;">Tên sản phẩm</th>
                    <th style="width: 100;text-align: center;">Thuộc danh mục</th>
                    <th style="width: 100px;text-align: center;">Giá</th>
                    <th style="width: 100px;text-align: center;">Sản phẩm mới nhất</th>                    
                    <th style="width:100px;text-align: center;">Chức năng</th>
                </tr>
                <?php 
                    foreach($data as $rows):
                 ?>
                <tr>
                    <td>
                        <?php if(isset($rows->img) && file_exists("assets/upload/product/".$rows->img)): ?>
                        <img src="assets/upload/product/<?php echo $rows->img; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td style="text-align: center;"><?php echo $rows->name; ?></td>
                    <td style="text-align: center;">
                        <?php 
                            //lay doi tuong connection de truy van du lieu
                            $conn = Connection::getInstance();
                            $query = $conn->prepare("select name from tbl_category where category_id=:cat_id");
                            $query->setFetchMode(PDO::FETCH_OBJ);
                            $query->execute(array("cat_id"=>$rows->category_id));
                            //lay mot ban ghi
                            $result = $query->fetch();
                            echo isset($result->name)?$result->name:"";
                         ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo number_format($rows->price); ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if($rows->hotproduct == 1): ?>
                        Hot
                        <?php endif; ?>
                    </td>                    
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=product&action=edit&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;&nbsp;&nbsp;
                        <a href="index.php?area=backend&controller=product&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="disabled"><a href="#">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li><a href="index.php?area=backend&controller=product&action=list_product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>