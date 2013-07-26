<?php

namespace MfccMandrill;

return array(
	'service_manager' => array(
		'factories' => array(
			'mfccMandrillService'   => 'MfccMandrill\Service\MandrillServiceFactory',
		),
		'invokables' => array(

		),
	),
);
