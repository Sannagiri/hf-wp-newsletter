<?php
define('CSS_PATH', plugin_dir_url(__DIR__).'/assets/hfstyle.css');
define('JS_PATH', plugin_dir_url(__DIR__).'/assets/hfscript.js'); //define CSS path 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Letter Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>?ver=<?php echo rand(111,999)?>">
    <script type="text/javascript" src="<?php echo JS_PATH;?>?ver=<?php echo rand(111,999)?>"></script>
    
</head>
<body>
    <div class="heading">
        <h3>Dashboard</h3>
    </div>
    <div class="cred">
        <label for="API_Endpoint" class="cred_head">API-Endpoint</label>
        <input class="cred_box_1" type="text" name="API_Endpoint">
        <br>
        <label for="Client_ID" class="cred_head">Client-ID</label>
        <input class="cred_box_2" type="text" name="Client_ID">
        <br>
        <label for="Client_Secret" class="cred_head">Client-Secret</label>
        <input class="cred_box_3" type="text" name="Client_Secret">
    </div>
    <div class="tab_1">
        <h4>Newsletter</h4>
    </div>
    <div>
    <a href="http://localhost/wordpresssite/wp-admin/admin.php?page=new_shortcode_plugin" class="new_button">New</a>
    </div>
    <table id="shortcodes_tbl" class="shortcodes">
        <tr>
            <th>#ID</th>
            <th>Shortcode</th>
            <th>Law Text</th>
            <th>Newsletter List</th>
            <th>Action</th>
        </tr>
        <tr>
            <td></td>
            <td>[hf-shortcode-1]</td>
            <td>Interference Text</td>
            <td>Interference List</td>
            <td>
                <a href="#" class="edit_button">Edit</a>
                <a href="#" class="delete_button">Delete</a>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>[hf-shortcode-2]</td>
            <td>Interference Text</td>
            <td>Interference List</td>
            <td width="200">
                <a href="#" class="edit_button">Edit</a>
                <a href="#" class="delete_button">Delete</a>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>[hf-shortcode-3]</td>
            <td>Interference Text</td>
            <td>Interference List</td>
            <td width="200">
                <a href="#" class="edit_button">Edit</a>
                <a href="#" class="delete_button">Delete</a>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>[hf-shortcode-4]</td>
            <td>Interference Text</td>
            <td>Interference List</td>
            <td width="200">
                <a href="#" class="edit_button">Edit</a>
                <a href="#" class="delete_button">Delete</a>
            </td>
        </tr>
    </table>
    
</body>
</html>