<?php

/**
 *
 * Copyright 2011-2013, Museu Exploratório de Ciências da Unicamp (http://www.museudeciencias.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2011-2013, Museu Exploratório de Ciências da Unicamp (http://www.museudeciencias.com.br)
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link          https://github.com/museudecienciasunicamp/mexc_about.git Mexc About public repository
 */

echo $this->Bl->menu(array(), array('menuLevel' => 3));

echo $bl->sdiv(array('id' => 'about'));

	echo $bl->sdiv(array('id' => 'title'));	
		echo $bl->h2Dry(__d('mexc', 'O Museu Exploratório de Ciências da Unicamp', true));
	echo $bl->ediv();
	
	// Mission
	echo $this->Bl->sbox(array('id' => 'mission'), array('size' => array('M' => 12, 'g' => -1), 'type' => 'cloud'));
		echo $bl->sboxContainer(array('id' => 'mission_info'), array('size' => array('M' => 3, 'g' => -1, 'm' => -1)));
			echo $this->Cork->tile(array(), array(
				'key' => 'about_museum_header_info',
				'type' => 'text_cork',
				'title' => __d('mexc', 'Informação inicial da página de sobre', true),
				'editorsRecommendations' => __d('mexc', 'Um pequeno texto falando sobre a missão do museu.', true),
			));
		echo $bl->eboxContainer();
		echo $bl->sboxContainer(array('id' => 'image_ilustration'), array());
			echo $bl->sbox(array(), array('size' => array('M' => 9, 'g' => -1, 'm' => -1)));
				echo $this->Cork->tile(array(),array(
					'key' => 'about_museum_header_image',
					'type' => 'cs_cork',
					'title' => __d('mexc', 'Imagem ilustrativa do museu', true),
					'editorsRecommendations' => __d('mexc', 'Uma imagem que ocupará parte da nuvem inicial na página de sobre.', true),
					'options' => array(
						'cs_type' => 'about_images',
						'type' => 'about_ilustration_image'
					)
				));
			echo $this->Bl->ebox();
		echo $bl->eboxContainer();
		echo $bl->sdiv(array('id' => 'social_networks')); 
			echo $this->Bl->paraDry(array('O Museu por aí:'));
			foreach (array_reverse(Configure::read('Mexc.SocialMedias')) as $k => $item)
				echo $this->Bl->anchor(array('id' => $k, 'title' => $item['label']), array('url' => $item['url']), $this->Bl->hiddenSpanDry($item['label']));
		echo $bl->ediv();
	echo $this->Bl->ebox();

	// Service
	echo $this->Bl->sbox(array('id' => 'service'), array('size' => array('M' => 5, 'g' => -1), 'type' => 'cloud'));
		echo $this->Bl->div(array('class' => 'bg'));
		echo $this->Bl->h3Dry(__d('mexc', 'Atendimento', true));
		echo $this->Cork->tile(array(),array(
			'key' => 'about_museum_service',
			'type' => 'cs_cork',
			'title' => __d('mexc', 'Informação sobre o antendimento', true),
			'editorsRecommendations' => __d('mexc', 'Um texto falando sobre o horário de atendimento, telefones, contato.', true),
			'options' => array(
				'cs_type' => 'about_texts',
			)
		));
	echo $this->Bl->ebox();

	// Map
	echo $this->Bl->sbox(array('id' => 'map'), array('size' => array('M' => 7, 'g' => -1), 'type' => 'cloud'));
		echo $this->Bl->h3Dry(__d('mexc', 'Como chegar', true));
		echo $this->Cork->tile(array(),array(
			'key' => 'about_museum_map',
			'type' => 'cs_cork',
			'title' => __d('mexc', 'Como chegar', true),
			'editorsRecommendations' => __d('mexc', 'Gadget do google de como chegar', true),
			'options' => array(
				'cs_type' => 'about_texts',
			)
		));
	echo $this->Bl->ebox();

	echo $this->Bl->floatBreak();


	// Supporters
	echo $this->Bl->sboxContainer(array(), array('size' => array('M' => 4)));
		echo $this->Bl->sbox(array('id' => 'where_we_are'), array('size' => array('M' => 4, 'g' => -1), 'type' => 'cloud'));
			echo $this->Bl->sboxContainer(array('class' => 'logos'), array('size' => array('M' => 4)));
				echo $this->Bl->h3Dry(__d('mexc', 'Participamos', true));
				echo $this->Cork->tile(array(),array(
					'key' => 'logos_where_we_are',
					'type' => 'cs_cork',
					'title' => __d('mexc', 'Logos da área "participamos"', true),
					'editorsRecommendations' => __d('mexc', 'Esses dados serão listados na área de logos da área "participamos". É importante que seja adicionado um título como "Participamos" ou "Parceiros".', true),
					'location' => array('public_page'),
					'options' => array(
						'cs_type' => 'about_just_logos',
					)
				));
				echo $this->Bl->floatBreak();
			echo $this->Bl->eboxContainer();
		echo $this->Bl->ebox();

		echo $this->Bl->sbox(array('id' => 'supporters'), array('size' => array('M' => 4, 'g' => -1), 'type' => 'cloud'));
			echo $this->Bl->sboxContainer(array('class' => 'logos'), array('size' => array('M' => 4, 'g' => -1)));
				echo $this->Bl->h3Dry(__d('mexc', 'Apoio', true));
				echo $this->Cork->tile(array(),array(
					'key' => 'logos_supporters',
					'type' => 'cs_cork',
					'title' => __d('mexc', 'Logos da área "apoio"', true),
					'editorsRecommendations' => __d('mexc', 'Esses dados serão listados na área de logos da área "apoio". É importante que seja adicionado um título como "Apoio" ou "Apoiadores".', true),
					'location' => array('public_page'),
					'options' => array(
						'cs_type' => 'about_just_logos',
					)
				));
				echo $bl->floatBreak();
			echo $this->Bl->eboxContainer();
		echo $this->Bl->ebox();
	echo $this->Bl->eboxContainer();

	// About Site
	echo $this->Bl->sbox(array('id' => 'about_site' ), array('size' => array('M' => 5, 'g' => -1), 'type' => 'cloud'));
		echo $this->Bl->h3Dry(__d('mexc', 'Sobre o site', true));
		echo $bl->sdiv(array('class' => 'bg')); echo $bl->ediv();
		echo $this->Cork->tile(array(),array(
			'key' => 'about_museum_site',
			'type' => 'cs_cork',
			'title' => __d('mexc', 'Sobre o site', true),
			'editorsRecommendations' => __d('mexc', 'Informação sobre o site', true),
			'options' => array(
				'cs_type' => 'about_texts',
			)
		));
	echo $this->Bl->ebox();

	// Press
	echo $this->Bl->sbox(array('id' => 'press'), array('size' => array('M' => 3, 'g' => -1), 'type' => 'cloud'));
		echo $this->Bl->sdiv(array('class' => 'bg')); echo $bl->ediv();
		echo $this->Bl->h3Dry(__d('mexc', 'Imprensa', true));
		echo $this->Cork->tile(array(),array(
			'key' => 'about_museum_press',
			'type' => 'cs_cork',
			'title' => __d('mexc', 'Imprensa', true),
			'editorsRecommendations' => __d('mexc', 'Informação sobre assessoria de imprensa.', true),
			'options' => array(
				'cs_type' => 'about_texts',
			)
		));
	echo $this->Bl->ebox();

echo $bl->ediv();
