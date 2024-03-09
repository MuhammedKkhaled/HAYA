
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH</title>

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>
<!-- main container-->
<div class="main">

    <!-- sidebar-->
    <div class="sidebar">
        <a href="#"><img src="../../images/logo.png" alt="" width="200" height="100"></a>
        <ul>
            <li><a href="../../dashboard.html" class="toggle-link"> <i class="fa-solid fa-house"></i>    Dashboard</a>

            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-user-md"></i>    Doctors</a>
                <ul class="sublist">
                    <li><a href="../Doctor/add_doctor_form.html">Add Doctor</a></li>
                    <li><a href="../Doctor/doctor_details.html">Doctor Details</a></li>
                    <li><a href="../Doctor/all_doctors.html">All Doctors</a></li>
                    <li><a href="../Doctor/edit_doctor.html">Edit Doctor</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>      Patients</a>
                <ul class="sublist">
                    <li><a href="../Patients/add_patient_form.html">Add Patient</a></li>
                    <li><a href="../Patients/patient_details.html">Patient Details</a></li>
                    <li><a href="../Patients/all_patients.html">All Patient</a></li>
                    <li><a href="../Patients/edit_patient.html">Edit Patient</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fas fa-users"></i>        Stuff</a>
                <ul class="sublist">
                    <li><a href="../Stuff/add_stuff_form.html">Add Stuff</a></li>
                    <li><a href="../Stuff/stuff_details.html">Stuff Details</a></li>
                    <li><a href="../Stuff/all_stuff.html">All Stuff</a></li>
                    <li><a href="../Stuff/edit_stuff.html">EditStuff</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link"><i class="fa-solid fa-calendar-check"></i> Appointments</a>
                <ul class="sublist">
                    <li><a href="../appointments/add_appointment_form.html">Add Appointment </a></li>
                    <li><a href="../appointments/appointment_details.html">Appointment Details</a></li>
                    <li><a href="../appointments/all_appointment.html">All Appointments</a></li>
                    <li><a href="../appointments/edit_appointment.html">Edit Appointment</a></li>
                </ul>
            </li>
            <li><a href="#" class="toggle-link">  <i class="fa-solid fa-clipboard"></i>Departments</a>
                <ul class="sublist">
                    <li><a href="{{route('sections.create')}}">Add Department</a></li>
                    <li><a href="department_details.html">Department Details</a></li>
                    <li><a href="{{route('sections.index')}}">All Departments</a></li>
                    <li><a href="{{route('section')}}">Edit department</a></li>
                </ul>
            </li>
            <!-- <li><a href="#" class="toggle-link"><i class="fa-solid fa-clipboard"></i>   Analysis Report</a>
              <ul class="sublist">
                <li><a href="#">Add Analysis Report</a></li>
                <li><a href="#">Analysis Report Details</a></li>
                <li><a href="#">All Analysis Report</a></li>
                <li><a href="#">Edit Analysis Report</a></li>
              </ul>
            </li> -->
            <li><a href="#" class="toggle-link"><i class="fa-solid fa-heart-pulse"></i>  Resources</a>
                <ul class="sublist">
                    <li><a href="../Resources/add_resources_form.html">Add Resources</a></li>
                    <li><a href="../Resources/resources_details.html">Resources Details</a></li>
                    <li><a href="../Resources/all_resources.html">All Resources</a></li>
                    <li><a href="../Resources/edit_resources.html">Edit Resources</a></li>
                </ul>
            </li>



        </ul>
    </div>



    <div class="content">

        <div class="nav">
            <nav class="navbar navbar-expand-lg ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sun"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-moon"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="edit profile">Profile</a>
                                <a class="dropdown-item" href="#">logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>



        </div>

        <h1>Edit Appointment</h1>
        <div class="inner_content">
            <h3>Edit Appointment</h3><br>
            <hr>

            <form id="add-patient-form">
                <div class="form-group">
                    <label for="first-name"> doctor Name</label><br/>
                    <input type="text" id="first-name" name="first-name" required placeholder=" Doctor Name">
                </div>

                <div class="form-group">
                    <label for="address">Patient ID</label><br/>
                    <input type="text" id="pId" name="pid" required placeholder="Patient ID">
                </div>


                <div class="form-group">
                    <label for="dep">department</label><br/>
                    <select id="dep" name="dep" required>
                        <option value="pregnancy">pregnancy</option>
                        <option value="psychology">psychology</option>
                        <option value="other">Other</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="dep">Time slot</label><br/>
                    <select id="time" name="time" required>
                        <option value="1">10AM-11AM</option>
                        <option value="1">8AM-1pM</option>
                        <option value="1">9AM-5pM</option>
                        <option value="1">10AM-12AM</option>
                        <option value="1">7AM-11AM</option>


                    </select>
                </div>

                <div class="form-group">
                    <label for="problem">problem</label><br/>
                    <input type="text" id="problem" name="problem" required placeholder="problem">
                </div>
                <div class="form-group">
                    <label for="date">Appointment Date</label><br/>
                    <input type="date" id="Date" name="date" required >
                </div>
                <div class="form-group">
                    <label for="tnum">Token Number (Auto Generated)</label><br/>
                    <input type="text" id="tnum" name="tnum" required placeholder="token number" >
                </div><br>
                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Edit Appointment</button>
                <button type="submit">Delete Appointment</button>
            </form>







        </div>

    </div>



</div>







<script src="../../js/popper.min.js"></script>
<script src="../../js/jquery-3.7.1.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/main.js"></script>
</body>
</html>












