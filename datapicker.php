<?php
//	$conn = mysqli_connect("localhost", "root", "", "blog_samples");

$van = "";
$tot = "";

$queryCondition = "";
if (!empty($_POST["datum"]["van"])) {
    $van = $_POST["datum"]["van"];
//    print '<pre>';
//    print_r($van);
//    print '<pre>';
//    echo "\n";
//    print '<pre>';
//    var_dump($van);
//    print '<pre>';
//    echo "\n";
    echo 'van = ' . $van;
    echo "\n";
    $temp = explode("-", $van);
    echo 'temp =' . $temp[2] . "<br>";
        echo "\n";
    list($fid, $fim, $fiy) = $temp;
   
    date_default_timezone_set('UTC');
   $post_at_todate = date('Y-m-d');
//    if (!empty($_POST["search"]["post_at_to_date"])) {
//        $post_at_to_date = $_POST["search"]["post_at_to_date"];
//        list($tid, $tim, $tiy) = explode("-", $_POST["search"]["post_at_to_date"]);
//        $post_at_todate = "$tiy-$tim-$tid";
//    }

    $queryCondition .= "WHERE van BETWEEN '$fiy-$fim-$fid' AND '" . $post_at_todate . "'";
    echo 'query =' . $queryCondition . "<br>";
    $queryCondition2 = "WHERE van BETWEEN '$van' AND '" . $post_at_todate . "'";
    echo 'query2 =' . $queryCondition2 . "<br>";
}
//$sql = "SELECT * from posts " . $queryCondition . " ORDER BY post_at desc";
//	$result = mysqli_query($conn,$sql);
?>




<html>
    <head>
        <title>Data picker test</title>		
        <script src="jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="jquery-ui.css">
        <script src="jquery-ui.js"></script>

         <script>
            $.datepicker.setDefaults({
                showOn: "button",
                buttonImage: "datepicker.png",
                buttonText: "Date Picker",
                buttonImageOnly: true,
                dateFormat: 'dd-mm-yy'
            });
            $(function () {
                $("#van").datepicker();
                $("#tot").datepicker();
            });
        </script>
        
<!--        <style>
    .table-content{border-top:#CCCCCC 4px solid; width:50%;}
    .table-content th {padding:5px 20px; background: #F0F0F0;vertical-align:top;} 
    .table-content td {padding:5px 20px; border-bottom: #F0F0F0 1px solid;vertical-align:top;} 
</style>-->
    </head>
    
    <body>
        <div >
            <h2 >Data picker test</h2>
            <form name="frmZoek" method="post" action="">
                 <p >
                    <input type="text" placeholder="From Date" id="van" name="datum[van]"  value="<?php echo $van; ?>"  />
                    <input type="text" placeholder="To Date" id="tot" name="search[tot]" value="<?php echo $tot; ?>"  />			 
                    <input type="submit" name="go" value="Search" >
                </p>
                
                
            </form>                                             
        </div>              
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>