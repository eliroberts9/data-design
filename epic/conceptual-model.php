<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Conceptual Model</title>
	</head>
	<body>

		<h1>Entities and Attributes</h1>

		<ul>
			<li>User</li>
			<ul>
				<li>userId (Primary Key)</li>
				<li>userActivationToken</li>
				<li>userHash</li>
				<li>userJoinDate</li>
				<li>userLastLogin</li>
			</ul>
			<br />

			<li>Comment</li>
			<ul>
				<li>commentId (Primary Key)</li>
				<li>commentUserId (Foreign Key)</li>
				<li>commentParentId</li>
				<li>commentContent</li>
				<li>commentDate</li>
			</ul>
			<br />

			<li>Recommend</li>
			<ul>
				<li>recommendUserId (Foreign Key)</li>
				<li>recommendCommentId (Foreign Key)</li>
			</ul>
			<br />

			<li>Flag</li>
			<ul>
				<li>flagUserId (Foreign Key)</li>
				<li>flagCommentId (Foreign Key)</li>
			</ul>
			<br />

			<li>Relationships</li>
			<ul>
				<li>One USER can have many COMMENTS (1 to n).</li>
				<li>One COMMENT can have many COMMENTS (1 to n).</li>
				<li>Many USERS can have many RECOMMENDS (m to n).</li>
				<li>Many USERS can have many FLAGS. (m to n).</li>
			</ul>
		</ul>
		<a href="./index.php">Home</a>
	</body>
</html>