<?php 
            include './config/db.php';
            include './assets/utilities/hPayment.php';
            if(!$_SESSION['login']){
                header("location:index.php");
                die;
             };
             include './controllers/time.php';
            
            $student_id = $_GET['id'];
            $update = true;
            $sql = "SELECT * FROM payment_details WHERE id=$student_id";
            $record = mysqli_query($connection, $sql);
            $row = mysqli_fetch_array($record, MYSQLI_ASSOC);
            ?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg bg-12">
                    <div class="container-fluid">
                        <a class="" id="sidebarToggle"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.7188 9C17.7188 4.18359 13.8164 0.28125 9 0.28125C4.18359 0.28125 0.28125 4.18359 0.28125 9C0.28125 13.8164 4.18359 17.7187 9 17.7188C13.8164 17.7188 17.7187 13.8164 17.7188 9ZM9 16.5938C4.82695 16.5938 1.40625 13.2152 1.40625 9C1.40625 4.82695 4.78477 1.40625 9 1.40625C13.173 1.40625 16.5938 4.78477 16.5938 9C16.5938 13.173 13.2152 16.5938 9 16.5938ZM10.125 12.375L6.75 9L10.125 5.625L10.125 12.375ZM11.25 5.625C11.25 4.62656 10.0371 4.12031 9.33047 4.83047L5.95547 8.20547C5.51602 8.64492 5.51602 9.35859 5.95547 9.79805L9.33047 13.173C10.0371 13.8797 11.25 13.3805 11.25 12.3785L11.25 5.625Z" fill="#C4C4C4"/>
                            </svg>
                            </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <svg viewBox="0 0 100 80" width="40" height="40">
                                <rect width="100" height="10"></rect>
                                <rect y="30" width="100" height="10"></rect>
                                <rect y="60" width="100" height="10"></rect>
                              </svg>                              
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0 mynav">
                                <li class="nav-item active">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </li>
                                <li class="nav-item item1">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.5003 18.75C9.17044 18.75 9.71459 18.1883 9.71459 17.4988H10.9289C10.9289 18.8781 9.83905 20 8.5003 20C7.16155 20 6.07173 18.8781 6.07173 17.4988H7.28602C7.28602 18.1883 7.83017 18.75 8.5003 18.75ZM0.555078 13.0785C1.61606 12.0387 2.42736 10.9504 2.42736 7.26172C2.42736 4.15273 4.83278 1.61719 7.89316 1.31055V0.625C7.89316 0.279687 8.16486 0 8.5003 0C8.83575 0 9.10745 0.279687 9.10745 0.625V1.31094C12.1678 1.61758 14.5733 4.15273 14.5733 7.26172C14.5733 10.95 15.3849 12.0387 16.4459 13.0785C16.976 13.598 17.1434 14.3836 16.8728 15.0797C16.5966 15.7906 15.9317 16.25 15.1789 16.25H1.82173C1.06887 16.25 0.404051 15.7902 0.127801 15.0793C-0.142757 14.3832 0.0249662 13.598 0.555078 13.0785V13.0785ZM1.82173 15H15.1789C15.7189 15 15.9887 14.3566 15.6084 13.984C14.2856 12.6875 13.359 11.2363 13.359 7.26211C13.359 4.63008 11.1858 2.5 8.5003 2.5C5.81521 2.5 3.64164 4.62969 3.64164 7.26172C3.64164 11.2207 2.72296 12.6797 1.39218 13.9836C1.01044 14.3582 1.28403 15 1.82173 15Z" fill="#C4C4C4"/>
                                    </svg>                                        
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid m123">
                    <div class="mycontainer2 border-bottom">
                        <p class="stitle1">Payment Details</p>
                        <ul class="myul2">
                            <li><svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.6 11.375H1.39998C0.157481 11.375 -0.472519 12.8574 0.411231 13.7211L6.01123 19.2211C6.55811 19.7582 7.44623 19.7582 7.99311 19.2211L13.5931 13.7211C14.4681 12.8574 13.8425 11.375 12.6 11.375ZM6.99998 18.25L1.39998 12.75H12.6L6.99998 18.25ZM1.39998 8.625H12.6C13.8425 8.625 14.4725 7.14257 13.5887 6.2789L7.98873 0.7789C7.44186 0.241791 6.55373 0.241791 6.00686 0.7789L0.406856 6.2789C-0.468144 7.14257 0.157481 8.625 1.39998 8.625ZM6.99998 1.74999L12.6 7.24999H1.39998L6.99998 1.74999Z" fill="#00C1FE"/>
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <div class="showp">
                        <form method="POST" class="formshow">
                            <div class="fromcon">
                            <div class="mb-3">
                                <label for="name" class="form-label">name</label>
                                <input disabled type="text" name="name" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['fName']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Email1" class="form-label">Payment Schedule</label>
                                <input disabled type="text" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['PaymentSchedule']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">Bill Number</label>
                                <input disabled type="text" name="number" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['BillNumber']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="AmountPaid" class="form-label">Amount Paid</label>
                                <input disabled type="text" name="AmountPaid" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['AmountPaid']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="dateofadmission" class="form-label">Blanace Amount</label>
                                <input disabled type="number" name="dateofadmission" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['Blanaceamount']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="dateofadmission" class="form-label">Blanace Amount</label>
                                <input disabled type="date" name="dateofadmission" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['tDate']; ?>">
                            </div>
                            </div>                        
                        </form>   
                    </div>

                </div>
            </div>
        </div> 
        <?php
           include './assets/utilities/fdashboard.php';
        ?>