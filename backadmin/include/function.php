  <?php	

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function systemInfo(){
	global $conn;
	$site_query = mysqli_query($conn, "select * from ".SI." where S_Id = 1");
	if(mysqli_num_rows($site_query)>0){
		$site_data = mysqli_fetch_assoc($site_query);
		$response = array(
		"flag" => 1,
		"sitename" => $site_data['S_Name'],
		"siteemail" => $site_data['S_Email'],
		"referralComm" => $site_data['S_ReferralComm'],
		"sitephone" => $site_data['S_Phone'],
		"siteaddress" => $site_data['S_Address'],
		"siteMWithdrawal" => $site_data['S_MWithdrawal'],
		"siteWFee" => $site_data['S_WithdrawFee'],
		);
	}else{
		$response = array(
		"flag" => 0
		);
	}
	return $response;
}

function calcPercentage($val, $per){
		return ($per / 100) * $val;
	}
	
 function checkPassword($password, $s_password){
        global $conn;
        
        if(password_verify($password, $s_password)){
            return 1;
        } else {
           return 0;
        }

    }
	
	function updatePassword($id, $newpass){
        global $conn; 
		$query = $conn->query("UPDATE ".A." SET A_Password = '$newpass' WHERE A_Id = $id ");
		if(mysqli_affected_rows($conn)>0){
			return 1;
		}else{
			return 0;
		}
       
    }

function sendMail($to, $subject, $message){
		$mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0; // Set to 2 for debugging
            $mail->isSMTP();
            $mail->Host = 'prymecapitals.com'; // Your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@prymecapitals.com'; // Your SMTP username
            $mail->Password = 'Bigvon@2024'; // Your SMTP password
            // $mail->Password = 'rubymailpass';
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom('contact@prymecapitals.com', 'Pryme Capitals'); // Sender email and name
            $mail->addAddress($to, NULL); // Recipient email and name

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message; // You can use HTML for the email content

            // Send the email
            $mail->send();
            return true; // Email sent successfully
        } catch (Exception $e) {
            // print_r($e); die();
            return false;
        }
	}

