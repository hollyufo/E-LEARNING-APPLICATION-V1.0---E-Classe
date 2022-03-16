                <?php
                    include './config/db.php';
                    include './assets/utilities/nstudent.php';
                    if(!$_SESSION['login']){
                        header("location:index.php");
                        die;
                     };
                     include './controllers/time.php';

                    $student_id = $_GET['id'];
                    $update = true;
                    $sql = "SELECT * FROM students WHERE id=$student_id";
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
                        <p class="stitle1">Edit student</p>
                    </div>
                    <div class="container">
                    <form method="POST" class="editform">
                        <div class="fromcon">
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" name="name" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['fName']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Email1" class="form-label">Email address</label>
                            <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['Email']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['Phone']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="enroolnum" class="form-label">enroolnum</label>
                            <input type="text" name="enroolnum" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['EnrollNumber']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="dateofadmission" class="form-label">date of admission</label>
                            <input type="text" name="dateofadmission" class="form-control" id="" aria-describedby="Recipient's username" value="<?php echo $row['AdmissionDate']; ?>">
                        </div>
                        
                        <input class="btn btn-primary" type="submit" class="btn btn-primary" name="save" value="Save">
                        <a href="./student.php" class="btn btn-dark">Cancel</a>
                        </div>

                        
                    </form>
                </div>
                    </div>
                </div>
                <?php
                    if(isset($_POST['save'])){


                        $fName =  $_POST['name'];
                        $Email = $_POST['Email'];
                        $Phone =  $_POST['phone'];
                        $Enrollnumber = $_POST['enroolnum'];
                        $dateofadmin = $_POST['dateofadmission'];
                        mysqli_query($connection, "UPDATE students SET fName='$fName', Email='$Email', fName='$fName', EnrollNumber='$Enrollnumber', AdmissionDate='$dateofadmin' WHERE id=$student_id");
                        $_SESSION['message'] = "Address updated!"; 
                        echo "<script>window.location.href = './student.php?edit=true';</script>";
                        

                    }
                ?>
        <?php
            include './assets/utilities/fdashboard.php'; 
        ?>