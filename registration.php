<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 m-auto">
                    <h1 class=" head text-center text-bg-success p-2">Registration Form</h1>
                    <form action="post.php" method="post" class="bg-light">
                        <div class="row p-2">
                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="fname">
                                <?php if(isset($_GET["name_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["name_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="text" class="form-control" name="email">
                                <?php if(isset($_GET["email_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["email_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="mb-3 col-lg-6 position-relative">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="pass">
                                <a onclick="showpass()" class="btn btn-success position-absolute bottom-0 end-0">Show</a>
                                <?php if(isset($_GET["pass_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["pass_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputEmail1" class="form-label">Retype Password</label>
                                <input type="password" class="form-control" name="repassword">
                                <?php if(isset($_GET["repass_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["repass_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone">
                                <?php if(isset($_GET["phone_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["phone_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="birth">
                                <?php if(isset($_GET["birth_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["birth_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <select class="form-select" name="country">
                                    <option value="">-- Country --</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                </select>
                                <?php if(isset($_GET["country_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["country_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputEmail1" class="form-label">Gender</label>
                                <input class="form-check-input" type="radio" name="gender" value="Male"> Male
                                <input class="form-check-input" type="radio" name="gender" value="Female"> Female
                                <input class="form-check-input" type="radio" name="gender" value="Others"> Others
                                <?php if(isset($_GET["gender_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["gender_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputEmail1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="message"></textarea>
                                    <?php if(isset($_GET["message_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["message_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputEmail1" class="form-label">Hobbies</label>
                                <div class="form-check">
                                    <input name="hobbies[]" class="form-check-input" type="checkbox" value="Programming" id="flexCheckDefault">
                                    <label class="form-check-label">
                                        Programming
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="hobbies[]" class="form-check-input" type="checkbox" value="Cricket" id="flexCheckChecked">
                                    <label class="form-check-label">
                                        Cricket
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="hobbies[]" class="form-check-input" type="checkbox" value="Tennis" id="flexCheckChecked">
                                    <label class="form-check-label">
                                        Tennis
                                    </label>
                                </div>
                                <?php if(isset($_GET["hobbies_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["hobbies_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" value="Terms and Condition is OK!"
                                        id="flexCheckChecked">
                                    <label class="form-check-label">
                                        Terms & Conditions
                                    </label>
                                </div>
                                <?php if(isset($_GET["terms_err"])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <?php echo $_GET["terms_err"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success mb-2">Register</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script>
        function showpass(){
            var pass = document.getElementById("pass");
            if(pass.type == "password"){
                pass.type = "text";
            }
            else{
                pass.type = "password";
            }
        }
    </script>
</body>

</html>