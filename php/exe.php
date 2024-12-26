<?php 
include("code.php");
include("config.php");
//-----------------------------------------------------------------------------------
if (isset($_POST["sub"])) {
    if (tokencheck($_POST['token'])) {
        if (empty($_POST['name'])||empty($_POST['data'])||empty($_POST['prise'])||empty($_POST['number'])) {
            $_SESSION['insert1']='لطفا فرم را پر کنید';
            header("location:../insert.php");
            exit();
        } else {
            $insert=insert($_POST['name'], $_POST['data'], $_POST['prise'], $_POST['number']);
            if ($insert) {
                $_SESSION['insert2']='اطلاعات شما با موفقیت ثبت شد';
                header("location:../index.php");
                exit();
            }
        }
    }
}

//-----------------------------------------------------------------------------------

if (isset($_POST["sec"])) {
    if (tokencheck($_POST['token'])) {
        $search=search($_POST['name']);
        if ($search) {
              $_SESSION['search1']='جستجو با موفقیت انجام شد';
            header("location:../search.php");
            exit();
        } else {
            if (empty($_POST['name'])||!$search) {
                
                 $_SESSION['search2']='لطفا فیلد جستجو را پر کنید';
                header("location:../search.php");
                exit();
            }
        }
    }
}

//-----------------------------------------------------------------------------------

        if (isset($_POST["box"])) {        
                if (isset($_POST["list"])) {
                    $id=($_POST["list"]);                
                        $delete=delete($id);                   
                    if ($delete) {
                        $_SESSION['delete1']='فیلد با موفقیت حذف شد';
                        header("location:../index.php");
                        exit();
                    }                    
                }                        
                 else {
                    if (empty($_POST['list'])|| !$delete) {
                     $_SESSION['delete2']='لطفا فیلد مورد نظر را انتخاب کنید';
                    header("location:../index.php");
                    exit();
                }
            }
        }  
    
        
//-----------------------------------------------------------------------------------

            if (isset($_POST["boxx"])) {
               
                    if (empty($_POST['list'])) {
                        $_SESSION['edit1']='لطفا فیلد مورد نظر را انتخاب کنید';
                        header("location:../index.php");
                        exit();
                    }                            
                else {
                if (isset($_POST["list"])) {
                    $_SESSION["edit"]=$_POST["list"];
                    header("location:../edit.php");
                    exit();
                }
                    }
                }
//-----------------------------------------------------------------------------------
             
                         if (isset($_POST['edit'])) {
                             if (tokencheck($_POST['token'])) {
                                if (empty($_POST['name'])||empty($_POST['data'])||empty($_POST['prise'])||empty($_POST['number'])) {
                                     $_SESSION['edit2']=' لطفا تمام فیلدهارا پر کنید و دوباره اقدام کنید';
                                    header("location:../index.php");
                                    exit();
                                }
                                 else {
                                    $id=$_POST['id'];
                                    $update=admin($id, $_POST['name'], $_POST['data'], $_POST['prise'], $_POST['number']);
                                    if ($update) {
                                        $_SESSION['edit2']='ویرایش اطلاعات با موفقیت انجام شد';
                                        header("location:../index.php");
                                        exit();
                                    }
                                }
                            }
                                     }
//-----------------------------------------------------------------------------------

                          
?>
  
                              