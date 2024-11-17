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
                                    <h2 class="card-title">Thêm cơ cấu tiền lương</h2>                      
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
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-end">Công ty</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-email-input" required>
                                        </div>
                                    </div> 
                                    <div class="mb-3 row">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label text-end">Tiêu đề thư</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-tel-input">
                                        </div>
                                    </div>                          
                                </div><!--end col-->
    
                                <div class="col-lg-6">    
                                    <div class="mb-2 row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label text-end">Là hoạt động</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Có</option>
                                                <option value="1">Không</option>
                                            </select>
                                        </div>
                                    </div>                                     
                                    <div class="mb-2 row">
                                        <label for="example-url-input" class="col-sm-2 col-form-label text-end">Chu kỳ phát lương</label>
                                        <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example">
                                                <option selected="">Hàng tháng</option>
                                                <option value="1">Mỗi tháng hai lần</option>
                                                <option value="2">Hai tháng một lần</option>
                                                <option value="3">Hàng ngày</option>
                                            </select>
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
                    </div><!--end cart-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Thu nhập</h4>                      
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <form>
                                    <div class="mb-3">
                                    <label class="form-label">Hợp phần</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Viết tắt</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Số tiền</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </form>                
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col--> 
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Các khoản giảm trừ</h4>                      
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                            <form>
                                    <div class="mb-3">
                                    <label class="form-label">Hợp phần</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Viết tắt</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Số tiền</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </form>                      
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col-->                                                       
                </div>

                <div class="row">
                    <div class="col-sm-12 text-end">
                        <button type="submit" class="btn btn-primary px-4">Lưu</button>
                    </div>
                </div> <!--end row--> 
            </div><!--end container-xxl-->
        </div><!--end page-content-->
    </div><!--end page-wrapper-->
</body>
</html>