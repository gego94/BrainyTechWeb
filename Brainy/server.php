<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');

//MODIFY DATA
if (isset($_POST['modify_user'])) {  
 
  $id_user=$_SESSION['id_user'];
  
  $newUsername = mysqli_real_escape_string($db,$_POST['usernameModify']);  
  $newEmail = mysqli_real_escape_string($db,$_POST['emailModify']);
  $newName = mysqli_real_escape_string($db,$_POST['nameModify']);
  $newSurname = mysqli_real_escape_string($db,$_POST['surnameModify']);
  $newDate = $_POST['dateModify'];
  $newSex =$_POST['sex'];
  $newHeight = $_POST['heightModify'];
  $newWeight = $_POST['weightModify'];
  $newFiscalCode = mysqli_real_escape_string($db,$_POST['fiscalCodeModify']);
  $newNationality = $_POST['nationality'];
  $newResidence = $_POST['residence'];
  $newAddress = mysqli_real_escape_string($db,$_POST['addressModify']);
  $newTitle = $_POST['title'];
  $newPhone = mysqli_real_escape_string($db,$_POST['phoneModify']);
  $newPassword= mysqli_real_escape_string($db,$_POST['password']);
  $newPasswordRepeat= mysqli_real_escape_string($db,$_POST['passwordRepeat']);
  $newZipCode=mysqli_real_escape_string($db,$_POST['zipModify']);
  
  
  $query_p = "UPDATE Users SET ";
  $firstline=false;
  if ($newUsername)
  {  	
  		$username_check_query = "SELECT * FROM Users WHERE username='$newUsername' LIMIT 1";
  		$result = mysqli_query($db, $username_check_query);
  		$user = mysqli_fetch_assoc($result);
  
        if ($user) { // if user exists
          //if ($user['username'] === $newUsername) {
            $errors['usernameP']= "Username already exists";
          //}
          }else
          {
  		$firstline=true;
  		$query_p=$query_p." username='$newUsername'";
        $_SESSION['username']=$newUsername;
        }
  }
  
 
  
  if (isset($_FILES['imageModify']) || is_uploaded_file($_FILES['imageModify']['tmp_name'])) {
  //percorso della cartella dove mettere i file caricati dagli utenti
  $uploaddir = 'images/';

  //Recupero il percorso temporaneo del file
  $userfile_tmp = $_FILES['imageModify']['tmp_name'];
  

  //recupero il nome del file
  $userfile_ext = $_FILES['imageModify']['name'];
  if ($userfile_ext){
  	
  	
    //recupero l'estensione
    $ext = pathinfo($userfile_ext, PATHINFO_EXTENSION);
	if ($ext=='jpg' or $ext=='png' or $ext=='jpeg')
    {
      unlink('images/'.$_SESSION['img']);

      $userfile_name = round(microtime(true)).".".$ext;

      //copio il file dalla sua posizione temporanea alla mia cartella upload
      move_uploaded_file($userfile_tmp, $uploaddir . $userfile_name);


        if ($firstline){
            $query_p=$query_p.",img='$userfile_name'";
        } else{
            $query_p=$query_p."img='$userfile_name'";
            $firstline=true;
        }
        $_SESSION['img']=$userfile_name;
      
    } else
    {
    	$errors['imageE']= "Image extension is not valid, upload image only in jpg/jpeg or png";
    }
   }
}
  
  if ($newEmail)
  {
  $email_check_query = "SELECT * FROM Users WHERE OR email='$newEmail' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

	if ($user){	
      if ($user['email'] === $newEmail) {
        $errors['emailP']= "Email already exists";
      } 
    }else
    {  
      if (filter_var($newEmail, FILTER_VALIDATE_EMAIL)){

            if ($firstline){
                $query_p=$query_p.",email='$newEmail'";
            } else{
                $query_p=$query_p."email='$newEmail'";
                $firstline=true;
            }
          $_SESSION['email']=$newEmail;
       	} else
        {
        
        	$errors['emailP']= "Email is not valid";
        }
     }
  }
 
  
  if ($newPassword)
  {
  
    if ($newPassword != $newPasswordRepeat) {
      $errors['passwordRepeatE']="The two passwords do not match";    
    } else if(empty($newPasswordRepeat)){
      $errors['passwordRepeatE']="Password repeat is required";  
    }else if (strlen($newPassword)<8) {
      $errors['emailP']="Password must contain at least 8 characters";
    } else if (!preg_match('/[a-z]/', $newPassword)) {
      $errors['passwordE']="Password must contains a lowercase character";
    }else if (!preg_match('/[0-9]/', $newPassword)) {
      $errors['passwordE']="Password must contains a number";
    }else if (!preg_match('/[A-Z]/', $newPassword)) {
      $errors['passwordE']="Password must contains an uppercase character";
    } else {
      $password=md5($newPassword);
      if ($firstline){
        $query_p=$query_p.",password='$password'";
      } else{
        $query_p=$query_p."password='$password'";
        $firstline=true;
       }
     }
  }
  if ($newName)
  {
  	if ($firstline){
    	$query_p=$query_p.",name='$newName'";
    } else{
    	$query_p=$query_p."name='$newName'";
        $firstline=true;
    }
    $_SESSION['name']=$newName;
  }
  if ($newDate)
  {
  	if ($firstline){
    	$query_p=$query_p.",birthdate='$newDate'";
    } else{
    	$query_p=$query_p."birthdate='$newDate'";
        $firstline=true;
    }
    $_SESSION['birth']=$newDate;
  }
  if ($newSurname)
  {
  	if ($firstline){
    	$query_p=$query_p.",surname='$newSurname'";
    } else{
    	$query_p=$query_p."surname='$newSurname'";
        $firstline=true;
    }
    $_SESSION['surname']=$newSurname;
  }
  if ($newHeight)
  {
  	if ($firstline){
    	$query_p=$query_p.",height='$newHeight'";
    } else{
    	$query_p=$query_p."height='$newHeight'";
        $firstline=true;
    }
    $_SESSION['height']=$newHeight;
  }
  if ($newWeight)
  {
  	if ($firstline){
    	$query_p=$query_p.",weight='$newWeight'";
    } else{
    	$query_p=$query_p."weight='$newWeight'";
        $firstline=true;
    }
    $_SESSION['weight']=$newWeight;
  }
  if ($newZipCode)
  {
  	if ($firstline){
    	$query_p=$query_p.",zip_code='$newZipCode'";
    } else{
    	$query_p=$query_p."zip_code='$newZipCode'";
        $firstline=true;
    }
    $_SESSION['zipCode']=$newZipCode;
  }
  if ($newFiscalCode)
  {
  	if (checkCodiceFiscale($newFiscalCode)) {
      if ($firstline){
          $query_p=$query_p.",fiscal_code='$newFiscalCode'";
      } else{
          $query_p=$query_p."fiscal_code='$newFiscalCode'";
          $firstline=true;
      }
      $_SESSION['fiscalCode']=$newFiscalCode;
     } else
     {
     	$errors['fiscalCodeE']="Fiscal Code is not valid";
     }
  }
  if ($newNationality)
  {
  	if ($firstline){
    	$query_p=$query_p.",nationality='$newNationality'";
    } else{
    	$query_p=$query_p."nationality='$newNationality'";
        $firstline=true;
    }
    $_SESSION['nationality']=$newNationality;
  }
  
  if ($newResidence)
  {
  	if ($firstline){
    	$query_p=$query_p.",country='$newResidence'";
    } else{
    	$query_p=$query_p."country='$newResidence'";
        $firstline=true;
    }
    $_SESSION['country']=$newResidence;
  }
  
  if ($newAddress)
  {
  	if ($firstline){
    	$query_p=$query_p.",address='$newAddress'";
    } else{
    	$query_p=$query_p."address='$newAddress'";
        $firstline=true;
    }
    $_SESSION['address']=$newAddress;
  }
  
  if ($newSex)
  {
  	if ($firstline){
    	$query_p=$query_p.",sex='$newSex'";
    } else{
    	$query_p=$query_p."sex='$newSex'";
        $firstline=true;
    }
    $_SESSION['sex']=$newSex;
  }
  
  if ($newPhone)
  {
  	if ($firstline){
    	$query_p=$query_p.",phone='$newPhone'";
    } else{
    	$query_p=$query_p."phone='$newPhone'";
        $firstline=true;
    }
    $_SESSION['phone']=$newPhone;
  }
  
  $query_p=$query_p." WHERE id_user='$id_user';";
  
  
  if ($firstline)
  {
  	$res = mysqli_query($db, $query_p);  
  }
  

}



