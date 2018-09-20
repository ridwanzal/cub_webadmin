<?php include '../../model/connection.php';?>
<?php include './links.php';?>
<?php include './side_menu.php';?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.table-paginate').dataTable();
 } );
</script>

    <div id="content">
        <?php include 'header.php'; ?> 

        <div class="table-responsive table-paginate">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Browser</th>
                    <th scope="col">Operating System</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <?php
                    $query = mysqli_query($conn, "SELECT * FROM rb_users_aktivitas");
                    $no = 1;
                    while ($rows = mysqli_fetch_array($query)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $rows['browser']; ?></td>
                        <td><?php echo $rows['os']; ?></td>
                        <td><?php echo $rows['status']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>

<?php include './bottom_links.php';
