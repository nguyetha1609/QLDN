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
                                    <h4 class="card-title">Thêm tuyên bố miễn thuế nhân viên</h4>                      
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-end">Tên</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-text-input" required>
                                        </div>
                                    </div> 
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-end">Danh mục miễn thuế</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-text-input" required>
                                        </div>
                                    </div>   
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-end">Số tiền tối đa</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-text-input" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="card-body pt-0 ">                                                     
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Là hoạt động
                                                </label>
                                            </div>  
                                        </div><!--end card-body-->
                                    </div>                         
                                </div><!--end col-->

                                
                            </div> <!--end row-->              
                        </div><!--end card-body--> 
                    </div><!--end card--> 

                    <div class="row">
                        <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary px-4">Lưu</button>
                        </div>
                    </div> <!--end row--> 
                </div> 
            </div>
        </div>
    </div>
    </body>
</html>