<?php
            include './config/db.php';
            include './assets/utilities/fPayment.php';
            if(!$_SESSION['login']){
                header("location:index.php");
                die;
             };
             include './controllers/time.php';
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
                            <th scope="col">creator</th>
                            <th scope="col">duration</th>
                            <th scope="col">created</th>
                            <th scope="col">link</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                                // show data
                                $sql = "SELECT id, cname, creator, created,  duration,  link FROM course";
                                $result = mysqli_query($connection, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($courses = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>'.$courses['cname'].'</td>';
                                    echo '<td>'.$courses['creator'].'</td>';
                                    echo '<td>'.$courses['created'].'</td>';
                                    echo '<td>'.$courses['duration'].'</td>';
                                    echo '<td>'.$courses['link'].'</td>';
                                    echo '
                                    <td class="mytd">
                                        <a href="./editcourse.php?id='.$courses['id'].'"><svg class="smg1" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.3033 2.08777L16.9113 0.695801C16.4478 0.231934 15.8399 0 15.2321 0C14.6242 0 14.0164 0.231934 13.5525 0.69543L0.475916 13.772L0.00462689 18.0107C-0.0547481 18.5443 0.365701 19 0.88783 19C0.920858 19 0.953885 18.9981 0.987654 18.9944L5.22332 18.5265L18.3036 5.44617C19.231 4.51881 19.231 3.01514 18.3033 2.08777ZM4.67818 17.3924L1.2259 17.775L1.61035 14.3175L11.4031 4.52475L14.4747 7.59629L4.67818 17.3924ZM17.4639 4.60676L15.3141 6.7565L12.2426 3.68496L14.3923 1.53521C14.6164 1.31107 14.9148 1.1875 15.2321 1.1875C15.5494 1.1875 15.8474 1.31107 16.0719 1.53521L17.4639 2.92719C17.9266 3.39031 17.9266 4.14363 17.4639 4.60676Z" fill="#00C1FE"/></svg></a>                                    
                                        <a href="./removecourse.php?id='.$courses['id'].'"><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.285713 2.25H4L5.2 0.675C5.35968 0.465419 5.56674 0.295313 5.80478 0.178154C6.04281 0.0609948 6.30529 0 6.57143 0L9.42857 0C9.69471 0 9.95718 0.0609948 10.1952 0.178154C10.4333 0.295313 10.6403 0.465419 10.8 0.675L12 2.25H15.7143C15.7901 2.25 15.8627 2.27963 15.9163 2.33238C15.9699 2.38512 16 2.45666 16 2.53125V3.09375C16 3.16834 15.9699 3.23988 15.9163 3.29262C15.8627 3.34537 15.7901 3.375 15.7143 3.375H15.0393L13.8536 16.4637C13.8152 16.8833 13.6188 17.2737 13.3029 17.558C12.987 17.8423 12.5745 17.9999 12.1464 18H3.85357C3.42554 17.9999 3.01302 17.8423 2.69711 17.558C2.38121 17.2737 2.18477 16.8833 2.14643 16.4637L0.960713 3.375H0.285713C0.209937 3.375 0.137264 3.34537 0.083683 3.29262C0.0301008 3.23988 0 3.16834 0 3.09375V2.53125C0 2.45666 0.0301008 2.38512 0.083683 2.33238C0.137264 2.27963 0.209937 2.25 0.285713 2.25ZM9.88571 1.35C9.8323 1.28034 9.76324 1.22379 9.68393 1.18475C9.60463 1.14572 9.51723 1.12527 9.42857 1.125H6.57143C6.48277 1.12527 6.39537 1.14572 6.31606 1.18475C6.23676 1.22379 6.1677 1.28034 6.11429 1.35L5.42857 2.25H10.5714L9.88571 1.35ZM3.28571 16.3617C3.29748 16.5019 3.36245 16.6325 3.46768 16.7277C3.57292 16.8228 3.7107 16.8754 3.85357 16.875H12.1464C12.2893 16.8754 12.4271 16.8228 12.5323 16.7277C12.6376 16.6325 12.7025 16.5019 12.7143 16.3617L13.8929 3.375H2.10714L3.28571 16.3617Z" fill="#00C1FE"/>
                                            </svg></a>                                        
                                    </td>
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
                            <label for="name" class="form-label">course name</label>
                            <input type="text" name="name" class="form-control" id="" aria-describedby="Recipient's username" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">creator</label>
                            <input type="name" name="creator" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">date created</label>
                            <input type="date" name="created" class="form-control" id="" aria-describedby="Recipient's username" required>
                        </div>
                        <div class="mb-3">
                            <label for="enroolnum" class="form-label">duration</label>
                            <input type="number" name="duration" class="form-control" id="" aria-describedby="Recipient's username" required>
                        </div>
                        <div class="mb-3">
                            <label for="dateofadmission" class="form-label">link</label>
                            <input type="link" name="link" class="form-control" id="" aria-describedby="Recipient's username" required>
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
                    $creator = $_POST['creator'];
                    $created =  $_POST['created'];
                    $duration = $_POST['duration'];
                    $link = $_POST['link'];
                        
                    // adding it to the data base
                    $sql = "INSERT INTO course VALUES (null,'$fName', 
                        '$creator','$created','$duration','$link')";
                        
                    if(mysqli_query($connection, $sql)){
                        echo "<script>window.location.href = './course.php';</script>";
                    } else{
                        echo "ERROR: Hush! Sorry $sql. " 
                            . mysqli_error($connection);
                    }
                        
                    // Close connectionection
                    mysqli_close($connection);
                }
            ?>
        <?php
           include './assets/utilities/fdashboard.php';
        ?>