<?php include '../../model/connection.php';?> 
<?php include './links.php';?>
<?php include './side_menu.php';?>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <svg class="svg-inline--fa fa-align-left fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z"></path></svg><!-- <i class="fas fa-align-left"></i> -->
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="svg-inline--fa fa-align-justify fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="align-justify" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 84V44c0-8.837 7.163-16 16-16h416c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16zm16 144h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0-128h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-align-justify"></i> -->
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>

            <h2>Add User</h2>
            <div class="main-content">
            <div class="row">
                    <div class="col-md-4">
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">
                                <div class="panel panel-default">  
                                    <p class="panel-heading">Form Admin</p>
                                    <div class="panel-body">	  
                                        <form id="tab" action="proses" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input name="name" id="name" type="text"  class="form-control">
                                                <label>Username</label>
                                                <input name="username" id="username" type="text"  class="form-control">
                                                <label>Password</label>
                                                <input name="password" id="password" type="password"  class="form-control">
                                                <label>Telephone</label>
                                                <input name="telp" id="telp" type="text"  class="form-control">
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
                                                <input type="submit" name="input_user" value="submit" class="btn btn-primary">
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