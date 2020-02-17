<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   model.php                                          :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ch3rryhq <ch3rryhq@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/02/16 05:41:14 by ch3rryhq          #+#    #+#             */
/*   Updated: 2020/02/16 05:41:14 by ch3rryhq         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

require_once "application/config/db.php";

class PDOWrapper
{
	public static $pdo = null;

	function __construct()
	{
		if (self::$pdo)
			return;
		try
		{
			self::$pdo = new PDO(
				DB_Config::$db_address,
				DB_Config::$db_user,
				DB_Config::$db_passwd
			);
			self::$pdo->setAttribute(
				PDO::ATTR_ERRMODE,
				PDO::ERRMODE_EXCEPTION
			);
		}
		catch (PDOException $e) {
		    error_log("Connection failed: ".$e->getMessage());
		}
	}

	function execute($query, $data = [])
	{
		try {
			$statement = self::$pdo->prepare($query);
			$statement->execute($data);
		} catch (PDOException $e) {
			error_log("Request\n".$query."\nfailed because: ".$e->getMessage());
		}
		return $statement;
	}
}

class Model
{
    protected $pdo;

    function __construct() 
    {
		$this->pdo = new PDOWrapper();
    }
    
	// DB procedures and requests are to be put here
	public function get_data()
	{
		
	}
}