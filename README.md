# Continuum Health Solutions
## Coding Assessment: Nested Lists

### Project Requirements:
	Language: Any
	Constraints: N/A

	Please provide a simple solution to the following problem in a language of your choice:
	We want to be able to output a nested list of items - items in the list can be sub-items of other
	items in the list. A simple database table would have the following fields:
		1. itemID - int
		2. item - varchar
		3. subItemOfID - int

	In your answer, please demonstrate your understanding of the run-time complexity of the solution you have chosen, as well as
	resource usage in terms of database access. If you would like, show alternative options, and list the advantages and
	disadvantages of using those options.

### Project Description:
	Language: Written in PHP Using WAMP as a localhost
	Libraries: None
	OS Environment: Windows

	Since the solution provided is a nested loop that outputs and pairs itemID to subItemOfID the time complexity should be O(n^m) where m is the number of nested loops, in this case 2.
	Therefore to output the solution the time complexity would be O(n^2), however, this doesn't account for database access if using a database to pull information from a table into an
	array within PHP. While performance within databases relates to multiple levels of memory heirarchy, grid computing, etc., database usage is unclear as to the exact amount that would
	be used memory wise, however, the time complexity to parse through a table with an index of 'itemID' would be O(log(n)) where n is the size of the table. The larger the table the
	more memory usage and time it will take to query and parse the table into PHP.