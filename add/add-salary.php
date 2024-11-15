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
                <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Thêm phần lương</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="d-flex">
                                <div class="col-7">
                                <div class="card-body pt-0">                                    
                                    <form class="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Tên</label>
                                                    <input type="text" class="form-control" id="" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="useremail">Viết tắt</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="subject">Loại</label>
                                                    <input type="text" class="form-control" id="subject" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">                            
                                                <div class="mb-3">
                                                    <label class="form-label" for="message">Mô tả</label>
                                                    <textarea class="form-control" rows="5" id="message" style="height: 106px;"></textarea>
                                                </div>
                                            </div>           
                                        </div>
                                    </form>      
                                </div><!--end card-body--> 
                                </div><!--end col--> 
                                <div class="col-5">
                                <div class="card-body pt-0 ">                                                     
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Thuế có thể áp dụng
                                        </label>
                                    </div>  
                                </div><!--end card-body-->
                                </div><!--end col--> 
                                </div><!--end d-flex-->                   
                                </div><!--end card-->
                            </div><!--end col--> 
                            <div class="col-md-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Lợi ích linh hoạt</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->  
                                    </div><!--end card-->
                                    <div class="d-flex">
                                    <div class="col-6">
                                    <div class="card-body pt-0 ">                                    
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Lợi ích linh hoạt
                                                    </label>
                                                </div> 
                                            </div>
                                            <div class="form-check col-6">
                                            <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Số tiền lợi ích tối đa (hàng năm)</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0,00">
                                        </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-6">
                                    <div class="card-body pt-0">                                    
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Trả tiền chống khiếu nại phúc lợi
                                                    </label>
                                                </div> 
                                            </div>
                                            <div class="card-body pt-0">                                    
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Chỉ có tác động về thuế (không thể yêu cầu nhưng một phần thu nhập chịu thuế)
                                                    </label>
                                                </div> 
                                            </div>
                                            <div class="card-body pt-0">                                    
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Tạo khoản thanh toán riêng biệt chống lại khiếu nại lợi ích
                                                    </label>
                                                </div> 
                                            </div>
                                    </div><!--end col-->
                                    </div><!--end d-flex-->
                                </div><!--end card-->
                            </div><!--end col-->  
                            <div class="row">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" class="btn btn-primary px-4">Lưu</button>
                                </div>
                            </div>
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end page-->
    </div><!--end page-->
</body>
</html>