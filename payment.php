            <?php
            include './assets/utilities/hPayment.php';
            include './assets/function/db.php';
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
                            <li><a type="button" class="add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD NEW STUDENT</a></li>
                        </ul>
                    </div>
                    <div class="res-table">
                    <table class="table">
                        <thead>
                          <tr class="theader1">
                            <th scope="col">Name</th>
                            <th scope="col">Payment Schedule</th>
                            <th scope="col">Bill Number</th>
                            <th scope="col">Amount Paid</th>
                            <th scope="col">Blanace amount</th>
                            <th scope="col">Date</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                                // show data
                                $sql = "SELECT id, fname, PaymentSchedule, BillNumber, 	AmountPaid, Blanaceamount FROM payment_details";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($student = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>'.$student['fname'].'</td>';
                                    echo '<td>'.$student['PaymentSchedule'].'</td>';
                                    echo '<td>'.$student['BillNumber'].'</td>';
                                    echo '<td>'.$student['AmountPaid'].'</td>';
                                    echo '<td>'.$student['Blanaceamount'].'</td>';
                                    echo '<td>
                                        <a href="./edit.php?id='.$student['id'].'"><svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.49999 6.875C7.94201 6.875 8.36594 6.69063 8.6785 6.36244C8.99106 6.03425 9.16665 5.58913 9.16665 5.125C9.16665 4.66087 8.99106 4.21575 8.6785 3.88756C8.36594 3.55937 7.94201 3.375 7.49999 3.375C7.47394 3.375 7.45103 3.38156 7.42577 3.38293C7.50608 3.61516 7.52164 3.86664 7.47063 4.10783C7.41961 4.34903 7.30413 4.56994 7.13774 4.74465C6.97136 4.91935 6.76096 5.04061 6.53125 5.09417C6.30154 5.14774 6.06205 5.1314 5.84087 5.04707C5.84087 5.07441 5.83332 5.09848 5.83332 5.125C5.83332 5.35481 5.87643 5.58238 5.96019 5.7947C6.04394 6.00702 6.16671 6.19993 6.32147 6.36244C6.63403 6.69063 7.05796 6.875 7.49999 6.875ZM14.9094 5.60078C13.4971 2.70754 10.7013 0.75 7.49999 0.75C4.29868 0.75 1.50207 2.70891 0.0906108 5.60105C0.0310383 5.72479 0 5.86149 0 6.00014C0 6.13878 0.0310383 6.27549 0.0906108 6.39922C1.50285 9.29246 4.29868 11.25 7.49999 11.25C10.7013 11.25 13.4979 9.29109 14.9094 6.39895C14.9689 6.27521 15 6.13851 15 5.99986C15 5.86122 14.9689 5.72451 14.9094 5.60078ZM7.49999 1.625C8.15926 1.625 8.80372 1.83027 9.35188 2.21486C9.90005 2.59944 10.3273 3.14607 10.5796 3.78561C10.8319 4.42515 10.8979 5.12888 10.7693 5.80782C10.6407 6.48675 10.3232 7.11039 9.85701 7.59987C9.39083 8.08936 8.79689 8.4227 8.15029 8.55775C7.50368 8.6928 6.83346 8.62349 6.22437 8.35858C5.61529 8.09367 5.09469 7.64507 4.72842 7.0695C4.36215 6.49392 4.16665 5.81723 4.16665 5.125C4.16762 4.19705 4.51912 3.3074 5.14403 2.65125C5.76894 1.99509 6.61623 1.62601 7.49999 1.625ZM7.49999 10.375C4.70415 10.375 2.14946 8.69855 0.833319 6C1.57354 4.47419 2.7573 3.23556 4.21301 2.46363C3.66952 3.20246 3.33332 4.11793 3.33332 5.125C3.33332 6.28532 3.77231 7.39812 4.55371 8.21859C5.33511 9.03906 6.39492 9.5 7.49999 9.5C8.60505 9.5 9.66486 9.03906 10.4463 8.21859C11.2277 7.39812 11.6667 6.28532 11.6667 5.125C11.6667 4.11793 11.3305 3.20246 10.787 2.46363C12.2427 3.23556 13.4264 4.47419 14.1667 6C12.8508 8.69855 10.2958 10.375 7.49999 10.375Z" fill="#00C1FE"/>
                                        </svg>
                                        </a></td>
                                    ';
                                    echo '</tr>';
                                }
                                }
                                else {
                                    echo '<div class="alert alert-warning" role="alert">Sorry no data available</div>';
                                }


                                ?>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Enter user info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" name="name" class="form-control" id="" aria-describedby="Recipient's username" required>
                        </div>
                        <div class="mb-3">
                            <label for="Email1" class="form-label">Payment Schedule</label>
                            <input type="text" name="PaymentSchedule" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">BillNumber</label>
                            <input type="number" name="BillNumber" class="form-control" id="" aria-describedby="Recipient's username" required>
                        </div>
                        <div class="mb-3">
                            <label for="enroolnum" class="form-label">Amount Paid</label>
                            <input type="number" name="AmountPaid" class="form-control" id="" aria-describedby="Recipient's username" required>
                        </div>
                        <div class="mb-3">
                            <label for="dateofadmission" class="form-label">Blanace Amount</label>
                            <input type="number" name="Blanaceamount" class="form-control" id="" aria-describedby="Recipient's username" required>
                        </div>
                        <div class="mb-3">
                            <label for="dateofadmission" class="form-label">Blanace Amount</label>
                            <input type="date" name="date" class="form-control" id="" aria-describedby="Recipient's username" required>
                        </div>
                        
                        <input class="btn btn-primary" type="submit" name="save" value="Save">
                        
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div> 
            <?php 
                if(isset($_POST['save'])){
                    // taking values from the form
                    $fName =  $_POST['name'];
                    $paiment = $_POST['PaymentSchedule'];
                    $bill =  $_POST['BillNumber'];
                    $AmountPaid = $_POST['AmountPaid'];
                    $Blanaceamount = $_POST['Blanaceamount'];
                    $Date = $_POST['date'];
                        
                    // adding it to the data base
                    $sql = "INSERT INTO payment_details VALUES (null,'$fName', 
                        '$paiment','$bill','$AmountPaid','$Blanaceamount','$Date')";
                        
                    if(mysqli_query($conn, $sql)){
                        echo "<script>window.location.href = './student.php';</script>";
                    } else{
                        echo "ERROR: Hush! Sorry $sql. " 
                            . mysqli_error($conn);
                    }
                        
                    // Close connection
                    mysqli_close($conn);
                }
            ?>
        <?php
           include './assets/utilities/fdashboard.php';
        ?>