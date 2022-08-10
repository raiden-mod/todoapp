<?php
// this will contain database root app root and file location
// database params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'todo');

$conn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
$options = array(
	PDO::ATTR_PERSISTENT => true,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try {
	$connection = new PDO($conn, DB_USER, DB_PASS, $options);
	echo "connection successful";
} catch (PDOException  $e) {
	$error = $e->getMessage();
	echo $error;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<title>To-Do App</title>
</head>

<body>
	<div class="container">
		<div class="sidebar">
			<a href="">To-Do</a>
			<div class="side-navigation">
				<div class="side-navigation-bar">
					<div>
						<i class="fa fa-calendar active"></i>
						<i class="fa fa-list"></i>
						<i class="fa fa-line-chart"></i>
						<i class="fa fa-cog"></i>
					</div>
				</div>
			</div>
			<div class="time">
				<p>11:00</p>
				<span>Jul 27</span>
			</div>
		</div>
		<div class="aside">
			<div class="top-navigation">
				<div class="dates">
					<ul>
						<li>Jul 26</li>
						<li>Today</li>
						<li>Jul 28</li>
						<li><i class="fa fa-ellipsis-h"></i></li>
					</ul>
				</div>
				<div class="pagination">
					<span>Categories <span class="cat-no">3/4</span></span>
					<span>
						<i class="fa fa-angle-left"></i>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="http://"><img src="user4.png" alt="" height="25px" width="25px"></a>
					</span>
				</div>
			</div>
			<div class="tasks">
				<div class="task-body work">
					<div class="top-bar">
						<h5>WORK</h5>
						<li><i class="fa fa-ellipsis-h"></i></li>
					</div>
					<div class="each-task">
						<div class="task">
							<div class="task-container">
								<div class="task-status">
									<i class="fa fa-check"></i>
								</div>
								<div class="task-description">
									<h5>Meeting with a client</h5>
									<p>John Doe from TechX company...</p>
									<span>12:00-13:00</span>
								</div>
							</div>
						</div>
						<div class="task">
							<div class="task-container">
								<div class="task-status">
									<i class="fa fa-check"></i>
								</div>
								<div class="task-description">
									<h5>Web Heroes</h5>
									<p>Prepare new screen</p>
									<span>Until:16:00</span>
								</div>
							</div>
						</div>
						<div class="completed-tasks">
							<p>Done</p>
						</div>
						<div class="task done">
							<div class="task-container">
								<div class="task-status">
									<i class="fa fa-check"></i>
								</div>
								<div class="task-description">
									<h5>TrusteDoctor</h5>
									<p>make all fixes</p>
									<span>12:00-13:00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="task-body home">
					<div class="top-bar">
						<h5>HOME</h5>
						<li><i class="fa fa-ellipsis-h"></i></li>
					</div>
					<div class="each-task">
						<div class="task">
							<div class="task-container">
								<div class="task-status">
									<i class="fa fa-check"></i>
								</div>
								<div class="task-description">
									<h5>Grocery Shopping</h5>
									<p>shopping list 2x rolls...</p>
									<span>09:00-11:00</span>
								</div>
							</div>
						</div>
						<div class="task">
							<div class="task-container">
								<div class="task-status">
									<i class="fa fa-check"></i>
								</div>
								<div class="task-description">
									<h5>Dinner</h5>
									<p>Chicken wings and hot sauce</p>
									<span>20:00 - 21:00</span>
								</div>
							</div>
						</div>
						<div class="task">
							<div class="task-container">
								<div class="task-status">
									<i class="fa fa-check"></i>
								</div>
								<div class="task-description">
									<h5>Walk the dog</h5>
									<span>22:00 - 23:00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="task-body others">
					<div class="top-bar">
						<h5>OTHERS</h5>
						<li><i class="fa fa-ellipsis-h"></i></li>
					</div>
					<div class="each-task">
						<div class="task">
							<div class="task-container">
								<div class="task-status">
									<i class="fa fa-check"></i>
								</div>
								<div class="task-description">
									<h5>Meeting with friends</h5>
									<p>At green beer pub</p>
									<span>from: 23:00</span>
								</div>
							</div>
						</div>
						<div class="completed-tasks">
							<p>Done</p>
						</div>
						<div class="task failed">
							<div class="task-container">
								<div class="task-status">
									<i class="fa fa-times"></i>
								</div>
								<div class="task-description">
									<h5>Give camera back</h5>
									<p>Return to micheal</p>
									<span>until: 10:00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="statistics">
				<div class="status">
					<div class="progress">
						<h5>Completed: <span>1 / 3</span></h5>
						<div class="progress-bar-grey">
							<div class="progress-bar-orange" style="width: 33.33%;"></div>
						</div>
					</div>
					<div class="add-task work">
						<i class="fa fa-plus" onclick="openOverlay()"></i>
						<span>Add task</span>
					</div>
				</div>
				<div class="status">
					<div class="progress">
						<h5>Completed: <span> 0 / 3</span></h5>
						<div class="progress-bar-grey">
							<div class="progress-bar-orange" style="width: 10%"></div>
						</div>
					</div>
					<div class="add-task home">
						<i class="fa fa-plus" onclick="openOverlay()"></i>
						<span>Add task</span>
					</div>
				</div>
				<div class="status">
					<div class="progress">
						<h5>Completed: <span>0 / 2</span></h5>
						<div class="progress-bar-grey">
							<div class="progress-bar-orange" style="width: 10%;"></div>
						</div>
					</div>
					<div class="add-task others">
						<i class="fa fa-plus" onclick="openOverlay()"></i>
						<span>Add task</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="overlay" id="overlay">
		<div class="cancel-blk">
			<div class="cancel" onclick="closeOverlay()"><i class="fa fa-times"></i></div>
		</div>
		<div class="task-pop-up">
			<form action="" id="form">
				<h2>Add New Task</h2>
				<div class="task-preference">
					<label class='task-selection id-pick1' for='task-section' onclick="addtask(1)">
						<input type="radio" class='radio-input' name="task-section" value='home' id='task-section-1'>
						<p class='task-name id1'>
							Home
						</p>
					</label>
					<label class='task-selection id-pick2' for='task-section' onclick="addtask(2)">
						<input type="radio" class='radio-input' name="task-section" value='work' id='task-section-2'>
						<p class='task-name id2'>
							Work
						</p>
					</label>
					<label class='task-selection id-pick3' for='task-section' onclick="addtask(3)">
						<input type="radio" class='radio-input' name="task-section" value='others' id='task-section-3'>
						<p class='task-name id3'>
							Others
						</p>
					</label>
				</div>
				<div class="task-input-blk">
					<div class="rptf" align='center'>
						<div style='display:flex;margin-top:20px' align='center'>
							<div class="input-field">
								<input type="text" id="name" name="name" class='input' placeholder="" required>
								<i class="icon fa "></i>
								<label class="input-label" for="name">Task Name</label>
							</div>
						</div>
					</div>
					<div class="rptf" align='center'>
						<div style='display:flex;margin-top:20px' align='center'>
							<div class="input-field">
								<textarea name="content" id="content" class='input' class='textarea' placeholder="" required></textarea>
								<i class="icon fa "></i>
								<label class="input-label" for="content">Task Description</label>
							</div>
						</div>
					</div>
					<div class="task-time">
						<label for="start">
							<span>Starts:</span>
							<input type="time" name="start" id="">
						</label>
						<label for="stop">
							<span>Ends:</span>
							<input type="time" name="stop" id="">
						</label>
					</div>
					<input type="button" value="Submit" class="submit-btn">
			</form>
		</div>
	</div>
	</div>
	<script src="app.js"></script>
</body>

</html>