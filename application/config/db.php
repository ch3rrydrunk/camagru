<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   db.php                                             :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ch3rryhq <ch3rryhq@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/02/18 00:15:38 by ch3rryhq          #+#    #+#             */
/*   Updated: 2020/02/18 00:15:38 by ch3rryhq         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class DB_Config
{
	public static $db_address	= 'mysql:dbname=camagru;host=127.0.0.1';
	public static $db_user		= 'camaguru';
	public static $db_passwd	= 'gurucama';

	public static $table_queries = array(
		'users' => "
			CREATE TABLE IF NOT EXISTS users (
				id			INT				AUTO_INCREMENT PRIMARY KEY,
				username	VARCHAR(32)		UNIQUE NOT NULL,
				email		VARCHAR(255)	UNIQUE NOT NULL,
				pass_hash	VARCHAR(255)	NOT NULL,
				avatar		VARCHAR(32)
			)
		",
		'images' => "
			CREATE TABLE IF NOT EXISTS images (
				filename	VARCHAR(32)		PRIMARY KEY NOT NULL,
				author_id	INT				NOT NULL,
				likes		INT				DEFAULT 0,
				upload_date	DATETIME,
				FOREIGN KEY (author_id) REFERENCES users(id)
					ON DELETE CASCADE
			)
		",
		'comments' => "
			CREATE TABLE IF NOT EXISTS comments (
				id			INT				AUTO_INCREMENT PRIMARY KEY,
				text		TEXT			NOT NULL,
				author_id	INT				NOT NULL,
				image_id	VARCHAR(32)		NOT NULL,
				FOREIGN KEY (author_id) REFERENCES users(id)
					ON DELETE CASCADE,
				FOREIGN KEY (image_id) REFERENCES images(filename)
					ON DELETE CASCADE
			)
		",
		'fk_images' => "
			ALTER TABLE users
				ADD CONSTRAINT fk_avatar FOREIGN KEY (avatar) REFERENCES images(filename);
		"
	);
}

?>