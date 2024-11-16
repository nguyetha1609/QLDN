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
                                    <h4 class="card-title">Thêm gửi bằng chứng miễn thuế cho nhân viên</h4>                      
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
                                </div><!--end col-->

                                <div class="col-lg-6">    
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label text-end">Ngày nộp hồ sơ</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" id="example-search-input" required>
                                        </div>
                                    </div>                                     
                                    <div class="mb-3 row">
                                        <label for="example-url-input" class="col-sm-2 col-form-label text-end">Kỳ tính lương</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-url-input" required>
                                        </div>
                                    </div> 
                                    <div class="mb-3 row">
                                        <label for="example-url-input" class="col-sm-2 col-form-label text-end">Công ty</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-url-input" required>
                                        </div>
                                    </div>                                          
                                </div><!--end col-->
                            </div> <!--end row-->              
                        </div><!--end card-body--> 
                    </div><!--end card--> 

                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Chứng từ miễn thuế</h4>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>STT</th>
                                        <th>Danh mục phụ miễn</th>
                                        <th>Danh mục miễn</th>
                                        <th>Số tiền tối đa</th>
                                        <th>Loại bằng chứng</th>
                                        <th>Số tiền thực tế</th>
                                        <th><i class="far fa-sun"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h4 class="card-title">File đính kèm</h4>                      
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body pt-0">                                                   
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>                                   
                        </div><!--end card-body--> 
                    </div><!--end card-->  
                </div> 
            </div>
        </div>
    </div>
    </body>
</html>