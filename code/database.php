<?php

 class database  {



     public function getAllUsers(){
         $db=mysqli_connect("localhost","root","","ett_laderas");

         $sql = "select *from users ";
        return mysqli_query($db,$sql);
     }

     public  function getAllPayments(){
         $db=mysqli_connect("localhost","root","","ett_laderas");

         $sql = "select *from payment ";
         return mysqli_query($db,$sql);
     }

     public function  getAllOffers(){
         $db=mysqli_connect("localhost","root","","ett_laderas");

         $sql = "select *from joboffers ";
         return mysqli_query($db,$sql);
     }
         public function getAllHiredEmployees(){
    $db=mysqli_connect("localhost","root","","ett_laderas");

               $sql = "select *from hiredemployees ";
               return mysqli_query($db,$sql);
         }
     public function getAllEmployees(){
         $db=mysqli_connect("localhost","root","","ett_laderas");

         $sql = "select *from employees ";
         return mysqli_query($db,$sql);
     }

     public function changePass($res,$nres,$uss)
    {
        $db=mysqli_connect("localhost","root","","ett_laderas");

        $result = $this->getAllUsers();
        $encontrado = false;

        while (($fila = mysqli_fetch_array($result)) != NULL && !$encontrado ) {

            if ($uss == $fila['iduser'] && $res == $fila['password'] && $nres!=null) {
                $encontrado = true;
                mysqli_query($db, "update users set users.password='$nres' where users.iduser='$uss'");
                include 'succsess.html';
                include 'profile.php';
                header("refresh: 2; url=http://localhost/ett%20laderas/code/profile.php");

            } else {
                include 'alert.html';
                include 'profile.php';
                header("refresh: 2; url=http://localhost/ett%20laderas/code/profile.php");


            }

        }


    }



    public function findEmployee($emp)
    {

        $result = $this->getAllEmployees();

          if($result->num_rows>0){

              while ($fila = $result->fetch_assoc()) {


                       if ($emp == $fila['dni']) {
                           include 'employee.php';


                             return new employee($fila['dni'],$fila['socialsecurity'],$fila['numberaccount'],
                                 $fila['name'],$fila['surname'],$fila['email'],$fila['residence']);


                          }
                     }

             }

              return null;

    }


    public function showAllOffers(){

         $result=$this->getAllOffers();
         $array=null;

         if ($result->num_rows>0){

             while ($row=$result->fetch_assoc()){

                 $array[]=$row;
             }

         }
         return $array;
    }

public function isIDemp($employee){
         $found=false;
         $resutl=$this->getAllEmployees();
         while($row=$resutl->fetch_assoc()){
             if($row['dni']==$employee)$found= true;

         }

         return $found;

}

    public function AddPayment($amount,$employee){
         if($this->isIDemp($employee)==true){
             $result=$this->getAllPayments();
             $id=rand(0,999);
             $found=false;

             if ($result->num_rows>0){

                 while ($row=$result->fetch_assoc()){
                     if($row['idpayment']==$id) $found==true;


                 }

             }
             if($found) $this->AddPayment($amount,$employee);
             else $sql="INSERT INTO `payment` (`idpayment`, `dni`,  `cuantity`) VALUES ('$id', '$employee', '$amount');";

             $db=mysqli_connect("localhost","root","","ett_laderas");

             mysqli_query($db,$sql);
             echo"payment ok";
         }else echo "no employee found";

    }

    public function addemptoOffer($idoffer,$dni){
        $hired=$this->getAllHiredEmployees();
         $found=false;

         if($hired->num_rows>0){
             while($row=$hired->fetch_assoc()){
                 if($row['idoffer']==$idoffer && $row['dni']==$dni)$found=true;
             }

         }
         if(!$found){
             $db=mysqli_connect("localhost","root","","ett_laderas");
             $sql="INSERT INTO `hiredemployees` (`dni`, `idoffer`) VALUES ('$dni', '$idoffer');";
             mysqli_query($db,$sql);
         }else echo "cant add employee to offer";


    }



}


?>