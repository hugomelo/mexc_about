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

echo $this->Bl->sbox(array('id' => 'staff'), array('size' => array('M' => 12, 'g' => -1), 'type' => 'cloud'));
	echo $bl->sdiv(array('class' => 'bg')); echo $bl->ediv();
	echo $this->Bl->h2Dry(__d('mexc', 'Equipe', true));
	echo $bl->sdiv(array('class' => 'members'));
		echo $this->Cork->tile(array(),array(
			'key' => 'staff_members',
			'type' => 'cs_cork',
			'title' => __d('mexc', 'Membros', true),
			'editorsRecommendations' => __d('mexc', 'Membros da equipe.', true),
			'options' => array(
				'cs_type' => 'about_members',
			)
		));
		echo $bl->floatBreak();
	echo $bl->ediv();
	
echo $this->Bl->ebox();

echo $this->Bl->sbox(array('id' => 'council'), array('size' => array('M' => 5, 'g' => -1), 'type' => 'cloud'));
	echo $bl->sdiv(array('class' => 'bg')); echo $bl->ediv();
	echo $this->Cork->tile(array(),array(
		'key' => 'staff_council',
		'type' => 'cs_cork',
		'title' => __d('mexc', 'Formação do Conselho Diretor', true),
		'editorsRecommendations' => __d('mexc', 'Membros e respectivas instituições do Conselho Diretor.', true),
		'options' => array(
			'cs_type' => 'staff_council',
		)
	));
echo $this->Bl->ebox();
