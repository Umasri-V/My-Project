<?php
class database
{
    public $con;
// database conection
    public function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "Umasri@123", 'product');
        if (!$this->con) {
            echo "not connected";
        }
    }


    // function insert records
    public function insert($post)
    {
        $vehiclename = $post['vehiclename'];
        $color = $post['color'];
        $mileage = $post['mileage'];
        $mobilenumber = $post['mobilenumber'];

        $sql = "insert into detail(vehiclename,color,mileage,mobilenumber) values('$vehiclename','$color','$mileage','$mobilenumber')";
        //execute query
        $res = $this->con->query($sql);
        if ($res) {
            //echo "data inserted";
            header('location:crud.php?msg=Inserted Successfully');
        } else {
            echo "error" . $sql . "<br>" . $this->con->error;
            //die(mysqli_error($conn));
        }
    }

    //display record

    public function display()
    {
        $sql = "SELECT * FROM  detail";
         $res = $this->con->query($sql);
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    //edit

    public function displayid($editid)
    {
        $sql = "select * from detail where id='$editid'";
        $res = $this->con->query($sql);
        if ($res->num_rows == 1) {
            $row = $res->fetch_assoc();
            return $row;
        }

    }

    //update record

    public function update($post)
    {
        $vehiclename = $post['vehiclename'];
        $color = $post['color'];
        $mileage = $post['mileage'];
        $mobilenumber = $post['mobilenumber'];
        $editid = $post['hid'];

        $sql = "update detail set vehiclename='$vehiclename',color='$color',mileage='$mileage',mobilenumber='$mobilenumber' where id='$editid'";
        //execute query
        $res = $this->con->query($sql);
        if ($res) {
            //echo "data inserted";
            header('location:crud.php?msg=updated Successfully');
        } else {
            echo "error" . $sql . "<br>" . $this->con->error;
            //die(mysqli_error($conn));
        }
    }

    //delete

    public function deleterecord($delid){
        $sql="delete from detail where id='$delid'";
        $res=$this->con->query($sql);
        if($res){
            header('location:crud.php?msg=deleted successfully');
        }
        else{
            echo "error" . $sql . "<br>" . $this->con->error;
        }
    }

}