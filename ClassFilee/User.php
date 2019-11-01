<?
// Customer class 
Class Customer{

//Common Properties of Customer Class

private $uid = null;
private $name = "";
private $address = "";
private $email = "";
private $mobno = "";
private $uname = "";
private $password = "";

public function _construct($uid, $name, $address, $email, $mobno, $uname, $password){
    $this->uid = $uid;
    $this->name = $name;
    $this->address = $address;
    $this->email = $email;
    $this->mobno = $mobno;
    $this->uname = $uname;
    $this->password = $password;
}

public static function create(){
    // A new user registration in the table Customer record
   // $password=md5($password);//Password encryption
    $result = false;
    $sql = sprintf("insert into tbl_customerdetails(name,address,email,mobno,uname,password values('%s', '%s', '%s', '%s','%s')",  $fname, $lname, $address,$suburb,$city,$po, $phone,$email, $password);
    $qresult = $mysqli->query($sql);
        if ($qresult){
             $uid = $mysqli->insert_id;
             $user = new User($uid, $name, $address,$email, $mobno, $uname, $password);      
            $result = $user;
            $_SESSION['uname'] = $uname;//initialising session
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['id']=$uid;
         }    
    return $result;
}//End of create()

public static function find($mysqli, $email,$password){
    // To Search CUstomer Details in the table with the User Id
    // get that record and create user object 
    // return user object OR false if we cannot find it
    $result = false;
   // $password=md5($password);
    $sql = sprintf("select * from userdetails where email='%s' or username='%s' and password='%s'", $email,$usernames,$password);
    $qresult = $mysqli->query($sql);
    if ($qresult){
      if ($qresult->num_rows == 1){
        $row = $qresult->fetch_assoc();
        $customers = new customers($row['id'], $row['name'], $row['address'], $row['email'], $row['mobno'], $row['username'],$row['Password']);
        
        // session creation

        $_SESSION['username']=$email;
        $_SESSION['firstname']=$row['FirstName'];
        $_SESSION['lastname']=$row['LastName'];
        $result = $user;
      }
    }
    return $result;
  }// End of find()

  public static function getAll($mysqli){
    // To get the Customer Details and to  return  a collection of user objects
    // returns false or a collection of user objects

    $sql = "select * from tbl_customerdetails";
    $result = $mysqli->query($sql);  
    $user = false;
    if ($result){
      $customers = new Collection();
      while($row = $result->fetch_assoc()){
        $customers = new User($row['id'], $row['name'], $row['address'], $row['email'], $row['username'], $row['Password']);
        $customers->Add($row['id'], $customers);
      }    
    }//End of getAll()
    return $customers;    
  }

//                                               <<<< Setter Function >>>>






//                                               <<<< Getter Function >>>>



}//End of class
?>