<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">History Data</h2>
                        <h5 class="text-white op-7 mb-2"><b>IoT</b> Smart Classroom Dashboard</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="card card-stats card-round">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Device Tabel</h4>
                                <button class="btn btn-danger btn-round ml-auto" name="delete_all" id="delete_all">
                                    <i class="fa fa-plus"></i>
                                    Delete
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="device-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Id</th>
                                            <th>Time</th>
                                            <th>Lamp1</th>
                                            <th>Lamp2</th>
                                            <th>Ac1</th>
                                            <th>Ac2</th>
                                            <th>Projector</th>
                                            <th>Suhu</th>
                                            <th>Humid</th>
                                            <th>Occup</th>
                                            <th class="ml-md-auto"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="device_data">
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>