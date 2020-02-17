<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ini.php                                            :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ch3rryhq <ch3rryhq@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/02/18 00:19:17 by ch3rryhq          #+#    #+#             */
/*   Updated: 2020/02/18 00:19:17 by ch3rryhq         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

//time settings
date_default_timezone_set('Europe/Moscow');

//logging
error_reporting(E_ALL);
ini_set('ignore_repeated_errors', true);
ini_set('display_errors', true);
ini_set('log_errors', true);
ini_set("error_log", "camagru.log");
ini_set('log_errors_max_len', 1024);

?>