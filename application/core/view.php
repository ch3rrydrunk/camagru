<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   view.php                                           :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ch3rryhq <ch3rryhq@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/02/16 05:58:15 by ch3rryhq          #+#    #+#             */
/*   Updated: 2020/02/16 05:58:15 by ch3rryhq         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class View
{
	// // set the def view
	// public $template_view;	
    
    /*
	$content_file - содержание страниц;
	$template_file - основной шаблон;
	$data - именной массив с инфой для вставки;
	*/
	function generate($content_view, $template_view, $data = null)
	{
        if (is_array($data))
        {
			extract($data);
		}
		include 'application/views/'.$template_view;
	}
}
