ALTER DATABASE eroberts9 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS flag;
DROP TABLE IF EXISTS recommend;
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS user;

CREATE TABLE user (
	userId BINARY(16) NOT NULL,
	userActivationToken CHAR(32),
	userHash CHAR(97),
	userJoinDate DATETIME('Y-m-d') NOT NULL,
	userLastLogin DATETIME(6),
	PRIMARY KEY(userId)
);

CREATE TABLE comment (
	commentId BINARY(16) NOT NULL,
	commentUserId BINARY(16) NOT NULL,
	commentParentId BINARY(16),
	commentContent VARCHAR(300) NOT NULL,
	commentDate DATETIME(6),
	INDEX(commentUserId),
	FOREIGN KEY(commentUserId) REFERENCES user(userId),
	FOREIGN KEY(commentParentId) REFERENCES comment(commentId),
	PRIMARY KEY(commentId)
);

CREATE TABLE recommend (
	recommendUserId BINARY(16) NOT NULL,
	recommendCommentId BINARY(16) NOT NULL,
	INDEX(recommendUserId),
	INDEX(recommendComentId),
	FOREIGN KEY(recommendUserId) REFERENCES user(userId),
	FOREIGN KEY(recommendCommentId) REFERENCES comment(commentId),
	PRIMARY KEY(recommendUserId, recommendCommentId)
);

CREATE TABLE flag (
	flagUserId BINARY(16) NOT NULL,
	flagCommentId BINARY(16) NOT NULL,
	INDEX(flagUserId),
	INDEX(flagCommentId),
	FOREIGN KEY(flagUserId) REFERENCES user(userId),
	FOREIGN KEY(flagCommentId) REFERENCES comment(commentId),
	PRIMARY KEY(flagUserId, flagCommentId)
);