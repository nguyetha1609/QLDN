<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>       
                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">
         <!-- App css -->
        <?php
            require 'bootstrap.php';
        ?>
    </head>
    <body>
        <?php
            require 'topbar.php';
            require 'menu.php';
        ?>
        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-xxl">
                    <div class="row justify-content"> 
                    <div class="col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card">
                                    <h3 class="text-dark mb-0 fw-semibold fs-14">shortcut</h3> 
                                </div><!--end card-->
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn rounded-pill btn-primary">Cơ cấu tiền lương<i class="fa-solid fa-arrow-right-long"></i></button>
                                <button type="button" class="btn rounded-pill btn-primary">Phiếu lương <i class="fa-solid fa-arrow-right-long"></i></button>
                                <button type="button" class="btn rounded-pill btn-primary">Bảng thuế thu nhập <i class="fa-solid fa-arrow-right-long"></i></button>
                                <button type="button" class="btn rounded-pill btn-primary">Bảng lương <i class="fa-solid fa-arrow-right-long"></i></button>
                                <button type="button" class="btn rounded-pill btn-primary">Bảng thông tin tổng hợp<i class="fa-solid fa-arrow-right-long"></i></button> 
                            </div><!--end button-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Bảng lương</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="salary.php">Phần lương</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right me-2"></i><a href="salary-structure.php">Cơ cấu tiền lương</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="transfer-salary.php">Chuyển nhượng cấu trúc lương</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="payslip.php">Phiếu lương</a></li></a>
                                    </ul>
                                </div><!--end card-body1--> 
                            </div><!--end card--> 
                        </div><!--end col--> 
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Taxation</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="payroll-period.php">Kỳ tính lương</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="income-tax.php">Bảng thuế thu nhập</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="other-income.php">Thu nhập khác của nhân viên</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="declaration.php">Tuyên bố miễn thuế nhân viên</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="proof.php">Gửi bằng chứng miễn thuế cho nhân viên</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="categories.php">Danh mục miễn thuế của nhân viên</a></li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i><a href="subcategories.php">Danh mục phụ miễn thuế cho nhân viên</a></li></a>
                                    </ul>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Compensations</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Mức lương bổ sung</li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Tiền thưởng duy trì</li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Khuyến khích nhân viên</li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Đơn xin hưởng quyền lợi cho nhân viên</li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Khiếu nại về quyền lợi nhân viên</li></a>
                                    </ul>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Báo cáo</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Bảng lương</li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Trả lương dựa trên phương thức thanh toán</li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Thanh toán lương qua ECS</li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Các khoản khấu trừ thuế thu nhập</li></a>
                                        <li class="list-group-item list-group-item-action"><a href="#" class="text-dark"><i class="la la-arrow-right text-secondary me-2"></i>Chuyển tiền qua ngân hàng</li></a>
                                    </ul>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col--> 
                    </div><!--end row-->                                                                          
                </div><!-- container -->
                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->
                <!--Start Footer-->
                
                <footer class="footer text-center text-sm-start d-print-none">
                    <div class="container-xxl">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0 rounded-bottom-0">
                                    <div class="card-body">
                                        <p class="text-muted mb-0">
                                            ©
                                            <script> document.write(new Date().getFullYear()) </script>
                                            Công ty M-offer      
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->  
        <!-- vendor js -->
        
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>

        <script src="assets/js/app.js"></script>
    </body>
    <!--end body-->
</html>