// REGISTER USER
if (isset($_POST['registration_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['passwordRepeat']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { $errors['regUsername']= "Username is required"; }
  if (empty($email)) { $errors['regEmail']="Email is required"; }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $errors['regEmail']="Email is invalid";
    }
  if (empty($password_1)) { $errors['regNoPassword']="Password is required"; }
  if (empty($password_2)) { $errors['regNoPasswordRepeat']="Repeat password is required"; }
  else if ($password_1 != $password_2) {
	$errors['regPasswordRepeatError']="The two passwords do not match";    
  } else if (strlen($password_1)<8) {
    $errors['regPassword']="Password must contain at least 8 characters";
  } else if (!preg_match('/[a-z]/', $password_1)) {
	$errors['regPassword']="Password must contains a lowercase character";
  }else if (!preg_match('/[0-9]/', $password_1)) {
    $errors['regPassword']="Password must contains a number";
  }else if (!preg_match('/[A-Z]/', $password_1)) {
    $errors['regPassword']="Password must contains an uppercase character";
  }
 	
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      $errors['usernameP']= "Username already exists";
    }

    if ($user['email'] === $email) {
      $errors['emailP']= "Email already exists";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO Users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: register.php#popup1');
  }
}


//LOGIN
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    $errors['username']="Username is required";
  }
  if (empty($password)) {
    $errors['password']="Password is required";
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
    	$r=mysqli_fetch_array($results);
        $_SESSION['img'] = $r["img"];
        $_SESSION['id_user'] = $r["id_user"];
        $_SESSION['email']    = $r["email"];
        $_SESSION['name']    = $r["name"];
        $_SESSION['img'] = $r["img"];
        $_SESSION['address'] = $r["address"];
        $_SESSION['surname']    = $r["surname"];
        $_SESSION['birth']    = $r["birthdate"];
        $_SESSION['sex']    = $r["sex"];
        $_SESSION['height']    = $r["height"];
        $_SESSION['zipCode'] = $r["zip_code"];
        $_SESSION['weight']    = $r["weight"];
        $_SESSION['fiscalCode']    = $r["fiscal_code"];
        $_SESSION['nationality']    = $r["nationality"];
        $_SESSION['country']    = $r["country"];
        $_SESSION['phone']    = $r["phone"];
      	$_SESSION['username'] = $username;
      	$_SESSION['success'] = "You are now logged in";
      	$_SESSION['title'] = "phd";
      	$_SESSION['loggedin'] = true;

      	header('location: index.php');
    }else {
      $errors['wrongpsw']="Wrong username/password combination";
    }
  }
}

