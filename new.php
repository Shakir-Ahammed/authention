<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="newstyle.css">
    <title>Document</title>
</head>

<body>


    <div id="example-basic" class="container">
        <h3 class="page">fast page</h3>
        <section>
            <h2>Name</h2>
            <br><br>
            <input type="text">
            <br>
            <h2>email</h2>
            <br>
            <input type="text">

        </section>
        <h3 class="page">2nd page</h3>
        <section>
            <h2>phone</h2>
            <br>
            <input type="number">
            <br>
            <h2>password</h2>
            <br>
            <input type="password">
        </section>
        <h3 class="page">3rd page</h3>
        <section>
            <h2>Gender</h2><br>
            <select aria-label='Default select example'>
                <option value='male'>Male</option>
                <option value='Female'>Female</option>
            </select>
            <br>

            <input type="submit" value="submit">
        </section>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js" integrity="sha512-bE0ncA3DKWmKaF3w5hQjCq7ErHFiPdH2IGjXRyXXZSOokbimtUuufhgeDPeQPs51AI4XsqDZUK7qvrPZ5xboZg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $("#example-basic").steps({
        headerTag: ".page",
        bodyTag: "section",
        transitionEffect: "fade",
        autoFocus: true,
    });
</script>

</html>