// student
function signInStudent() {

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var remberMe = document.getElementById("remberMe");

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);
    form.append("remberMe", remberMe.checked);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "OK") {

                window.location = "StudentHome.php";

            } else {

                document.getElementById("msg2").innerHTML = text;

            }

        }
    };

    r.open("POST", "StudentsignInProcess.php", true);
    r.send(form);

}

var bootstrapModal;

function STUforgotPassword() {

    var email = document.getElementById("email");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Success") {

                alert("Verification Code Send to your Email. Please Check the inbox");
                var Window = document.getElementById("forgotPasswordWindow");
                bootstrapModal = new bootstrap.Modal(Window);
                bootstrapModal.show();

            } else {

                alert(t);

            }
        }
    };

    r.open("GET", "StudentForgotPasswordProcess.php?email=" + email.value, true);
    r.send();

}

function showPasswordNew1() {
    // alert("ok")

    var newPassword = document.getElementById("newPassword1");
    var newPasswordButton = document.getElementById("newPasswordButton1");

    if (newPasswordButton.innerHTML == "Show") {

        newPassword.type = "text";
        newPasswordButton.innerHTML = "Hide";

    } else {

        newPassword.type = "password";
        newPasswordButton.innerHTML = "Show";

    }
}

function showPasswordComfirm1() {
    // alert("ok")

    var repeatNewPassword = document.getElementById("repeatNewPassword1");
    var repeatNewPasswordButton = document.getElementById("repeatNewPasswordButton1");

    if (repeatNewPasswordButton.innerHTML == "Show") {

        repeatNewPassword.type = "text";
        repeatNewPasswordButton.innerHTML = "Hide";

    } else {

        repeatNewPassword.type = "password";
        repeatNewPasswordButton.innerHTML = "Show";

    }
}

function changePassword1() {

    // alert("ok");

    var email = document.getElementById("email");
    var newPassword = document.getElementById("newPassword1");
    var repeatNewPassword = document.getElementById("repeatNewPassword1");
    var verificationCode = document.getElementById("verificationCode");

    var form = new FormData();
    form.append("email", email.value);
    form.append("newPassword", newPassword.value);
    form.append("repeatNewPassword", repeatNewPassword.value);
    form.append("verificationCode", verificationCode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                alert("Password reset success");
                bootstrapModal.hide();
            } else {
                alert(text);
            }
        }
    };

    r.open("POST", "StudentResetPassword.php", true);
    r.send(form);

}


// Teacher
function TeachersignIn() {

    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var remberMe = document.getElementById("remberMe2");

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);
    form.append("remberMe", remberMe.checked);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "OK") {

                window.location = "TeacherHome.php";

            } else {

                document.getElementById("msg2").innerHTML = text;

            }

        }
    };

    r.open("POST", "TeachersignInProcess.php", true);
    r.send(form);

}

function TEAforgotPassword() {

    var email = document.getElementById("email2");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Success") {

                alert("Verification Code Send to your Email. Please Check the inbox");
                var Window = document.getElementById("forgotPasswordWindow");
                bootstrapModal = new bootstrap.Modal(Window);
                bootstrapModal.show();

            } else {

                alert(t);

            }
        }
    };

    r.open("GET", "TeacherForgotPasswordProcess.php?email=" + email.value, true);
    r.send();

}

function showPasswordNew2() {
    // alert("ok")

    var newPassword = document.getElementById("newPassword2");
    var newPasswordButton = document.getElementById("newPasswordButton2");

    if (newPasswordButton.innerHTML == "Show") {

        newPassword.type = "text";
        newPasswordButton.innerHTML = "Hide";

    } else {

        newPassword.type = "password";
        newPasswordButton.innerHTML = "Show";

    }
}

function showPasswordComfirm2() {
    // alert("ok")

    var repeatNewPassword = document.getElementById("repeatNewPassword2");
    var repeatNewPasswordButton = document.getElementById("repeatNewPasswordButton2");

    if (repeatNewPasswordButton.innerHTML == "Show") {

        repeatNewPassword.type = "text";
        repeatNewPasswordButton.innerHTML = "Hide";

    } else {

        repeatNewPassword.type = "password";
        repeatNewPasswordButton.innerHTML = "Show";

    }
}

