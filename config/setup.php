<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   setup.php                                          :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: pdelefos <pdelefos@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/07/11 12:05:09 by pdelefos          #+#    #+#             */
/*   Updated: 2016/07/25 14:17:16 by pdelefos         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */
	include_once 'database.php';

	$bdd = host_connect();
	// $create = $bdd->prepare("CREATE DATABASE IF NOT EXISTS db_camagru");
	// $create->execute();

	$query = "CREATE TABLE IF NOT EXISTS user (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL)";
	$create = $bdd->prepare($query);
	$create->executep;
?>