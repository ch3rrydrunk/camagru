<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   controller.php                                     :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ch3rryhq <ch3rryhq@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/02/16 05:40:52 by ch3rryhq          #+#    #+#             */
/*   Updated: 2020/02/16 05:40:52 by ch3rryhq         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
    
    /*
    Def action
    */
	function action_index()
	{
	
	}
}
