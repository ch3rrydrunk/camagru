<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   bootstrap.php                                      :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ch3rryhq <ch3rryhq@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/02/09 13:47:21 by ch3rryhq          #+#    #+#             */
/*   Updated: 2020/02/09 13:47:21 by ch3rryhq         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';

/*
    Place maybe for some more requires...
    If not -> just spark up the router
*/
Route::start(); // запускаем маршрутизатор
?>