function changePassword2() {

    // alert("ok");

    var email = document.getElementById("email2");
    var newPassword = document.getElementById("newPassword2");
    var repeatNewPassword = document.getElementById("repeatNewPassword2");
    var verificationCode = document.getElementById("verificationCode");

    var form = new FormData();
    form.append("email", email.value);
    form.append("newPassword", newPassword.value);
    form.append("repeatNewPassword", repeatNewPassword.value);
    form.append("verificationCode", verificationCode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                alert("Password reset success");
                bootstrapModal.hide();
            } else {
                alert(text);
            }
        }
    };

    r.open("POST", "TeacherResetPassword.php", true);
    r.send(form);

}

// ACADEMIC OFFICER
function signInAcademic() {

    var email = document.getElementById("email3");
    var password = document.getElementById("password3");
    var remberMe = document.getElementById("remberMe3");

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);
    form.append("remberMe", remberMe.checked);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "OK") {

                window.location = "AcadmicHome.php";

            } else {

                document.getElementById("msg2").innerHTML = text;

            }

        }
    };

    r.open("POST", "AcademicSignInProcess.php", true);
    r.send(form);
}

function forgotPassword3() {

    var email = document.getElementById("email3");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Success") {

                alert("Verification Code Send to your Email. Please Check the inbox");
                var Window = document.getElementById("forgotPasswordWindow");
                bootstrapModal = new bootstrap.Modal(Window);
                bootstrapModal.show();

            } else {

                alert(t);

            }
        }
    };

    r.open("GET", "AcademicForgotPasswordProcess.php?email=" + email.value, true);
    r.send();

}

function showPasswordNew3() {
    // alert("ok")

    var newPassword = document.getElementById("newPassword3");
    var newPasswordButton = document.getElementById("newPasswordButton3");

    if (newPasswordButton.innerHTML == "Show") {

        newPassword.type = "text";
        newPasswordButton.innerHTML = "Hide";

    } else {

        newPassword.type = "password";
        newPasswordButton.innerHTML = "Show";

    }
}

function showPasswordComfirm3() {
    // alert("ok")

    var repeatNewPassword = document.getElementById("repeatNewPassword3");
    var repeatNewPasswordButton = document.getElementById("repeatNewPasswordButton3");

    if (repeatNewPasswordButton.innerHTML == "Show") {

        repeatNewPassword.type = "text";
        repeatNewPasswordButton.innerHTML = "Hide";

    } else {

        repeatNewPassword.type = "password";
        repeatNewPasswordButton.innerHTML = "Show";

    }
}

function changePassword3() {

    // alert("ok");

    var email = document.getElementById("email3");
    var newPassword = document.getElementById("newPassword3");
    var repeatNewPassword = document.getElementById("repeatNewPassword3");
    var verificationCode = document.getElementById("verificationCode");

    var form = new FormData();
    form.append("email", email.value);
    form.append("newPassword", newPassword.value);
    form.append("repeatNewPassword", repeatNewPassword.value);
    form.append("verificationCode", verificationCode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                alert("Password reset success");
                bootstrapModal.hide();
            } else {
                alert(text);
            }
        }
    };

    r.open("POST", "AcademicResetPassword.php", true);
    r.send(form);

}

// Admin
function AdminSignIn() {

    var email = document.getElementById("email4");
    var password = document.getElementById("password4");
    var remberMe = document.getElementById("remberMe4");

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);
    form.append("remberMe", remberMe.checked);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "OK") {

                window.location = "adminHome.php";

            } else {

                document.getElementById("msg2").innerHTML = text;

            }

        }
    };

    r.open("POST", "AdminSignInProcess.php", true);
    r.send(form);
}

function forgotPassword4() {

    var email = document.getElementById("email4");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Success") {

                alert("Verification Code Send to your Email. Please Check the inbox");
                var Window = document.getElementById("forgotPasswordWindow");
                bootstrapModal = new bootstrap.Modal(Window);
                bootstrapModal.show();

            } else {

                alert(t);

            }
        }
    };

    r.open("GET", "AdminForgotPasswordProcess.php?email=" + email.value, true);
    r.send();

}

function showPasswordNew4() {
    // alert("ok")

    var newPassword = document.getElementById("newPassword4");
    var newPasswordButton = document.getElementById("newPasswordButton4");

    if (newPasswordButton.innerHTML == "Show") {

        newPassword.type = "text";
        newPasswordButton.innerHTML = "Hide";

    } else {

        newPassword.type = "password";
        newPasswordButton.innerHTML = "Show";

    }
}

function showPasswordComfirm4() {
    // alert("ok")

    var repeatNewPassword = document.getElementById("repeatNewPassword4");
    var repeatNewPasswordButton = document.getElementById("repeatNewPasswordButton4");

    if (repeatNewPasswordButton.innerHTML == "Show") {

        repeatNewPassword.type = "text";
        repeatNewPasswordButton.innerHTML = "Hide";

    } else {

        repeatNewPassword.type = "password";
        repeatNewPasswordButton.innerHTML = "Show";

    }
}

