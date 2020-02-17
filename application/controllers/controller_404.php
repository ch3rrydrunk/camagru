<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   controller_404.php                                 :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ch3rryhq <ch3rryhq@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/02/18 01:40:19 by ch3rryhq          #+#    #+#             */
/*   Updated: 2020/02/18 01:40:19 by ch3rryhq         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class Controller_404 extends Controller
{
	
	function action_index()
	{
		$this->view->generate('404_view.php', 'template_view.php');
	}

}
