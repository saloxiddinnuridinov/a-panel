<?php 
    require_once("config.php");
    $sql = "SELECT * FROM `post_db`";
    $result = $connection->query($sql);
    if (!$result) {
    echo $connection->error;
    }
    
?>
<div class="card">
    <div class="card-title pr">
        <h4>All Exam Result</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table student-data-table m-t-20">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Edit&Delete</th>
                    </tr>
                </thead>
                <tbody>
<?php
    foreach ($result as $key => $value) {
       
?>
                        <tr>
                            <td><?=$value["id"];?></td>
                            <td><?=$value["title"];?></td>
                            <td>
                            <?=$value["content"];?>
                            </td>
                            <td>
                            <?=$value["photo"];?>
                            </td>
                            <td>
                            <?=$value["user_name"];?>
                            </td>
                            <td>
					        <a href="edit.php?id=<?=$value["id"]?>" class="btn btn-success">
					        <i class="fa fa-edit"></i></a>
					        <a href="delete.php?id=<?=$value["id"]?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
				</td>
                        </tr>
<?php
}
?>                        
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>