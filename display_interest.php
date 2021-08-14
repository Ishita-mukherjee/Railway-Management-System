<html>
    <head>
        <title>Interest Chart</title>
    </head>
    <body>
        <?php
            $P = $_REQUEST['principal'];
            $I = $_REQUEST['interest'];
            $T = $_REQUEST['term'];
          ?>  
        
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Interest</th>
                    <th>Monthly Balance</th>
                </tr>
            </thead>
            <tbody>
                <?php
             for($i=1;$i<13;$i++)
            {
                $monthlyIR = $I/12;
                $monthlyI = $P/$monthlyIR;
                $monthlyB = $P+$monthlyI;
                $P=$monthlyB;
                print<<<HERE
                <tr>
                    <th>$i</th>
                    <th>$monthlyI</th>
                    <th>$monthlyB</th>
                </tr>
             }
HERE;
?>
            </tbody>
            <tfoot>
                <tr></tr>
            </tfoot>
        </table>
    </body>
</html>
