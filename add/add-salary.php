<html>
<head>
<?php
         
        require '../main.php';
        ?>
</head>
<body>
    <?php
        require '../topbar.php';
        ?>
        <?php
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
                                            <h4 class="card-title">Custom Styles</h4>                      
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
                                                    <label for="username" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="username" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="useremail">Email address</label>
                                                    <input type="email" class="form-control" id="useremail" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" id="subject" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">                            
                                                <div class="mb-3">
                                                    <label class="form-label" for="message">Message</label>
                                                    <textarea class="form-control" rows="5" id="message" style="height: 106px;"></textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-end">
                                                <button type="submit" class="btn btn-primary px-4">Send Message</button>
                                            </div>
                                        </div>
                                    </form>      
                                </div><!--end card-body--> 
                                </div><!--end col--> 
                                <div class="col-5">
                                <div class="card-body pt-0 ">                                    
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Phụ thuộc vào ngày thanh toán
                                                    </label>
                                                </div> 
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Thuế có thể áp dụng
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Khấu trừ thuế đầy đủ vào ngày biên chế được chọn
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Làm tròn đến số nguyên gần nhất
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Hợp phần Thống kê
                                                    </label>
                                                    <p class="help-box small text-muted">Nếu được chọn, giá trị được xác định hoặc tính trong thành phần
                                                         này sẽ không đóng góp vào thu nhập hoặc khấu trừ. Tuy nhiên, giá trị của nó có thể được tham chiếu
                                                          bởi các thành phần khác có thể được thêm vào hoặc khấu trừ.</p>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Không bao gồm trong tổng số
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Vô hiệu hoá
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
                            <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Contextual Classes</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">                                    
                                    <div class="table-responsive-sm">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-primary">
                                                    <th scope="row">1</th>
                                                    <td class="">Mark</td>
                                                    <td class="">Otto</td>
                                                    <td class="">@mdo</td>
                                                </tr>
                                                <tr class="">
                                                <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr class="table-secondary">
                                                    <th scope="row">3</th>
                                                    <td class="">Larry</td>
                                                    <td class="">the Bird</td>
                                                    <td class="">@twitter</td>
                                                </tr>
                                                <tr class="">
                                                    <th scope="row">4</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr class="table-success">
                                                <th scope="row">5</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr class="">
                                                    <th scope="row">6</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr class="table-info">
                                                <th scope="row">7</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr class="">
                                                    <th scope="row">8</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr class="table-warning">
                                                <th scope="row">9</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr class="">
                                                    <th scope="row">10</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->    
                                    </div><!--end card-body--> 
                                </div><!--end card-->
                            </div>  <!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end page-->
    </div><!--end page-->
</body>
</html>