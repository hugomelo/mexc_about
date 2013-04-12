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

echo $this->Bl->sbox(array('id' => 'history'), array('size' => array('M' => 7, 'g' => -1), 'type' => 'cloud'));
	echo $bl->sdiv(array('class' => 'bg')); echo $bl->ediv();
	echo $this->Cork->tile(array(),array(
		'key' => 'about_history',
		'type' => 'cs_cork',
		'title' => __d('mexc', 'História do museu na sessão sobre', true),
		'editorsRecommendations' => __d('mexc', 'Um texto sobre a história do museu.', true),
		'options' => array(
			'cs_type' => 'about_history',
			'type' => 'about_history'
		)
	));
echo $this->Bl->ebox();