//CONTACT US
if (isset($_POST['mail_user'])) {
  $nameMail = mysqli_real_escape_string($db, $_POST['nameMail']);
  $surnameMail = mysqli_real_escape_string($db, $_POST['surnameMail']);
  $mail = mysqli_real_escape_string($db, $_POST['mail']);
  $textMail = mysqli_real_escape_string($db, $_POST['textAreaMail']);
  
  if (empty($nameMail)) {
    $errors['nameMail']="Name is required";
  }
  if (empty($surnameMail)) {
    $errors['surnameMail']="Surname is required";
  }
  if (empty($mail)) {
    $errors['mail']="Mail is required";
  }
  	
  	$mail_dest = "marco.dallaba@gmail.com";
	$mail_subject = "Contact Us Brainy";
	$mail_headers = "From: " .  $nameMail . " ". $surnameMail . " <" .  $mail . ">\r\n";
	$mail_headers .= "Reply-To: " .  $mail . "\r\n";
	$mail_headers .= "X-Mailer: PHP/" . phpversion();
    if(!(empty($nameMail) || empty($surnameMail) || empty($mail))){
      if(@mail($mail_dest, $mail_subject, $textMail, $mail_headers)){
          $errors['mailSent']="Mail correctly sent. An operator will answer you as soon as possible.";
      }
      else{ 
          $errors['mailNotSent']="Impossible send your email.Please try again later.";
      }
    }    
}

