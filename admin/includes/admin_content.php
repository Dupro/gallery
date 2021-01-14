<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN DASHBOARD
                            <small>Subheading</small>
                        </h1>

                        <?php 

                        // $user = new User();

                        // $user->username = "Korpa";
                        // $user->password = "paket";
                        // $user->first_name = "Lui";
                        // $user->last_name = "Vitton";
                        
                        // $user->create();
                        
                        // $user = User::find_user_by_id(4);

                        // $user->last_name = "WILLIAMS";

                        // $user->update();

                        // $user = User::find_user_by_id(4);

                        // $user->delete();

                            // $user = User::find_user_by_id(2);
                            // $user->username = "dule";
                            // $user->save();

                            $user = new User();

                            $user->username = "Elon";
                            $user->password = "123";
                            $user->save();

                            echo phpinfo();
                        ?>





                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->