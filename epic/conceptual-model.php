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
				<li>userEmail</li>
				<li>userPassword</li>
			</ul>
			<br />

			<li>Profile</li>
			<ul>
				<li>profileId (Primary Key)</li>
				<li>profileUserEmail (Foreign Key)</li>
				<li>profileJoinedDate</li>
				<li>profileLastLogin</li>
				<li>profileRecent</li>
				<li>profilePosts</li>
				<li>profileComments</li>
			</ul>
			<br />

			<li>Comment</li>
			<ul>
				<li>commentId (Primary Key)</li>
				<li>commentProfileId (Foreign Key)</li>
				<li>commentContent</li>
				<li>commentDate</li>
				<li>commentDepth</li>
			</ul>
			<br />

			<li>Recommend</li>
			<ul>
				<li>recommendProfileId (Foreign Key)</li>
				<li>recommendCommentId (Foreign Key)</li>
			</ul>
			<br />

			<li>Flag</li>
			<ul>
				<li>flagProfileId (Foreign Key)</li>
				<li>flagCommentId (Foreign Key)</li>
			</ul>
		</ul>
		<a href="./index.php">Home</a>
	</body>
</html>