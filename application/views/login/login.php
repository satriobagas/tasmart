    <div class="wrapper sidebar_minimize">
        <!-- Sidebar -->
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Login Page</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">SmartClassroom</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto mr-auto">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"><i class="flaticon-network"></i> Login SmartClassroom</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg">
                                            <form class="user" method="POST" action="<?= base_url('login'); ?>">
                                                <div class="form-group form-floating-label">
                                                    <div class="input-icon">
                                                        <input type="text" value="<?= set_value('username'); ?>" id="username" name="username" class="form-control input-border-bottom" required="">
                                                        <label for="username" class="placeholder">Username</label>
                                                    </div>
                                                    <?= form_error('username', '<small class="form-text text-danger">', '</small>') ?>
                                                </div>
                                                <div class="form-group form-floating-label">
                                                    <div class="input-icon mt-1">
                                                        <input type="password" id="password" name="password" class="form-control input-border-bottom" required="">
                                                        <label for="password" class="placeholder">Password</label>
                                                    </div>
                                                    <?= form_error('password', '<small class="form-text text-danger">', '</small>') ?>
                                                </div>
                                                <button type="submit" class="btn btn-success btn-round btn-lg center mt-4">Sign In</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>