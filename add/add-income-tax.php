<!DOCTYPE html>
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
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h2 class="card-title">Thêm bảng thuế thu nhập</h2>                      
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-end">Tên</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-text-input" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-end">Có hiệu lực từ</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" id="example-email-input" required>
                                        </div>
                                    </div> 
                                    <div class="mb-3 row">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label text-end">Công ty</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="tel" id="example-tel-input">
                                        </div>
                                    </div>                          
                                </div><!--end col-->
    
                                <div class="col-lg-6">                                                                         
                                      
                                    <div class="mb-3 row has-warning">
                                        <label for="inputHorizontalWarning" class="col-sm-2 col-form-label text-end">Đơn vị tiền tệ</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-warning" id="inputHorizontalWarning" required>
                                        </div>
                                    </div>

                                    <div class="mb-2 row">
                                        <div class="card-body pt-0 ">                                                     
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Cho phép miễn thuế
                                                </label>
                                            </div>  
                                        </div><!--end card-body-->
                                    </div> 
                                    
                                    <div class="mb-2 row">
                                        <div class="card-body pt-0 ">                                                     
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Vô hiệu hóa
                                                </label>
                                            </div>  
                                        </div><!--end card-body-->
                                    </div> 
                                       
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" class="btn btn-primary px-4">Lưu</button>
                                        </div>
                                    </div>                                         
                                </div><!--end col-->
                            </div> <!--end row-->              
                        </div><!--end card-body--> 
                    </div><!--end cart-->
                </div><!--end row-->
            </div><!--end container-xxl-->
        </div><!--end page-content-->
    </div><!--end page-wrapper-->
</body>
</html>