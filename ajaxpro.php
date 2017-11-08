<?php


$row = array();
$return_arr = array();
$row_array = array();

if((isset($_GET['term']) && strlen($_GET['term']) > 0) )
{
    if(isset($_GET['term']))
    {
        $getVar = $db->real_escape_string($_GET['term']);
        $whereClause =  " speciality LIKE '%" . $getVar ."%' ";
    }
    
    /* limit with page_limit get */

    $limit = intval($_GET['page_limit']);

    $sql = "SELECT speciality FROM doctors where $whereClause ";

    /** @var $result MySQLi_result */
    $result = $db->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_array())
            {                
                $row_array['speciality'] = utf8_encode($row['speciality']);
                array_push($return_arr,$row_array);
            }

        }
}
else
{
    
    $row_array['speciality'] = utf8_encode('Start Typing....');
    array_push($return_arr,$row_array);

}

$ret = array();
/* this is the return for a single result needed by select2 for initSelection */
//if(isset($_GET['id']))
//{
//    $ret = $row_array;
//}
/* this is the return for a multiple results needed by select2
* Your results in select2 options needs to be data.result
*/
//else
//{
    $ret['results'] = $return_arr;
//}
echo json_encode($ret);

//$db->close();

//if (false) {
//    $app = new \Slim\Slim();
//    $log = new Logger('main');
//}

//$row = DB::query("SELECT DISTINCT speciality FROM doctors");
//
////$sql = "SELECT speciality FROM doctors"; 
//$app->get('/bookappointment', function() use($app) {
//    
//    
//    //$result = $mysqli->query($sql);
//    $json = [];
//
//    foreach ($row as $result){
//        $json[] = ['speciality'=>$result['speciality']];
//    }
//
//});

//while($result = $row->fetch_assoc()){
//     
//}

//echo json_encode($json);