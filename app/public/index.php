<?php 


include 'functions.php';
if(empty($_POST['name'])){
    $name="";
}else{
    $name = $_POST['name'];
}
if(empty($_POST['email'])){
    $email="";
}else{
    $email = $_POST['email'];
}
if(empty($_POST['batch'])){
    $batch="";
}else{
    $batch = $_POST['batch'];
}
if(empty($_POST['image'])){
    $image="";
}else{
    $image = $_POST['image'];
}if(empty($_POST['price'])){
    $price="";
}else{
    $price = $_POST['price'];
}
$data = new Functions($name,$email,$batch,$image,$price);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
   
    <title>রেজিস্ট্রেশন পেজ</title>
</head>
<body>
 
   <div class="container">
   
     <div class="body_banner">
        <div class="row">
                    <div class="col-md-12">  
                    <h1>💜নিজমাওনা উচ্চ বিদ্যালয় 🌸স্বপ্নের শুরু যেখানে🌸</h1>
                       <?php
                       
                       if($_SERVER['REQUEST_METHOD']=='POST'){
                          
            
                           echo "<h3>রেজিস্ট্রেশন সম্পূর্ণ হয়েছে !</h3>";
                           echo "<h3> ধন্যবাদঃ-".$data->getName()." "."<h3>" ;
                       }
                       ?>
                    
                    
                <h2>১ম ধাপ</h2>
                <form action="" method="post">

                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">আপনার নাম লিখুন(ইংরেজি)</label>
                        <input type="text"  name="name" class="form-control custom-input" id="exampleFormControlInput1" placeholder="যেমনঃ সাদ্দাম হাসান">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">আপনার ই-মেইল লিখুন(ইংরেজি)</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="যেমনঃ 4D7Jn@example.com">
                    </div>

                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">আপনার এস.এস.সি ব্যাচ</label>
                    <select class="form-select" name="batch" aria-label="Default select example">
                        <option selected disabled> এখান থেকে সিলেক্ট করুন </option>
                        <?php for($i=1994;$i<=2022;$i++){?>
                        <option value="<?php echo $i;?>">SSC Batch <?php echo $i?></option><?php } ?>
                         </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">আপনার ছবি </label>
                        <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="যেমনঃ 4D7Jn@example.com">
                        <h6 class="text-danger">ছবি ১০২৪ কেবির বেশি হতে পারবে না</h6>
                    </div>  

                <div class="mb-3">
                 <input type="hidden" name="price" value="1000"  class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                      <label for="formFile" class="form-label">পেমেন্ট করুন বিকাশে</label>
                      <div class="payWith">
                      <img src="../img/bkash/Bkash-900x0.png" alt="">
                      </div>
                    </div>
           
                <button type="submit" name="submit" class="btn btn-primary">রেজিস্ট্রেশন সাবমিট করুন</button>
                </form>
                     </div>
                    </div>
                </div>
            </div>
            <div>

         
            </div>
  
    

            <footer>
                <div class="container">
                <div class="body_banner footer">
                    <div class="row">
                    <div class="footer">
                    <p>Copyright &copy; 2023 Design $ Developed by Imtiaz Technologies</p>
                </div>
                    </div>
                </div>
            </div>
            </footer>

    <!---Js here-->

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


<script src="../js/main.js"></script>
</body>
</html>