<?php
    $page = "PHP Exercise";
    include("views/header.php");
    $countries = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels","Denmark"=>"Copenhagen","Finland"=>"Helsinki","France"=>"Paris","Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana","Germany"=>"Berlin","Greece"=>"Athens","Ireland"=>"Dublin","Netherlands"=>"Amsterdam","Portugal"=>"Lisbon","Spain"=>"Madrid","Sweden"=>"Stockholm","United Kingdom"=>"London","Cyprus"=>"Nicosia","Lithuania"=>"Vilnius","Czech Republic"=>"Prague","Estonia"=>"Tallin","Hungary"=>"Budapest","Latvia"=>"Riga","Malta"=>"Valetta","Austria"=>"Vienna","Poland"=>"Warsaw");
?>
<br><br>    
<div class='container'>
    <table class="table table-striped table-hover" style="text-align:center;">
        <thead class="thead-dark">
            <tr>            
                <th>Country</th>
                <th>Capital</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($countries as $country => $capital){
                    echo "<tr><td>" . $country . "</td><td>" . $capital . "</td></tr>";
                }
            ?>
        </tbody>
    </table>
</div>
<br><br>
<?php
    include("views/footer.php");
?> 