function getImage()
{
	echo $_SESSION['img'];
}

function getMail()
{
	echo $_SESSION['email'];
}
function getName()
{
	echo $_SESSION['name'];
}
function getSurname()
{
	echo $_SESSION['surname'];
}
function getUsername()
{
	echo  $_SESSION['username'];
}
function getImg()
{
	echo  $_SESSION['img'];
}
function getAddress()
{
	echo  $_SESSION['address'];
}
function getHeight()
{
	echo  $_SESSION['height'];
}
function getWeight()
{
	echo  $_SESSION['weight'];
}
function getSexSelected()
{
	echo "
          <option value=\"M\" "; if($_SESSION['sex']==="M"){echo "selected";} echo ">Male</option>
          <option value=\"F\" "; if($_SESSION['sex']==="F"){echo "selected";} echo ">Female</option>
          <option value=\"U\" "; if($_SESSION['sex']==="U"){echo "selected";} echo ">Unknown</option>
	";
}
/*
*/
function getSex()
{
	echo $_SESSION['sex'];
}
function getZipCode()
{
	echo $_SESSION['zipCode'];
}
function getBirth()
{
	echo  date("d/m/Y",strtotime($_SESSION['birth']));
}
function getBirthForModify()
{
	echo $_SESSION['birth'];
}
function getFiscalCode()
{
	echo  $_SESSION['fiscalCode'];
}
function getNationality()
{
	echo  $_SESSION['nationality'];
}
function getPhone()
{
	echo  $_SESSION['phone'];
}
function getCountriesNat($db)
{
	echo  $_SESSION['nationality'];
	$query = "SELECT * FROM Countries";
	$result = mysqli_query($db,$query);
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
   		echo "<option value=\"".$row['country_code']."\" "; if($_SESSION['nationality']===$row['country_code']){echo "selected";} echo ">".$row['country_name']."</option>";
    }
}
function getCountriesRes($db)
{
	$query = "SELECT * FROM Countries";
	$result = mysqli_query($db,$query);
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
   		echo "<option value=\"".$row['country_code']."\" "; if($_SESSION['country']===$row['country_code']){echo "selected";} echo ">".$row['country_name']."</option>";
    }
}
function getTitle(){
	echo "
	<option value=\"el\" "; if($_SESSION['title']==="el"){echo "selected";} echo ">Primary School</option>
	<option value=\"ss\" "; if($_SESSION['title']==="ss"){echo "selected";} echo ">Secondary School</option>
    <option value=\"sss\" "; if($_SESSION['title']==="sss"){echo "selected";} echo ">Secondary Superior School</option>
    <option value=\"un\" "; if($_SESSION['title']==="un"){echo "selected";} echo ">University</option>
    <option value=\"mas\" "; if($_SESSION['title']==="mas"){echo "selected";} echo ">Master</option>
    <option value=\"phd\" "; if($_SESSION['title']==="phd"){echo "selected";} echo ">PhD</option>
    ";
}

