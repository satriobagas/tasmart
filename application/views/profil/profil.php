<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Profile User</h4>
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
                        <a href="#">User</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Profile User</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#editModal1">
                                    <i class="fa fa-plus"></i>
                                    Edit Profile
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row col-sm-12">
                                <div class="col-md-3 align-items-center pl-md-5">
                                    <div class="avatar avatar-xxl">
                                        <img src="<?php echo base_url() . 'assets/img/profile.png' ?>" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <b>Username :</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5><text name="username1" id="username1"></text></h5>
                                            <div class="separator-dashed"></div>
                                        </div>
                                    </div>

                                    <div class="row mt-1">
                                        <div class="col-md-8">
                                            <b>Id Grup :</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5><text name="id_grup1" id="id_grup1"></text></h5>
                                            <div class="separator-dashed"></div>
                                        </div>
                                    </div>

                                    <div class="row mt-1">
                                        <div class="col-md-8">
                                            <b>Nama :</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5><text name="name1" id="name1"></text></h5>
                                            <div class="separator-dashed"></div>
                                        </div>
                                    </div>

                                    <div class="row mt-1">
                                        <div class="col-md-8">
                                            <b>E - Mail :</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 name="email1" id="email1"></h5>
                                            <div class="separator-dashed"></div>
                                        </div>
                                    </div>

                                    <div class="row mt-1">
                                        <div class="col-md-8">
                                            <b>Telepon :</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 name="tlp1" id="tlp1"></h5>
                                            <div class="separator-dashed"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editModal1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Edit</span>
                                                <span class="fw-light">
                                                    User
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <input name="username_edit1" id="username3" type="text" class="form-control" placeholder="Username" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <input name="pass_edit1" id="pass3" type="password" autocomplete="on" class="form-control" placeholder="Password" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <select class="form-control" name="id_grup_edit1" id="id_grup3">
                                                                <option value="">Pilih Grup</option>
                                                                <?php

                                                                $grup = array('admin', 'user');
                                                                foreach ($grup as $ig) {
                                                                    if ($ig == $id_grup) $sel = "SELECTED";
                                                                    else $sel = '';
                                                                    echo "<option value=$ig $sel>" . ucfirst($ig) . "</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <input name="name_edit1" id="name3" type="text" class="form-control" placeholder="Nama Lengkap" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <input name="email_edit1" id="email3" type="text" class="form-control" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <input name="tlp_edit1" id="tlp3" type="text" class="form-control" placeholder="Phone Number" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer no-bd">
                                            <button type="button" id="btn_update1" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
</div>