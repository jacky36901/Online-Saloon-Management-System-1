<?php include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 80%;
                   margin-left:0px;
                   
               }
               th {
    background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
    color: orange;
    height: 40px;
    width:70px;
}
tr{
   
    height: 30px;
    border-bottom: 1px solid #ddd;
}
    th
    {
         text-align: center;
    }
    td{
        text-align: center;
    }
    .aa:link, .aa:visited {
  background-color: #ccc;
  color: red;
  padding: 10px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
    td{
        background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
        color:whitesmoke;
        }
    td:hover{
        background-color: aliceblue;
        color: black;
    }
    
    body{
        background:url(a.jpg) no-repeat top fixed ;
        background-size:cover;
     height: 800px;
        
    }
.aa:hover, .aa:active {
  background-color:burlywood;
}
    </style>
 </head>
	<!--user--->
<body>
				<table border="1" style="position:relative;width:1000px;left:320px;top:60px;">

					<thead>
						<tr>
						
                            <th>Package Name</th>
                            

                            <th>Edit</th>
                            
    
				       </tr>
					</thead>
					<?php
					$sql="select * from package";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
						
                        <td><?php echo $tbl[$i][1];?></td>
                        
                       
                        <td><a href="editdoc1.php?id=<?php echo $tbl[$i][0];?>" class="aa"><button>Edit</button></a>
                      </td>
					<?php 
					}
					?>
					</tbody>
				
				</table>
</body>
	<!--user-->
<?php
if(isset($_GET['a'])){
    $p=$_GET['a'];
    $sql="UPDATE`tbl_doctor`SET status='Inactive' WHERE did='$p'  ";
    setDatas($sql);
    $sql="select email from tbl_doctor where did='$p'";
    $tbl=getDatas($sql);
     $eml=$tbl[0][0];
     $sql="UPDATE`tbl_login`SET status='Inactive' WHERE username='$eml'  ";
    setDatas($sql);
    nextpage('viewdoc.php');
    }