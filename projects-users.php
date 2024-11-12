<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>
    <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <?php
        require 'main.php';
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Users Details</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <button class="btn bg-primary-subtle text-primary"><i class="fas fa-plus me-1"></i> Add User</button>  
                                            <button class="btn btn-primary"><i class="fas fa-plus me-1"></i> Invite User</button>           
                                        </div><!--end col-->
                                    </div><!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0" id="datatable_1">
                                            <thead class="table-light">
                                              <tr>
                                                <th>Name</th>
                                                <th>ID</th>
                                                <th>Roal</th>
                                                <th>Last activity</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Unity Pugh</h6>
                                                                <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#9958</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Scott Holland</h6>
                                                                <a href="#" class="fs-12 text-primary">exemple@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#3625</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Member</a></td>
                                                    <td>Yesterday, 10:15pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Karen Savage</h6>
                                                                <a href="#" class="fs-12 text-primary">extradummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#9514</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Admin</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-3.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Steven Sharp</h6>
                                                                <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#9958</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Leader</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-4.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Teresa Himes</h6>
                                                                <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#4545</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Sub.Manager</a></td>
                                                    <td>2 mar 2024, 07:30pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-5.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Ralph Denton</h6>
                                                                <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#6325</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Unity Pugh</h6>
                                                                <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#9958</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Scott Holland</h6>
                                                                <a href="#" class="fs-12 text-primary">exemple@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#3625</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Member</a></td>
                                                    <td>Yesterday, 10:15pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Karen Savage</h6>
                                                                <a href="#" class="fs-12 text-primary">extradummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#9514</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Admin</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-3.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Steven Sharp</h6>
                                                                <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#9958</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Leader</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-4.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Teresa Himes</h6>
                                                                <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#4545</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Sub.Manager</a></td>
                                                    <td>2 mar 2024, 07:30pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-5.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Ralph Denton</h6>
                                                                <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#6325</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>  
                                                <tr>
                                                    <td class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0">Karen Savage</h6>
                                                                <a href="#" class="fs-12 text-primary">extradummy@gmail.com</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>#9514</td>
                                                    <td><a href="#" class="text-body text-decoration-underline">Admin</a></td>
                                                    <td>Today, 02:30pm</td>
                                                    <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>                                                                                     
                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->                                     
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
                                            Rizz
                                            <span
                                                class="text-muted d-none d-sm-inline-block float-end">
                                                Crafted with
                                                <i class="iconoir-heart text-danger"></i>
                                                by Mannatthemes</span>
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
        <script src="assets/libs/simple-datatables/umd/simple-datatables.js"></script>
        <script src="assets/js/pages/datatable.init.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
    <!--end body-->

projects-users 15:06:55 GMT -->
</html>