function changePassword4() {

    // alert("ok");

    var email = document.getElementById("email4");
    var newPassword = document.getElementById("newPassword4");
    var repeatNewPassword = document.getElementById("repeatNewPassword4");
    var verificationCode = document.getElementById("verificationCode");

    var form = new FormData();
    form.append("email", email.value);
    form.append("newPassword", newPassword.value);
    form.append("repeatNewPassword", repeatNewPassword.value);
    form.append("verificationCode", verificationCode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                alert("Password reset success");
                bootstrapModal.hide();
            } else {
                alert(text);
            }
        }
    };

    r.open("POST", "AdminResetPassword.php", true);
    r.send(form);

}

function LogOut() {

    // alert("ok");
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "Success") {
                window.location = "admin.php";
            }

        }
    };

    r.open("GET", "AdminLogOutProcess.php", true);
    r.send();

}

function AdminChangeImg() {

    var image = document.getElementById("profileimg");
    var prev = document.getElementById("prev1");

    image.onchange = function() {

        var file0 = this.files[0];
        var url0 = window.URL.createObjectURL(file0);
        prev.src = url0;
    }

}

function AdminshowPassword() {

    var rnp = document.getElementById("password");
    var rnpb = document.getElementById("passwordButton");

    if (rnpb.innerHTML == "Show") {

        rnp.type = "text";
        rnpb.innerHTML = "Hide";

    } else {

        rnp.type = "password";
        rnpb.innerHTML = "Show";

    }
}

function Adminupdateprofile() {
    // alert("ok");

    var name = document.getElementById("username");
    var mobile = document.getElementById("mobile");
    var addressline1 = document.getElementById("addline1");
    var addressline2 = document.getElementById("addline2");
    var city = document.getElementById("usercity");
    var image = document.getElementById("profileimg");

    var form = new FormData();
    form.append("u", name.value);
    form.append("m", mobile.value);
    form.append("a1", addressline1.value);
    form.append("a2", addressline2.value);
    form.append("c", city.value);
    form.append("i", image.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
        }
    }

    r.open("POST", "AdminUpdateProfileProcess.php", true);
    r.send(form);

}

function StudentChangeImg() {

    var image = document.getElementById("profileimg");
    var prev = document.getElementById("prev1");

    image.onchange = function() {

        var file0 = this.files[0];
        var url0 = window.URL.createObjectURL(file0);
        prev.src = url0;
    }

}

function Studentupdateprofile() {
    // alert("ok");

    var name = document.getElementById("username");
    var mobile = document.getElementById("mobile");
    var addressline1 = document.getElementById("addline1");
    var addressline2 = document.getElementById("addline2");
    var city = document.getElementById("usercity");
    var image = document.getElementById("profileimg");

    var form = new FormData();
    form.append("u", name.value);
    form.append("m", mobile.value);
    form.append("a1", addressline1.value);
    form.append("a2", addressline2.value);
    form.append("c", city.value);
    form.append("i", image.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
        }
    }

    r.open("POST", "StudentUpdateProfileProcess.php", true);
    r.send(form);

}

function TeacherChangeImg() {

    var image = document.getElementById("profileimg");
    var prev = document.getElementById("prev1");

    image.onchange = function() {

        var file0 = this.files[0];
        var url0 = window.URL.createObjectURL(file0);
        prev.src = url0;
    }

}

function Teacherupdateprofile() {
    // alert("ok");

    var name = document.getElementById("username");
    var mobile = document.getElementById("mobile");
    var addressline1 = document.getElementById("addline1");
    var addressline2 = document.getElementById("addline2");
    var city = document.getElementById("usercity");
    var image = document.getElementById("profileimg");

    var form = new FormData();
    form.append("u", name.value);
    form.append("m", mobile.value);
    form.append("a1", addressline1.value);
    form.append("a2", addressline2.value);
    form.append("c", city.value);
    form.append("i", image.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
        }
    }

    r.open("POST", "TeacherUpdateProfileProcess.php", true);
    r.send(form);

}

