




<div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
        <h2 class="page-header">Left Join Two Table</h2>
        <p class="alert alert-info"><small>Returns all the records from the left side table along with the matching records from the rightside table</small></p>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th><strong>Book ID</strong></th>
                    <th><strong>Book Name</strong</th>
                    <th><strong>Author Name</strong></th>
                    <th><strong>No Of Copies</strong></th>
                    <th><strong>Order Date</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($novel); $i++) { ?>
                <tr>
                    <td><?php echo $novel[$i]->book_id; ?></td>
                    <td><?php echo $novel[$i]->book_name; ?></td>
                    <td><?php echo $novel[$i]->author_name; ?></td>
                    <td><?php echo $novel[$i]->no_copies; ?></td>
                    <td><?php echo $novel[$i]->order_date; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>
    