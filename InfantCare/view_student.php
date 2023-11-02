<?php
                require_once 'config.php';
                $result = mysqli_query($con, "SELECT * FROM `student` ") or die("error");
            ?> 
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Students</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
                                <th>Sl.No</th>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>age</th>
                                <th>gender</th>
                                
                                <!-- <th>dob</th> -->
                               
       

							</tr>
						</thead>
						<tbody>
                        <?php
                            $c=0;
                            while ($row = $result->fetch_assoc()) {
                                $firstname=$row["firstname"];
                                $lastname=$row["lastname"];
                                $age=$row["age"];
                               
                                $gender=$row["gender"];
                                // $dob=$row["dob"];

                                


                            $c++;
                        ?>
                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $firstname; ?></td>
                    <td><?php echo $lastname; ?></td>
                    <td><?php echo $age; ?></td>
                    <td><?php echo $gender; ?></td>
                    <!-- <td><?php echo  $dob; ?></td> -->
                    
                </tr>
                <?php
                }
                ?>
					