<html>
    <head>
        <?php         
            require '../bootstrap.php';
        ?>  
    </head>
    <body>
    <?php
        require '../topbar.php';
        require '../menu.php';
    ?>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-xxl">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h4 class="card-title">Thêm chuyển nhượng cấu trúc lương</h4>                      
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-end">Nhân viên</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-text-input" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-end">Công ty</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-email-input" required>
                                        </div>
                                    </div>                         
                                </div><!--end col-->
                                <div class="col-lg-6">    
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label text-end">Cơ cấu tiền lương</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-search-input" required>
                                        </div>
                                    </div>                                     
                                    <div class="mb-3 row">
                                        <label for="example-url-input" class="col-sm-2 col-form-label text-end">Từ ngày</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" id="example-url-input" required>
                                        </div>
                                    </div> 
                                            
                                    <div class="mb-3 row has-warning">
                                        <label for="inputHorizontalWarning" class="col-sm-2 col-form-label text-end">Bảng thuế thu nhập</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-warning" id="inputHorizontalWarning">
                                        </div>
                                    </div>
                                    <div class="mb-3 row has-warning">
                                        <label for="inputHorizontalWarning" class="col-sm-2 col-form-label text-end">Đơn vị tiền tệ</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-warning" id="inputHorizontalWarning" required>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div> <!--end row-->              
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> 
            </div>
        </div>
    </div>
    </body>
</html>