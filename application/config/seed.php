<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   init.php                                           :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ch3rryhq <ch3rryhq@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/02/18 00:18:00 by ch3rryhq          #+#    #+#             */
/*   Updated: 2020/02/18 00:18:00 by ch3rryhq         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

require_once "application/config/ini.php";
require_once "application/config/db.php";
require_once "application/core/model.php";

$pdo = new PDOWrapper();
foreach (DB_Config::$table_queries as $name=>$query)
	$pdo->execute($query);

if (!file_exists("uploads"))
	mkdir("uploads");

?>