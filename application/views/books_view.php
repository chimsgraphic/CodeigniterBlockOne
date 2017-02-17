
		
		
		
		
		 <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
        <h2 class="page-header">Inner Or Simple Join</h2>
        <p class="alert alert-info"><small>Returns the set of rows that has matching values on all the joined tables.</small></p>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th><strong>Book ID</strong></th>
                    <th><strong>Book Name</strong</th>
                    <th><strong>Author Name</strong></th>
                    <th><strong>Category Name</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($novel); $i++) { ?>
                <tr>
                    <td><?php echo $novel[$i]->book_id; ?></td>
                    <td><?php echo $novel[$i]->book_name; ?></td>
                    <td><?php echo $novel[$i]->author_name; ?></td>
                    <td><?php echo $novel[$i]->category_name; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>
    
    
    
     