

			<h4>All Products</h4>
		<table class="table table-bordered">
			<tr>
				<td><strong>Product Name</strong></td>
				<td><strong>Description</strong></td>
				<td><strong>Price</strong></td>
			</tr>
			
			<?php foreach($products as $product){?>
			<tr>
				<td><?php echo $product->name;?></td>
				<td><?php echo $product->description;?></td>
				<td><?php echo $product->price;?></td>
			</tr>
			<?php }?>
		</table>
		