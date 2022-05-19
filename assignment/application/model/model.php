<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Descriptions (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
			return "Descriptions table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	// This is a simple fix to represent, what would in reality be, a table in the database containing the brand names. 
	// The database schema would then contain a foreign key for each drink entry linking back to the brand name
	// This stuture allows us to read the list of brand names to populate a menu in a view
	
 
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Descriptions (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'Coke', 'Coca Cola X3D Model', 'This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online', 'Coca Cola','New York Harbour, 1886','It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special'); " .
			"INSERT INTO Descriptions (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'Coke Zero', 'Coca Cola Zero X3D Model', 'This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online', 'Coca Cola Zero','100% the taste with 0% of the sugar','First introduced in 2005 as Coca Colas biggest launch in 22 years and just recently reformulated last year to optimize the drinks taste even more while containing the same ingredients, Coca Cola Zero offers an indistinguishable taste with zero added sugar. You will not tell the difference!'); " .
			"INSERT INTO Descriptions (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'Costa Coffee', 'Costa Coffee X3D Model', 'This X3D model of the costa coffee has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online', 'Costa Coffee', 'We Make it Better','The Costa Coffee story began back in 1971 when Sergio and Bruno arrived in London with a burning desire to make great tasting coffee a part of everyday life. Setting up a small roastery in Fenchurch Street, they committed to crafting the finest quality coffee. UKs favourite to this day.'); " .
			"INSERT INTO Descriptions (Id, brand, modelTitle, modelSubtitle, modelDescription) 
				VALUES (4, 'Coke Main', 'Coca Cola Great Britain','Founded in 1886 Dr John S Pemberton','The Coca Cola Company is the worlds leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.'); " );
			return "Descriptions data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Descriptions';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['brand'] = $data['brand']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	
}
?>