<!DOCTYPE html>
<html>
  <head>
    <title>Test DB</title>
  </head>
  <body>
    <table>
     <thead>
        <tr>
          <th>id</th>
          <th>username</th>
          <th>email id</th>
        </tr>
     </thead>
     <tbody>
       <td>
       <?php
          foreach ($userArray as $user) {
            echo "<pre>";
            echo $user['id'];
            echo "</pre>";
            }
            
         ?>
       </td>
       <td>
       <?php
          foreach ($userArray as $user) {
            echo "<pre>";
            echo $user['username'];
            echo "</pre>";
            }
            
         ?>
       </td>
       <td>
         <?php
          foreach ($userArray as $user) {
            echo "<pre>";
            echo $user['email_id'];
            echo "</pre>";
            }
            
         ?>
       </td>
      </tbody>
    </table>
  </body>
</html>

