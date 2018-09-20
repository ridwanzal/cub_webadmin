<?php include '../../model/connection.php';?> 
<?php include './links.php';?>
<?php include './side_menu.php';?>
        <div id="content">
            <?php include 'header.php'; ?>

            <h2>Add User</h2>
            <div class="main-content">
            <div class="row">
                    <div class="col-md-4">
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">
                                <div class="panel panel-default">  
                                    <p class="panel-heading">Form Admin</p>
                                    <div class="panel-body">	  
                                        <form id="tab" action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input name="name" id="name" type="text"  class="form-control">
                                                <label>Username</label>
                                                <input name="username" id="username" type="text"  class="form-control">
                                                <label>Password</label>
                                                <input name="password" id="password" type="password"  class="form-control">
                                                <label>Telephone</label>
                                                <input name="tlpn" id="tlpn" type="text"  class="form-control">
                                                <label>Email</label>
                                                <input name="email" id="email" type="text"  class="form-control">
                                                <label>Alamat</label>
                                                <textarea name="alamat" id="alamat"  class="form-control"></textarea>
                                                <label>Status</label>
                                                <select  id="status"  name="status" class="form-control">
                                                    <option selected="selected" value="Y">Aktif</option>
                                                    <option value="T">Tidak</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="input_user" id="input_user" value="submit" class="btn btn-primary">
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    </div>

                </div>
            <div class="line"></div>

        </div>
<?php include './bottom_links.php';?>