<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Forms</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    <div class="container w-50 p-5">
        <div class="row ">
            <div class="col-12">
                <div class="card text-center text-white bg-dark mb-3" style="max-width: 50rem;">
                    <form action="register.php" method="POST">

                        <div class="card-header">
                            <h1>Payment form</h1>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title">Contact information</h5>

                           

                            <fieldset class="form-group">
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Title</legend>
                                    <div class="col-sm-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="Ace" name="card[]" value="Ace">
                                            <label class="form-check-label" for="Ace">Ace</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="King" name="card[]" value="King">
                                            <label class="form-check-label" for="King">King</label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" id="Queen" name="card[]" value="Queen">
                                            <label class="form-check-label" for="Queen">Queen</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group row mb-2">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control w-50" id="name" placeholder="What's your name ?">
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control w-50" id="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control w-50 mb-3" id="password" placeholder="Password">
                                </div>
                            </div>

                            <h5 class="card-title mb-3 ">Payment information</h5>

                            <div class="form-group row mb-1">
                                <label for="cardNumber" class="col-sm-3 col-form-label">Card type</label>
                                <div class="col-sm-4">
                                    <select class="form-control form-control-sm">
                                        <option value="visa">Visa</option>
                                        <option value="mastercard">Mastercard</option>
                                        <option value="American Express">American Express</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-1">
                                <label for="cardNumber" class="col-sm-3 col-form-label">Card number</label>
                                <div class="col-sm-4">
                                    <input name="cardNumber" class="form-control form-control-sm" id="cardNumber" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="cardNumber" class="col-sm-3 col-form-label">Expiration date</label>
                                <div class="col-sm-5">

                                    <select class="form-control-sm" name='expireMM' id='expireMM'>
                                        <option value=''>Month</option>
                                        <option value='01'>January</option>
                                        <option value='02'>February</option>
                                        <option value='03'>March</option>
                                        <option value='04'>April</option>
                                        <option value='05'>May</option>
                                        <option value='06'>June</option>
                                        <option value='07'>July</option>
                                        <option value='08'>August</option>
                                        <option value='09'>September</option>
                                        <option value='10'>October</option>
                                        <option value='11'>November</option>
                                        <option value='12'>December</option>
                                    </select>

                                    <select class="form-control-sm mb-4" name='expireYY' id='expireYY'>
                                        <option value=''>Year</option>
                                        <option value='20'>2020</option>
                                        <option value='21'>2021</option>
                                        <option value='22'>2022</option>
                                        <option value='23'>2023</option>
                                        <option value='24'>2024</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" id="send" class="btn btn-primary">Validate the payment</button>
                                </div>
                            </div>

                        </div>
                        <form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>