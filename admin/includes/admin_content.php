<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN
                            <small>Dashboard</small>
                        </h1>

                        <?php 

                        // $user = new User();

                        // $user->username = "dupro28";
                        // $user->password = "sifra123";
                        // $user->first_name = "Dusko";
                        // $user->last_name = "Pro";
                        
                        // $user->create();
                        
                        // $user = User::find_by_id(14);

                        // $user->last_name = "Proko";

                        // $user->update();

                        // $user = User::find_by_id(12);

                        // $user->delete();

                            // $user = User::find_by_id(2);
                            // $user->username = "dule";
                            // $user->save();

                            // $user = new User();

                            // $user->username = "Ledu";
                            // $user->password = "123";
                            // $user->save();

                        // $photos = Photo::find_all();
                        // foreach ($photos as $photo) {
                        //     echo $photo->title;
                        // }


                        // $photo = new Photo();

                        // $photo->title = "Test title";
                        // $photo->size = 22;
                        
                        // $photo->create();
                        
                        // $user = User::find_by_id(14);

                        // $user->last_name = "Proko";

                        // $user->update();

                        // $photo = Photo::find_by_id(3);

                        // $photo->delete();

                            // $user = User::find_by_id(2);
                            // $user->username = "dule";
                            // $user->save();

                            // $user = new User();

                            // $user->username = "Ledu";
                            // $user->password = "123";
                            // $user->save();

                        


                        ?>



<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $session->count; ?></div>
                                        <div>New Views</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-photo fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Photo::count_all(); ?></div>
                                        <div>Photos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="photos.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Photos in Gallery</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo User::count_all(); ?>

                                        </div>

                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Users</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Comment::count_all(); ?></div>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                        </div> <!--First Row-->
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->