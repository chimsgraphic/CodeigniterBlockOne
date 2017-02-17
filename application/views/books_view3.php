




<div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
        <h2 class="page-header">Multi Join to More Than One Table</h2>
        <p class="alert alert-info"><small>Join more tha two tables. Multiple join makes multiple calls to the join function</small></p>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th><strong>Book ID</strong></th>
                    <th><strong>Book Name</strong</th>
                    <th><strong>Category Name</strong></th>
                     <th><strong>No Of Copies</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($novel); $i++) { ?>
                <tr>
                    <td><?php echo $novel[$i]->book_id; ?></td>
                    <td><?php echo $novel[$i]->book_name; ?></td>
                    <td><?php echo $novel[$i]->category_name; ?></td>
                    <td><?php echo $novel[$i]->no_copies; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>
    