function fundUser($id, $amt, $column, $sendemail="yes"){
global $conn;
$user=fetchUserSingle($id);
$subject = "Your account was Successfully Funded";
 $message = "
    <html>
        <head>
            <style>
                .btn{
                    padding: 12px;
                    background-color: gold;
                    color: black;
                    border-radius: 8px;
                    border: 1px solid blue;
                    text-decoration: none;
                }
            </style>
        </head>
        <body style='background-color:#000033; color:white; padding: 10px; height: auto; padding: 20px'>
            <h5> Hi ".$user['_userName'].", </h5>
            <p>Your account was successfully funded with the sum of $".$amt." <br>
            Please use the link below to login to your dashboard to view your new Account Balance<br>
            Link: https://www.prymecapitals.com/login
            </p>

            

            <p>

                You are receiving this mail because you registered to Pryme Capitals. <br>

                Thank you for choosing <a href='https://prymecapitals.com'>Pryme Capitals</a>.

            </p>  
            <div style='background-color:white; height:4px; width:100%; margin-top:20px; margin-bottom:20px'></div>
            <p>
                For questions drop us mail at admin@prymecapitals.com.<br>
                <h6>&copy ".date('Y')." Pryme Capitals. All Rights Reserved.</h6>

            </p> 

        </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <admin@prymecapitals.com>' . "\r\n";
    if($sendemail=="yes"){
         sendMail($user['_uEmail'],$subject,$message);
    }
$query = $conn->query("update ".C." set $column = ($column + $amt) where _uId = $id");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function mfundUser($id, $amt){
	global $conn;
	$query = $conn->query("update ".C." set _depositBal = (_depositBal-$amt), _totalBal = (_totalBal-$amt) where _uId = $id");
	
	if(mysqli_affected_rows($conn)>0){
		return 1;
	}else{
		return 0;
	}
	}

function invest($id, $pid, $amt, $to){
global $conn;
$query = $conn->query("insert into ".I." (I_UserId, I_PlanId, I_Amt, I_EndDate)values ('$id', '$pid', '$amt', '$to')");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function insertNotification($id, $notification){
global $conn;
$query = $conn->query("insert into ".N." (N_UserId, N_Info)values ('$id', '$notification')");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function uploadID($gender, $phone, $dob, $position, $real_address, $id, $link, $status){
global $conn;
$query = $conn->query("update ".C." set C_Gender = '$gender', C_Phone = '$phone', C_DOB = '$dob', C_Employment = '$position', C_Address = '$real_address', C_Id_Link = '$link', C_Status = '$status' where C_Id = $id");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function withdraw($id, $address, $amt){
global $conn;
$query = $conn->query("insert into ".T." (T_UserId, T_Amount, T_Wallet, T_Type)values ('$id', '$amt', '$address', 'Withdraw')");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}


function fetch_deposit($id){
global $conn;
$query = $conn->query("select T_Amount as _amt, T_UserId as userID from ".T." where T_Id = $id ");
$result = mysqli_fetch_assoc($query);

return $result;
}

function _deposit($id, $price, $btc, $tranxId){
global $conn;
$query = $conn->query("insert into ".T." (T_UserId, T_Amount, T_Btc, T_TranxId, T_Type)values ('$id', '$price', '$btc', '$tranxId', 'Deposit')");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function readNotification($id){
global $conn;
$query = $conn->query("update ".N." set N_Status = 'R' where N_Id = $id");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function changeStatus($id, $action, $tablename, $columnToUpdate, $columnId){
global $conn;
$query = $conn->query("update ".$tablename." set $columnToUpdate = '$action' where $columnId = $id ");
	if(mysqli_affected_rows($conn)>0){
		return 1;
	}else{
		return 0;
	}
}
	

function debitUserBalance($id, $amt){
global $conn;
$query = $conn->query("update ".C." set C_Balance = (C_Balance - $amt) where C_Id = $id");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}


function register($name, $email, $hpass){
global $conn;
$query = $conn->query("insert into ".C." (C_Name, C_Email, C_Password) values ('$name', '$email', '$hpass')");
if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function createWallet($wallet){
global $conn;
$query = $conn->query("insert into ".WALLET." (W_Name) values ('$wallet')");
if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function createBTC($address, $wallet){
global $conn;
$query = $conn->query("insert into ".BTC." (B_Address, B_Wallet) values ('$address', '$wallet')");
if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function createPlan($pname, $pdays, $pmin, $pmax, $ppercentage){
global $conn;
$query = $conn->query("insert into ".P." (_planName, _day, _minAmt, _maxAmt, _return) values ('$pname', '$pdays', '$pmin', '$pmax', '$ppercentage')");
if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function plans(){
global $conn;
$result = [];
$query = $conn->query("select * from ".P." where _status = 'A'");
while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}

function plantrx(){
global $conn;
$result = [];
$query = $conn->query("select * from _plantrx join _plan on _planId=id join _users on _user=_uId where _status = 'A'");
while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}

function ticket(){
global $conn;
$result = [];
$query = $conn->query("select * from _ticket join _users on _user=_uId");
while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}


function checkEmail($email){
    $result = filter_var($email, FILTER_VALIDATE_EMAIL);
	if(!$result){
			return 0;
	}else{
		return 1;
	}
}

function redirectTo($location){
    header("location: ".$location);
}

function passwordHash($password){
    $hashed = password_hash($password, PASSWORD_DEFAULT);
	return $hashed;
}

///NEW
function fetchWithdrawal(){
$result = [];
global $conn;
$query = $conn->query("select * from ".T." join ".C." on wUser = _uId");

while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}
function fetchWithdrawalOne($id){
global $conn;
$query = $conn->query("select * from ".T." join ".C." on wUser = _uId where wId='$id'");
return mysqli_fetch_assoc($query);
}

function fetchInvestment(){
$result = [];
global $conn;
$query = $conn->query("select * from ".I." join ".C." on I_UserId = _uId join ".P." on I_PlanId = P_Id");

while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}

function fetchDeposit(){
global $conn;
$query = $conn->query("select * from _history join ".C." on hUser = _uId");
while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}

function fetchUserSingle($id){
global $conn;
$query = $conn->query("select * from ".C." where _uId = $id");
return mysqli_fetch_assoc($query);
}

function fetchUserSingleByUname($id){
global $conn;
$query = $conn->query("select * from ".C." where _userName = '$id'");
return mysqli_fetch_assoc($query);
}


function fetchUsers(){
$result = [];
global $conn;
$query = $conn->query("select * from ".C." order by _uId desc");
while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}

function wallets(){
$result = [];
global $conn;
$query = $conn->query("select * from ".WALLET." where W_Status = 'A' order by W_Id desc");
while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}

function btc(){
$result = [];
global $conn;
$query = $conn->query("select * from ".BTC." join ".WALLET." on B_Wallet = W_Id where B_Status = 'A' && W_Status = 'A' order by B_Id desc");
while($row = mysqli_fetch_assoc($query)){
	$result[] = $row;
}
return $result;
}


function updateSetting($name, $address, $email, $min, $referral, $wFee, $phone){
global $conn;
$query = $conn->query("update ".SI." set S_Name = '$name', S_Email = '$email', S_Address = '$address', S_MWithdrawal = '$min', S_ReferralComm = '$referral', S_WithdrawFee = '$wFee', S_Phone = '$phone' where S_Id = 1")
or die(mysqli_error($conn));
if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function replyTicket($id, $reply){
global $conn;
$query = $conn->query("update _ticket set _tReply = '$reply' where _tId = $id")
or die(mysqli_error($conn));
if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function updateWallet($id, $wallet){
global $conn;
$query = $conn->query("update ".WALLET." set W_Name = '$wallet' where W_Id = $id")
or die(mysqli_error($conn));
if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function updateBTC($id, $address){
global $conn;
$query = $conn->query("update ".BTC." set B_Address = '$address' where B_Id = $id")
or die(mysqli_error($conn));
if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function updatePlan($id, $pname, $pdays, $pmin, $pmax, $ppercentage){
global $conn;
$query = $conn->query("update ".P." set _planName = '$pname', _day = '$pdays', _minAmt = '$pmin', _maxAmt = '$pmax', _return = '$ppercentage' where id = $id")
or die(mysqli_error($conn));

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}


function fundUserInvest($id, $amt, $column, $column2){
global $conn;
$query = $conn->query("update ".C." set $column = ($column + $amt), $column2 = ($column2 + $amt) where C_Id = $id");

if(mysqli_affected_rows($conn)>0){
	return 1;
}else{
	return 0;
}
}

function _count($tablename){
global $conn;
$query = $conn->query("select * from ".$tablename."");
$result = mysqli_num_rows($query);

return $result;
}

function totalDeposited(){
global $conn;
$query = $conn->query("select sum(C_Balance) as bal from ".C."");
$result = mysqli_fetch_assoc($query);

return $result;
}
?>