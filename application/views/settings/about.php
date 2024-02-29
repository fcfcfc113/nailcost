<div class="card card-block">
    <div id="notify" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="message"></div>
    </div>
    <form method="post" id="product_action" class="card-body">
        <div class="card-body">
            <h5>About</h5>
            <hr>
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <h3>BUSINESS MANAGEMENT SOFTWARE Nails Cost, Inc.</h3><h5><?php $url = file_get_contents(FCPATH . '/version.json');
                        $version = json_decode($url, true);
                        echo 'V ' . $version['version'] . ' (b' . $version['build'] . ')'; ?></h5> 
                        <h6>
                        Đơn vị chủ quản hệ thống phần mềm CTY TNHH GIẢI PHÁP CÔNG NGHỆ CAMERA DI ĐỘNG =><a
                                href="#"> [ DataCenter Viettel IDC ISO 9001 ]</a>
                    </h6>
                        <h6>
                        Copyright © Backend <?= date('Y') ?> <a
                                href="https://dev.nailcost.com">Developer Minh Hoàng</a>
                    </h6>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $("#time_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/dtformat';
        actionProduct(actionurl);
    });
</script>
