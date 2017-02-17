


<div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
        <h2 class="page-header">Right Join(or right outer join) Two Table</h2>
        <p class="alert alert-info"><small>Returns all the records from the right side table along with the matching records from the left side table.</small></p>
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