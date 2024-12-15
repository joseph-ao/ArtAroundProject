<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "sections/head.php"; ?>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/form.css" />
    <title>JoinUs - webProjects</title>
</head>

<body>
    <?php include "sections/header.php"; ?>
    <div class="fade-in">
        <div class="container py-5 mb-5 mt-0">
            <div class="row py-5">
                <div class="col-md-6 firstcol">
                    <form class="p-4 mt-3">
                    <h1><span class="title title-word">Join Us</span></h1>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Tell us a little bit about yourself!</label>
                            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected> Akkar</option>
                                <option selected> Baalbeck-Hermel</option>
                                <option selected> Beirut</option>
                                <option selected> Bekaa</option>
                                <option selected> Mount Lebanon</option>
                                <option selected> North Lebanon</option>
                                <option selected> Nabatiyeh</option>
                                <option selected> South Lebanon</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                I acknowledge that submitting this form does not <br>guarantee acceptance into the team.
                            </label>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 secondcol">
                    <img src="assets/images/form/form.jpg" class="img-fluid" alt="Form image">
                </div>
            </div>
        </div>
        <?php include "sections/footer.php"; ?>
</body>

</html>