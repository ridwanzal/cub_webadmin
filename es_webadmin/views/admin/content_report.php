<?php include '../../model/connection.php';?> 
<?php include './links.php';?>
<?php include './side_menu.php';?>
        <div id="content">
            <?php include 'header.php';?>

            <h2>User List</h2>
            <div class="main-content">

                <div class="btn-toolbar list-toolbar">
                    <a class="btn btn-primary" href="./content_adduser.php"><i class="fa fa-plus"></i></a>
                </div>
                <div class="table-responsive">
                    <form method="post" name="form1" action="proses.php">
                        <table class="table table-hover table-striped" id="_tbl">
                            <thead>
                                <tr>
                                    <th align="center"><button type="submit" name="drop_rekening" title="delete all"><img src="../asset/img/drop.png" width="25" height="25" onclick ="return confirm('Anda yakin ?');"/></button></th>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Tlp</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th align="center">Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM user ");
                            $no = 1;
                            while ($rows = mysqli_fetch_array($query)) {
                                ?>

                                <tr>
                                    <td align="center" width="50"><input type="checkbox" name="check[]" value="<?php echo $rows['id_user']; ?>">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $rows['username']; ?></td>
                                    <td><?php echo $rows['no_telepon']; ?></td>
                                    <td><?php echo $rows['email']; ?></td>
                                    <td><?php echo $rows['alamat']; ?></td>
                                    <td width="100" align="center"><a href="proses_delete?id_admin=<?php echo $rows['id_admin']; ?>"><i class="fa fa-trash-o" onclick ="return confirm('Anda yakin ?');" title="delete"></i></a>   <a href="update_admin?id_admin=<?php echo $rows['id_admin']; ?>"><i class="fa fa-pencil" onclick ="return confirm('Anda yakin akan mengubah data ?');" title="edit"></i></a></td>
                                </tr>
                            <?php } ?>

                        </table>
                    </form>
                </div>

            </div>
            
        </div>
<?php include './bottom_links.php';?>