function Acadmicupdateprofile() {
    // alert("ok");

    var name = document.getElementById("username");
    var mobile = document.getElementById("mobile");
    var addressline1 = document.getElementById("addline1");
    var addressline2 = document.getElementById("addline2");
    var city = document.getElementById("usercity");
    var image = document.getElementById("profileimg");

    var form = new FormData();
    form.append("u", name.value);
    form.append("m", mobile.value);
    form.append("a1", addressline1.value);
    form.append("a2", addressline2.value);
    form.append("c", city.value);
    form.append("i", image.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
        }
    }

    r.open("POST", "AcadmicUpdateProfileProcess.php", true);
    r.send(form);

}

function AssignmentUpload() {

    var assigment = document.getElementById("assigment");
    var fiile = document.getElementById("fdf");

    var form = new FormData();
    form.append("a", assigment.value);
    form.append("f", fiile.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            if (text == "New Assigment saved successfully") {
                assigment.value = "";
                fiile.value = "";
            }
        }
    }

    r.open("POST", "teacherAssigmentProcess.php", true);
    r.send(form);

}

function LessonNotesUpload() {

    var assigment = document.getElementById("assigment1");
    var fiile = document.getElementById("fdf1");

    var form = new FormData();
    form.append("a", assigment.value);
    form.append("f", fiile.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            if (text == "New Assigment saved successfully") {
                assigment.value = "";
                fiile.value = "";
            }
        }
    }

    r.open("POST", "teacherLessonNotesProcess.php", true);
    r.send(form);

}

function userBlock(Email) {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            window.location = "manageStudents.php";
        }
    };
    r.open("GET", "StudentBlockProcess.php?email=" + Email, true);
    r.send();
}

function teacherBlock(Email) {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            window.location = "manageTeachers.php";
        }
    };
    r.open("GET", "teacherBlockProcess.php?email=" + Email, true);
    r.send();
}

function academicBlock(Email) {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            window.location = "manageAcademicOfficers.php";
        }
    };
    r.open("GET", "academicBlockProcess.php?email=" + Email, true);
    r.send();
}

function TeacherRegistration() {

    var email = document.getElementById("email");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Success") {

                alert("Teacher Registration Successfuly.");
                email.value = "";

            } else {

                alert(t);

            }
        }
    };

    r.open("GET", "TeacherRegistrationProcess.php?email=" + email.value, true);
    r.send();

}

function AcademicofficersRegistration() {

    var email = document.getElementById("email");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Success") {

                alert("Academic Officers Registration Successfuly.");
                email.value = "";

            } else {

                alert(t);

            }
        }
    };

    r.open("GET", "AcademicofficersRegistrationProcess.php?email=" + email.value, true);
    r.send();

}

function StudentRegistration() {

    var email = document.getElementById("email");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Success") {

                alert("Student Registration Successfuly.");
                email.value = "";

            } else {

                alert(t);

            }
        }
    };

    r.open("GET", "StudentRegistrationProcess.php?email=" + email.value, true);
    r.send();

}

function savemark() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var mark = document.getElementById("mark");

    var f = new FormData();
    f.append("n", name.value);
    f.append("e", email.value);
    f.append("m", mark.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "Assigment Marks Add Successfully.") {
                alert("Assigment Marks Add Successfully.");
                name.value = "";
                email.value = "0";
                mark.value = "";


            }
        }
    }
    r.open("POST", "TeacherAddAssignmentMarkProcess.php", true);
    r.send(f);
}

function ReleaseMarks(student_Email) {

    var n = document.getElementById("name");
    var m = document.getElementById("mark");

    var name = n.textContent;
    var mark = m.textContent;

    // alert(student_Email);
    // alert(name);
    // alert(mark);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location = "AcademicViewAssignmentMarks.php";
        }
    };
    r.open("GET", "AcademicViewAssignmentMarksProcess.php?email=" + student_Email + "?name=" + name.value + "?mark=" + mark, true);
    r.send();

}

function sendAssignmentId(id) {
    var id = id;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location = "studentUploadAnswar.php";
        }
    };
    r.open("GET", "studentUploadAnswar.php?assign_id=" + id, true);
    r.send();

}

var bm;

function file() {
    var m = document.getElementById("answar");
    bm = new bootstrap.Modal(m);
    bm.show();

}

function saveAnswar() {

    var assigment = document.getElementById("id");
    var fiile = document.getElementById("fdf");

    var form = new FormData();
    form.append("a", assigment.value);
    form.append("f", fiile.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            if (text == "Answar saved successfully") {
                document.getElementById("upload").disabled = true;
                document.getElementById("upload").value = "Submitted";
                window.location = "studentDownloadAssignment.php";
            }
        }
    }

    r.open("POST", "StudentAnswarUploadProcess.php", true);
    r.send(form);

}