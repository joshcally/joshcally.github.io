<?php
  //
  // The main content of the page will be in this variable
  //
  $output = "";
  $db = new PDO("mysql:host=localhost;dbname=Tetris_Scores;charset=utf8", "root", "200337226");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  
  $name = $_POST['name'];
  $score = $_POST['score'];
  $level = $_POST['level'];
  $name = htmlspecialchars($name);
    $stmt = $db->prepare("INSERT INTO new_table VALUES (?,?,?)");
    $stmt->bindValue(1, $name);
    $stmt->bindValue(2, $score);
    $stmt->bindValue(3, $level);
    $stmt->execute();
  $query =     " SELECT * FROM new_table ORDER BY Score DESC LIMIT 10 ";
  $statement = $db->prepare( $query );
  $statement->execute(  );
      
  //
  // Fetch all the results
  //
  $results    = $statement->fetchAll(PDO::FETCH_ASSOC);
  
  $html = '<table class="table table-striped" border="1">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                  <th>Level</th>
                </tr>';
  foreach($results as $row)
  {
    $html .= '<tr>
                  <td>' . $row['name'] . '</td>
                  <td>' . $row['score'] . '</td>
                  <td>' . $row['level'] . '</td>
                  </tr>';
  }
  $html .= '</table>';
//
// Below is the HTML content
//
echo $html;
?>