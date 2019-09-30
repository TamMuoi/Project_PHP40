<?php 
	$this->layout="views/backend/layoutAdmin2.php";
 ?>
<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Category news</div>
		<div style=" margin-top: 5px; margin-left: 15px;">
			<a href="index.php?area=backend&controller=category&action=add" class="btn btn-primary">Add category</a>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Tên danh mục</th>
					<th style="width:100px;">Quản lý</th>
				</tr>
				<?php foreach ($data as $rows):?>
				<tr>
					<td><?php echo $rows->name; ?></td>
					<td style="text-align:center">
						<a href="index.php?area=backend&controller=category&action=edit&category_id=<?php echo $rows->category_id; ?>">Edit</a>&nbsp;|&nbsp;
						<a href="index.php?area=backend&controller=category&action=delete&category_id=<?php echo $rows->category_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			<ul class="pagination">
				<li class="disabled"><a href="#">Trang</a></li>
					<?php for($i=1;$i<=$numPage;$i++): ?>
				<li><a href="index.php?area=backend&controller=category&action=list_category&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>