function checkCodiceFiscale($cf){
     if($cf=='')
	return false;

     if(strlen($cf)!= 16)
	return false;

     $cf=strtoupper($cf);
     if(!preg_match("/[A-Z0-9]+$/", $cf))
	return false;
     $s = 0;
     for($i=1; $i<=13; $i+=2){
	$c=$cf[$i];
	if('0'<=$c and $c<='9')
	     $s+=ord($c)-ord('0');
	else
	     $s+=ord($c)-ord('A');
     }

     for($i=0; $i<=14; $i+=2){
	$c=$cf[$i];
	switch($c){
             case '0':  $s += 1;  break;
	     case '1':  $s += 0;  break;
             case '2':  $s += 5;  break;
	     case '3':  $s += 7;  break;
	     case '4':  $s += 9;  break;
	     case '5':  $s += 13;  break;
	     case '6':  $s += 15;  break;
	     case '7':  $s += 17;  break;
	     case '8':  $s += 19;  break;
	     case '9':  $s += 21;  break;
	     case 'A':  $s += 1;  break;
	     case 'B':  $s += 0;  break;
	     case 'C':  $s += 5;  break;
	     case 'D':  $s += 7;  break;
	     case 'E':  $s += 9;  break;
	     case 'F':  $s += 13;  break;
	     case 'G':  $s += 15;  break;
	     case 'H':  $s += 17;  break;
	     case 'I':  $s += 19;  break;
	     case 'J':  $s += 21;  break;
	     case 'K':  $s += 2;  break;
	     case 'L':  $s += 4;  break;
	     case 'M':  $s += 18;  break;
	     case 'N':  $s += 20;  break;
	     case 'O':  $s += 11;  break;
	     case 'P':  $s += 3;  break;
             case 'Q':  $s += 6;  break;
	     case 'R':  $s += 8;  break;
	     case 'S':  $s += 12;  break;
	     case 'T':  $s += 14;  break;
	     case 'U':  $s += 16;  break;
	     case 'V':  $s += 10;  break;
	     case 'W':  $s += 22;  break;
	     case 'X':  $s += 25;  break;
	     case 'Y':  $s += 24;  break;
	     case 'Z':  $s += 23;  break;
	}
    }

    if( chr($s%26+ord('A'))!=$cf[15] )
	return false;

    return true;
}
function getNameMailErrors($errors) {	
	if(isset($errors['nameMail'])){
    	echo $errors['nameMail'];
    }
}
function getSurnameMailErrors($errors) {	
	if(isset($errors['surnameMail'])){
    	echo $errors['surnameMail'];
    }
}
function getMailErrors($errors) {	
	if(isset($errors['mail'])){
    	echo $errors['mail'];
    }
}
function mailSent($errors) {	
	if(isset($errors['mailSent'])){
    	echo $errors['mailSent'];
    }
}
function mailNotSent($errors) {	
	if(isset($errors['mailNotSent'])){
    	echo $errors['mailNotSent'];
    }
}

function getLoginUsernameErrors($errors) {	
	if(isset($errors['username'])){
    	echo $errors['username'];
    }
}
function getLoginPasswordErrors($errors){	
	if($errors['password']!==""){
    	echo $errors['password'];
    }
    if($errors['wrongpsw']!==""){
    	echo $errors['wrongpsw'];
    }
}

function getModifyUsernameError($errors) {	
	
    if(isset($errors['usernameP'])){
    	echo $errors['usernameP'];
    }
}
function getModifyEmailError($errors){	
	
    if(isset($errors['emailP'])){
    	echo $errors['emailP'];
    }   
}
function getModifyPasswordError($errors) {
	
    if(isset($errors['passwordE'])){
    	echo $errors['passwordE'];
    }
}
function getModifyPasswordRepeatError($errors){
	if (isset($errors['passwordRepeatE'])){
    	echo $errors['passwordRepeatE'];
    }
}
function getModifyFiscalCodeError($errors){
	if (isset($errors['fiscalCodeE'])){
    	echo $errors['fiscalCodeE'];
    }
}
function getModifyImageError($errors){
	if (isset($errors['imageE'])){
    	echo $errors['imageE'];
    }
   
}

function getRegistrationUsernameError($errors)
{
	if(isset($errors['regUsername'])){
		echo $errors['regUsername'];
	}
	if(isset($errors['regNoUsername'])){
		echo $errors['regNoUsername'];
	}
	if(isset($errors['usernameP'])){
		echo $errors['usernameP'];
	}
}

function getRegistrationEmailError($errors)
{
	if(isset($errors['regEmail'])){
		echo $errors['regEmail'];
	}
	if(isset($errors['regNoEmail'])){
		echo $errors['regNoEmail'];
	}
	if(isset($errors['emailP'])){
		echo $errors['emailP'];
	}
}

function getRegistrationPasswordError($errors)
{
	if(isset($errors['regPassword'])){
		echo $errors['regPassword'];
	}
	if(isset($errors['regNoPassword'])){
		echo $errors['regNoPassword'];
	}
}

function getRegistrationPasswordRepeatError($errors)
{
	if(isset($errors['regPasswordRepeatError'])){
		echo $errors['regPasswordRepeatError'];
	}
	if(isset($errors['regNoPasswordRepeat'])){
		echo $errors['regNoPasswordRepeat'];
	}
}
?>